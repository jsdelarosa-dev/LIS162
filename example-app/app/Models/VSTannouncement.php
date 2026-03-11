<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VSTannouncement extends Model
{
    use SoftDeletes;
    protected $table = 'vst_announcements';
    protected $primaryKey = 'announcement_id';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;
   
    public function getRouteKeyName()
    {
        return 'announcement_id';
    }

    protected $fillable = [
        'announcement_id',
        'meeting_date',
        'meeting_location',
        'meeting_details'

    ];
}
