<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Resources\User as ResourcesUser;
use App\Models\Area;
use App\Models\Building;
use App\Models\PasswordReset;
use App\Models\Role;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

/**
 * @author Xanders
 * @see https://team.xsamtech.com/xanderssamoth
 */
class HomeController extends Controller
{
    // ==================================== HTTP GET METHODS ====================================
    /**
     * GET: Home page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        session()->forget('full_address');

        $areas = Area::orderBy('name')->get();

        return view('welcome', compact('areas'));
    }

    /**
     * GET: Customer registration page
     *
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        $customer_role = Role::where('role_name', 'Client')->first();
        $customers_req = User::where('role_id', $customer_role->id)->paginate(20)->appends(request()->query());
        $customers = ResourcesUser::collection($customers_req)->resolve();

        return view('dashboard', [
            'customers_req' => $customers_req,
            'customers' => $customers,
        ]);
    }

    /**
     * GET: Customer registration page
     *
     * @return \Illuminate\View\View
     */
    public function registration()
    {
        if (session()->has('building_name')) {
            return view('registration');

        } else {
            return redirect('/');
        }
    }

    // ==================================== HTTP POST METHODS ====================================
    /**
     * POST: Check eligibility
     *
     * @return \Illuminate\View\View
     */
    public function checkEligibility(Request $request)
    {
        $gombe = Area::where('name', 'Gombe')->first();
        $userArea = Area::where('name', $request->area)->first();

        if (!$gombe) {
            return response()->json([
                'message' => 'Commune source (Gombe) introuvable'
            ], 404);
        }

        if (!$userArea) {
            return response()->json([
                'message' => 'Commune sélectionnée introuvable'
            ], 404);
        }

        $distance = distanceKm(
            $userArea->latitude,
            $userArea->longitude,
            $gombe->latitude,
            $gombe->longitude
        );

        if ($distance < 8) {
            session()->put('building_name', $request->building_name);
            session()->put('area', $request->area);

            return response()->json([
                'isEligible' => true,
                'message' => 'Votre immeuble est éligible. Vous pouvez vous inscrire.'
            ]);

        } else {
            return response()->json([
                'isEligible' => false,
                'message' => 'Immeuble non éligible (À plus de 8 Km de Gombe).'
            ]);
        }
    }

    //
    /**
     * POST: Check eligibility
     *
     * @return \Illuminate\View\View
     */
    public function registerCustomer(Request $request)
    {
        $customer_role_id = null;

        $customer_role = Role::where('role_name', 'Client')->first();

        if (!empty($customer_role)) {
            $customer_role_id = $customer_role->id;

        } else {
            // Add "Client" role
            $role = Role::create([
                'role_name' => 'Client',
                'role_description' => 'Personne ou entreprise devenue client via la plateforme'
            ]);

            $customer_role_id = $role->id;
        }

        // User inputs
        $inputs = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'surname' => $request->surname,
            'gender' => $request->gender,
            'birthdate' => $request->birthdate,
            'address_1' => $request->address_1,
            'address_2' => $request->address_2,
            'p_o_box' => $request->p_o_box,
            'email' => $request->email,
            'phone' => $request->phone,
            'username' => $request->username,
            'password' => $request->password,
            'status' => 'activated',
            'role_id' => $customer_role_id,
        ];
        $users = User::all();

        // Validate required fields
        if (trim($inputs['firstname']) == null) {
            return redirect()->back()->with('error_message', 'Le champ « <strong>Prénom</strong> » est obligatoire');
        }

        if (trim($inputs['phone']) == null) {
            return redirect()->back()->with('error_message', 'Le champ « <strong>Téléphone / WhatsApp</strong> » est obligatoire');
        }

        if ($inputs['phone'] != null) {
            // Check if phone already exists
            foreach ($users as $another_user):
                if ($another_user->phone == $inputs['phone']) {
                    return redirect()->back()->with('error_message', 'Ce numéro de téléphone existe déjà');
                }
            endforeach;

            // Check correct phone
            // if (preg_match('/^[0-9]{10,15}$/', $inputs['phone']) == 0) {
            //     return redirect()->back()->with('error_message', 'Veuillez écrire un numéro de téléphone correct');
            // }
        }

        $random_string = (string) random_int(1000000, 9999999);

        if ($inputs['email'] != null AND $inputs['phone'] != null) {
            PasswordReset::create([
                'email' => $inputs['email'],
                'phone' => $inputs['phone'],
                'token' => $random_string,
                'former_password' => $inputs['password']
            ]);

        } else {
            if ($inputs['email'] != null) {
                PasswordReset::create([
                    'email' => $inputs['email'],
                    'token' => $random_string,
                    'former_password' => $inputs['password']
                ]);
            }

            if ($inputs['phone'] != null) {
                PasswordReset::create([
                    'phone' => $inputs['phone'],
                    'token' => $random_string,
                    'former_password' => $inputs['password']
                ]);
            }
        }

        $user = User::create($inputs);

        $token = $user->createToken('auth_token')->plainTextToken;

        $user->update([
            'api_token' => $token,
            'updated_at' => now()
        ]);

        Building::create([
            'building_name' => $request->building_name,
            'neighborhood' => $request->neighborhood,
            'area' => $request->area,
            'full_address' => $request->full_address,
            'is_eligible' => 1,
            'status' => 'pending',
            'user_id' => $user->id
        ]);

        return redirect(RouteServiceProvider::HOME)->with('success_message', 'Enregistrement terminé ! Nous vous contactons bientôt.');
    }
}
