<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class college extends Model
{
    use SoftDeletes;
    protected $table = 'College';
    protected $primaryKey = 'University_id';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'University_id',
        'college_name',
        'course'
   
    ];

}
