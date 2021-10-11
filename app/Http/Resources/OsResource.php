<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OsResource extends JsonResource
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
            'os_codigo' => $this->os_codigo,
            'os_numero_tipo' => $this->os_numero_tipo,
            'os_numero_contrato' => $this->os_numero_contrato,
            'pessoa' => $this->pessoa,
        ];
    }
}
