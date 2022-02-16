<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public $timestamps = false;  
    use HasFactory;

    protected $fillable = ['item_id','quantity','customers_id','price','item','total','organization_id'];

    public function items_order()
    {
       return $this->belongsTo(Items::class, 'item_id', 'id');    
    }

    public function customer()
    {
       return $this->belongsTo(Customers::class, 'customers_id', 'id');    
    }
}
