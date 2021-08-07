<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class EcolesEnCoursCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'            => $this->id,
            'name_school'   => $this->name_school,
            'date_ecole'    => $this->date_ecole
        ];
    }
}
