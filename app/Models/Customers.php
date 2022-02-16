<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    public $timestamps = false;
   // protected $fillable = ['name','phone','mailindex','city','adress','comments','orders_id'];

    public function customer_orders()
    {
       return $this->hasMany(Orders::class);    
    }

    public function organization_orders()
    {
       return $this->belongsTo(Organizations::class, 'organization_id', 'id');    
    }

   
}
