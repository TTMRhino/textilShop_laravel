<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
   // public $timestamps = false;
    use HasFactory;

    public function customer_orders()
    {
       return $this->belongsTo(Customers::class, 'customers_id', 'id');    
    }

    public function organization_orders()
    {
       return $this->belongsTo(Organizations::class, 'organization_id', 'id');    
    }

   
}
