<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepsek extends Model
{
    use HasFactory;
    protected $table = 'Kepsek';
    protected $primaryKey = 'id';
    protected $fillable = [
        'namaKepsek',
        'fotoKepsek',
        'sambutan'
    ];
}
