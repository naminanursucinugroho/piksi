<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    //

     protected $fillable = ['nama','stok','harga','cover'];
    protected $visible = ['nama','stok','harga','cover'];
    public  $timestamps = true;

    }