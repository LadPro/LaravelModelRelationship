<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $phone = [];
        foreach ($this->phone as $key) {
            $phone[] = $key->prefix . '-' . $key->number;
        }
        return [
            'id' => $this->id,
            'elNombreDelMamamHuevo' => $this->name,
            'elEmailtote' => $this->email,
            'LosTelefonototes' => $phone
        ];
    }
}
