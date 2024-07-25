<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recap extends Model
{
    use HasFactory;

    protected $fillable = ['cover', 'name', 'email'];
    protected $visible = ['cover', 'name', 'email'];

    //menghapus image
    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('/images/recap' . $this->cover))) {
            return unlink(public_path('/images/recap' . $this->cover));
    }
}
}
