<?php

namespace App\Services;

use App\Http\Controllers\BaseController;
use App\Http\Resources\PasswordReset as ResourcesPasswordReset;
use App\Http\Resources\User as ResourcesUser;
use App\Models\PasswordReset;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Nette\Utils\Random;
use stdClass;

/**
 * @author Xanders
 * @see https://team.xsamtech.com/xanderssamoth
 */
class UserService
{
    protected $baseController;

    // Injection du service SmsService
    public function __construct(BaseController $baseController)
    {
        $this->baseController = $baseController;
    }

    /**
     * Add a new user
     *
     * @param  \Illuminate\Http\Request  $request
     * @return App\Models\User
     */
    public function addUser(Request $request)
    {
        // Get inputs
        $inputs = [
            'national_number' => $request->national_number,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'surname' => $request->surname,
            'gender' => $request->gender,
            'birth_city' => $request->birth_city,
            'birth_date' => $request->birth_date,
            'nationality' => $request->nationality,
            'p_o_box' => $request->p_o_box,
            'email' => $request->email,
            'phone' => $request->phone,
            'email_verified_at' => $request->email_verified_at,
            'password' => !empty($request->password) ? Hash::make($request->password) : null,
            'confirm_password' => $request->confirm_password,
            'remember_token' => $request->remember_token,
            'api_token' => $request->api_token,
            'status_id' => $request->status_id
        ];
        $users = User::all();
        $password_resets = PasswordReset::all();

        // Validate required fields
        if (trim($inputs['email']) == null AND trim($inputs['phone']) == null) {
            return $this->baseController->handleError('Veuillez mettre un email ou un n° de téléphone');
        }

        if ($inputs['email'] != null) {
            // Check if user email already exists
            foreach ($users as $another_user):
                if ($another_user->email == $inputs['email']) {
                    return $this->baseController->handleError($inputs['email'], 'Cet email existe déjà', 400);
                }
            endforeach;

            // If email exists in "password_reset" table, delete it
            if ($password_resets != null) {
                foreach ($password_resets as $password_reset):
                    if ($password_reset->email == $inputs['email']) {
                        $password_reset->delete();
                    }
                endforeach;
            }
        }

        if ($inputs['phone'] != null) {
            // Check if user phone already exists
            foreach ($users as $another_user):
                if ($another_user->phone == $inputs['phone']) {
                    return $this->baseController->handleError($inputs['phone'], 'Ce n° de téléphone existe déjà', 400);
                }
            endforeach;

            // If phone exists in "password_reset" table, delete it
            if ($password_resets != null) {
                foreach ($password_resets as $password_reset):
                    if ($password_reset->phone == $inputs['phone']) {
                        $password_reset->delete();
                    }
                endforeach;
            }
        }

        if ($inputs['password'] != null) {
            if ($inputs['confirm_password'] != $inputs['password'] OR $inputs['confirm_password'] == null) {
                return $this->baseController->handleError($inputs['confirm_password'], __('notifications.confirm_password_error'), 400);
            }

            if (preg_match('#^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$#', $inputs['password']) == 0) {
                return $this->baseController->handleError($inputs['password'], __('miscellaneous.password.error'), 400);
            }

            $random_string = (string) random_int(1000000, 9999999);

            if ($inputs['email'] != null AND $inputs['phone'] != null) {
                $password_reset = PasswordReset::create([
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
                    $password_reset = PasswordReset::create([
                        'phone' => $inputs['phone'],
                        'token' => $random_string,
                        'former_password' => $inputs['password']
                    ]);
                }
            }
        }

        if ($inputs['password'] == null) {
            $random_string = (string) random_int(1000000, 9999999);

            if ($inputs['email'] != null AND $inputs['phone'] != null) {
                $password_reset = PasswordReset::create([
                    'email' => $inputs['email'],
                    'phone' => $inputs['phone'],
                    'token' => $random_string,
                    'former_password' => Random::generate(10, 'a-zA-Z'),
                ]);

                $inputs['password'] = Hash::make($password_reset->former_password);

            } else {
                if ($inputs['email'] != null) {
                    $password_reset = PasswordReset::create([
                        'email' => $inputs['email'],
                        'token' => $random_string,
                        'former_password' => Random::generate(10, 'a-zA-Z'),
                    ]);

                    $inputs['password'] = Hash::make($password_reset->former_password);
                }

                if ($inputs['phone'] != null) {
                    $password_reset = PasswordReset::create([
                        'phone' => $inputs['phone'],
                        'token' => $random_string,
                        'former_password' => Random::generate(10, 'a-zA-Z'),
                    ]);

                    $inputs['password'] = Hash::make($password_reset->former_password);
                }
            }
        }

        $user = User::create($inputs);
        $token = $user->createToken('auth_token')->plainTextToken;

        $user->update([
            'api_token' => $token,
            'updated_at' => now()
        ]);

        $object = new stdClass();
        $object->password_reset = new ResourcesPasswordReset($password_reset);
        $object->user = new ResourcesUser($user);

        return $this->baseController->handleResponse($object, 'Utilisateur créé');
    }
}
