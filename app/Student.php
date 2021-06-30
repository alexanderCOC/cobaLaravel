<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
	use SoftDeletes;
	//field boleh diisi
    protected $fillable = ['nama','nrp','email','jurusan'];

    //field tidak boleh diisi
    // protected $guarded = ['nama','nrp','email','jurusan'];
}
