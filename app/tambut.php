<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tambut extends Model
{
    //
    protected $fillable = ['namabarang','jumlah','peminjam','tglpinjaman','tglkembali','staffhardware','cover'];
    protected $visible = ['namabarang','jumlah','peminjam','tglpinjaman','tglkembali','staffhardware','cover'];
    public  $timestamps = true;

}
