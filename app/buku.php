<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    public $fillable = ['judul','penerbit', 'tahun_terbit','pengarang'];
}
