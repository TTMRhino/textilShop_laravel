<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainGroup extends Model
{
    public $timestamps = false;    
    use HasFactory;

    public function subgroups()
    {
        return $this->hasMany(SubGroup::class);
    }
}
