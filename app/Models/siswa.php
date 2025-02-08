<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    //
    protected $fillable=['nama','nisn','jk','alamat','no_telp','foto','lokal_id'];

    public function lokal(){
        return $this->belongsTo(lokal::class);
    }
}

