<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;

class UserAddress extends Model
{
    use Cachable;
    protected $primaryKey ='address_id';
    public function user(){
        return $this->belongsTo(User::class);
    }
}
