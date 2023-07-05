<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $tabel = 'mahasiswa';
    protected $primaryKey = 'id_mahasiswa';

    public $incementing = false;
    public $timestamps = true;

}
