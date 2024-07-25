<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name_product', 'price', 'category', 'stock','cover'];
    protected $visible = ['name_product', 'price', 'category', 'stock','cover'];

    public function Booking()
    {
        return $this->belongsTo(Booking::class, 'id_product');
    }

    //menghapus image
    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('/images/product' . $this->cover))) {
            return unlink(public_path('/images/product' . $this->cover));
    }
}
}
