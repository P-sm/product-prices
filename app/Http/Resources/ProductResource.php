<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray($request)
    {     
       return [
        'id' => $this->id,
        'title' => $this->title,
        'price' => sprintf($this->format,$this->price/$this->rate),
      ];
    }
}