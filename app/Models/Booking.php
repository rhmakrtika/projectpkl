<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['id','id_product', 'total', 'qty', 'addition'];
    public $timestamps = true;

    public function Product()
    {
        return $this->belongsTo(Product::class, 'id_product');
    }
}
