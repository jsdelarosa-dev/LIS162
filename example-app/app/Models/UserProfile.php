<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class UserProfile extends Model
{
    use SoftDeletes;
    protected $table="user_profile";
    protected $primaryKey = 'user_id';
    public $incrementing = false;
    public $timestamps = false;


    protected $fillable = [
        'user_id',
        'username',
        'first_name',
        'last_name',
        'email',
        'user_age',
        'batch_year',
        'Gender',
        'University_id'
        
    ];


}


