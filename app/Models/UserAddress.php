<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $primaryKey ='address_id';
    public function user(){
        return $this->belongsTo(User::class);
    }
}
