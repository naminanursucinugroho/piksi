<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    //
    protected $fillable = ['nama','alamat','email','cover'];
    protected $visible = ['nama','alamat','email','cover'];
    public  $timestamps = true;
}
