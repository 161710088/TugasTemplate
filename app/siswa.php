<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'siswas';
    protected $fillable = ['nis','nama','tempatlahir','tanggallahir','alamat','citacita','hobi'];
}
