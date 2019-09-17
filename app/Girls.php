<?php

namespace App;

use Illuminate\Database\Eloquent\Model; // Eloquent

class Girls extends Model
{
    // Model bemsli al table aly f database bs wd3o eh f project bet7kem f al cols
     protected $hidden =['Crush']; // hidden dh varible bet7at feh al cols aly m4 3awzha tzhar
    // protected $fillable ==[''];  // fillable bet7at feha al cols aly ht3amel m3ha 
    // protected $guarded = ['']; // 7aga keda 3amla zai al black list
    
}
