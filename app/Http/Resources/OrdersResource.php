<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrdersResource extends JsonResource
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
            'items_order' => $this->items_order,
            'quantity' => $this->quantity,
            'customer' => $this->customer,
            'price' => $this->price,
            'item' => $this->item,
            'total' => $this->total,
            'organization_id' => $this->organization_id,
        ];
    }
}
