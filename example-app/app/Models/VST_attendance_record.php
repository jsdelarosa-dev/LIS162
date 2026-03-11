<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VST_attendance_record extends Model
{
    use SoftDeletes;
    protected $table = 'VST_attendance_records';
    protected $primaryKey = 'session_id';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'session_id',
        'training_date',
        'training_time'

    ];
}
