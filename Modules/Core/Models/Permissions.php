<?php

namespace App\Models\Core;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Permissions extends Model
{
    use SoftDeletes;

    public $table = 'permissions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'display_name',
        'description',
        'enabled'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'display_name' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function userroles()
    {
        return $this->belongsToMany(\App\Models\Core\Userrole::class, 'permission_role');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function staff()
    {
        return $this->belongsToMany(\App\Models\Core\Staff::class, 'permission_staff');
    }
}
