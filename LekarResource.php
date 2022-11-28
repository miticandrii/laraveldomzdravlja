<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\DomZdravljaResource;

class LekarResource extends JsonResource
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
            'ime' => $this->resource->ime,
            'prezime' => $this->resource->prezime,
            'email' => $this->resource->email,
            'telefon' => $this->resource->telefon,
            'broj_licence' => $this->resource->broj_licence,
            'dom_zdravlja' => new DomZdravljaResource($this->resource->dom_zdravlja)
        ];

    }
}
