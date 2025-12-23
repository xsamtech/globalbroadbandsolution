<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Area;
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
        $areas = Area::orderBy('name')->get();

        return view('welcome', compact('areas'));
    }

    /**
     * GET: Customer registration page
     *
     * @return \Illuminate\View\View
     */
    public function registration()
    {
        return view('registration');
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
                'message' => 'Immeuble non éligible (À plus de 8km de Gombe).'
            ]);
        }
    }

    //
}
