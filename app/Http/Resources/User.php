<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @author Xanders
 * @see https://team.xsamtech.com/xanderssamoth
 */
class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $statuses = [
            'created' => 'Créé',
            'activated' => 'Activé',
            'disabled' => 'Désactivé',
            'blocked' => 'Bloqué',
            'deleted' => 'Supprimé',
        ];

        return [
            'id' => $this->id,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'surname' => $this->surname,
            'gender' => $this->gender,
            'birthdate' => $this->birthdate,
            'age' => !empty($this->birthdate) ? $this->age() : null,
            'address_1' => $this->address_1,
            'address_2' => $this->address_2,
            'p_o_box' => $this->p_o_box,
            'email' => $this->email,
            'phone' => $this->phone,
            'email_verified_at' => $this->email_verified_at,
            'phone_verified_at' => $this->phone_verified_at,
            'username' => $this->username,
            'password' => $this->password,
            'remember_token' => $this->remember_token,
            'avatar_url' => !empty($this->avatar_url) ? $this->avatar_url : getWebURL() . '/assets/img/user.png',
            'api_token' => $this->api_token,
            'status' => $this->status,
            'status_STRING' => !empty($this->status) ? $statuses[$this->status] : null,
            'role' => Role::make($this->role),
            'buildings' => Building::collection($this->buildings)->resolve(),
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at->format('Y-m-d H:i:s')
        ];
    }
}
