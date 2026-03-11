<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserRole extends Model
{
    use SoftDeletes;
    protected $table="user_role";
    protected $primaryKey = 'role_id';
    public $incrementing = false;
    public $timestamps = false;


    protected $fillable = [
        'role_id',
        'role_title',
        'UserProfile_user_id',
        'UserProfile_University_id'

    ];

    


}
