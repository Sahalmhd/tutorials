<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function getStatusTextAttribute(){
        return $this->status == 1 ? 'placed' : 'delivered';
    }
}
