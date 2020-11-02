<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;

    protected $table = "table_mahasiswa";
    protected $fillable = ['nim','nama','alamat','telepon'];
}
