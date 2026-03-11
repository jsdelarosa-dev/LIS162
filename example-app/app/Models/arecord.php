<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class arecord extends Model
{
    use SoftDeletes;
    protected $table = 'a_record';
    protected $primaryKey = 'swimmer_id';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'swimmer_id',
        'main_stroke'
   
    ];
}
