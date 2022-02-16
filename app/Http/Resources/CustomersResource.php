<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomersResource extends JsonResource
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
            'id' => $this->id,
            //'data' => $this->data,
            'name' => $this->name,
            'phone' => $this->phone,
            'mailindex' => $this->mailindex,
            'city' => $this->city,
            'adress' => $this->adress,
            'comments' => $this->commetnts,
            //'status' => $this->status,
            'customer_orders' => $this->customer_orders,
        ];
    }
}
