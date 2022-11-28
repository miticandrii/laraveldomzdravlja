<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DomZdravljaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'naziv' => $this->resource->naziv,
            'adresa' => $this->resource->adresa,
            'email' => $this->resource->email,
            'grad' => $this->resource->grad,
            'zastupnik'=> $this->resource->zastupnik
        ];

    }
}
