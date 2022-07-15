<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function transactionDetail(){
        return $this->hasMany(TransactionDetail::class);
    }

}
