<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FilmResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'ticket_price' => (string) $this->ticket_price,
            'release_date' => (string) $this->release_date,
            'country_id' => $this->country_id,
            'photo' => public_path().'/storage/images/'.$this->photo,
        ];
    }
}
