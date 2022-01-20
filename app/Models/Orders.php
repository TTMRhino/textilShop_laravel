<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    public function items_order()
    {
       return $this->belongsTo(Items::class, 'item_id', 'id');    
    }
}
