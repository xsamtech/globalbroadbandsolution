<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @author Xanders
 * @see https://team.xsamtech.com/xanderssamoth
 */
class Building extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray(Request $request)
    {
        $statuses = [
            'pending' => 'En attente',
            'selected' => 'Sélectionné',
            'rejected' => 'Réjeté',
        ];

        return [
            'id' => $this->id,
            'building_name' => $this->building_name,
            'neighborhood' => $this->neighborhood,
            'area' => $this->area,
            'full_address' => $this->full_address,
            'is_eligible' => $this->is_eligible,
            'is_eligible_STRING' => $this->is_eligible == 1 ? 'Oui' : 'Non',
            'status' => $this->status,
            'status_STRING' => !empty($this->status) ? $statuses[$this->status] : null,
            'user' => User::make($this->user),
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at->format('Y-m-d H:i:s')
        ];
    }
}
