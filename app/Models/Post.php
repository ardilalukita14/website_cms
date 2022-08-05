<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // tambah fungsi ini di MODEL POST
    public function user(){
    // disini kita katakan bahwa setiap post hanya akan dimiliki oleh 1 user
    // keterangan: itu UserModel sesuaikan dengan nama MODEL USER yang agan gunakan
     return $this->belongsTo('App\Models\User');
 }
}
