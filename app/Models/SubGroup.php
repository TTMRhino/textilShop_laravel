<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubGroup extends Model
{   
    public $timestamps = false;  
    use HasFactory;

    public function maingroup()
    {
       return $this->belongsTo(MainGroup::class, 'maingroup_id', 'id');
    
    }

    
}
