<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tournament extends Model
{
    use SoftDeletes;
    protected $table = 'tournaments';
    protected $primaryKey = 'a_record_swimmer_id';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'a_record_swimmer_id',
        'T_date',
        'T_location',
        'T_event',
        'T_result',
        'T_Place'
   
    ];
}
