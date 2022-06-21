<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['user_id','no_berkas','nama_berkas','status_berkas'];
}
