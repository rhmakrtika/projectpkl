<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cashier extends Model
{
    use HasFactory;
    protected $fillable = ['name','residence' ,'gender' ,'email', 'password'];
    protected $visible = ['name','residence' ,'gender' ,'email', 'password'];

    public function Transaction()
    {
        return $this->belongsTo(Transaction::class, 'id_cashier');
    }
}
