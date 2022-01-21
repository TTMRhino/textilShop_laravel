<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public $timestamps = false;  
    use HasFactory;

    public function items_order()
    {
       return $this->belongsTo(Items::class, 'item_id', 'id');    
    }

    public function customer()
    {
       return $this->belongsTo(Customers::class, 'customers_id', 'id');    
    }
}
