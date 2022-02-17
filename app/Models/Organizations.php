<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizations extends Model
{
    public $timestamps = false;  
    use HasFactory;

    protected $fillable = ['user_id','name','inn','ogrn','kpp','adres_registr','pay_account','kor_account','bik_bank','bank_name'];

    public function user()
    {
       return $this->belongsTo(User::class, 'user_id', 'id');
    
    }
}
