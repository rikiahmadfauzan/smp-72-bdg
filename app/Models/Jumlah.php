<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jumlah extends Model
{
    use HasFactory;
    protected $table = 'jumlah';
    protected $primaryKey = 'id';

    protected $fillable = [
        'jumGuru',
        'jumMurid',
        'jumStaff'
    ];
}
