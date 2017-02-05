<?php

namespace App\Models\Core;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Users",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="user_role",
 *          description="user_role",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="relation_id",
 *          description="relation_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="user_name",
 *          description="user_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="first_name",
 *          description="first_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="last_name",
 *          description="last_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="salutation",
 *          description="salutation",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="userdesignation",
 *          description="userdesignation",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="gender",
 *          description="gender",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="emailaddress",
 *          description="emailaddress",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="password",
 *          description="password",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="phonenumber",
 *          description="phonenumber",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="mobilenumber",
 *          description="mobilenumber",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="language_id",
 *          description="language_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="timezonephp",
 *          description="timezonephp",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="internal_note",
 *          description="internal_note",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="profile_pic",
 *          description="profile_pic",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="remember_token",
 *          description="remember_token",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="lastvisitip",
 *          description="lastvisitip",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="lastvisitip2",
 *          description="lastvisitip2",
 *          type="string"
 *      )
 * )
 */
class Users extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_role',
        'relation_id',
        'user_name',
        'first_name',
        'last_name',
        'isactive',
        'isbanned',
        'isvalidated',
        'salutation',
        'userdesignation',
        'gender',
        'emailaddress',
        'password',
        'phonenumber',
        'mobilenumber',
        'language_id',
        'timezonephp',
        'enabledst',
        'internal_note',
        'profile_pic',
        'remember_token',
        'lastvisit',
        'lastvisit2',
        'lastactivity',
        'lastvisitip',
        'lastvisitip2'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_role' => 'integer',
        'relation_id' => 'integer',
        'user_name' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'userdesignation' => 'string',
        'emailaddress' => 'string',
        'password' => 'string',
        'phonenumber' => 'string',
        'mobilenumber' => 'string',
        'language_id' => 'integer',
        'timezonephp' => 'string',
        'internal_note' => 'string',
        'profile_pic' => 'string',
        'remember_token' => 'string',
        'lastvisitip' => 'string',
        'lastvisitip2' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
