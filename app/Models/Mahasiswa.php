<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = "mahasiswas";
    public $timestamps = false;
    protected $primaryKey = "Nim";
    public $incrementing = false;

    /***
     * 
     *
     *@var array 
     */

    protected $fillable = [
        'Nim',
        'Nama',
        'featured_image',
        'Email',
        'TanggalLahir',
        'Jurusan',
        'No_Handphone',
        'kelas_id',
    ];
}
