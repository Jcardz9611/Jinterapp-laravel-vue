<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ImagenResource extends JsonResource
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
            'id_imagen' => $this->id_imagen,
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'ruta' => $this->ruta
        ];
       
    }
}
