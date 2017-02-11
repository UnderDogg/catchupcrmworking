<?php

namespace Modules\Employees\Models;

use Eloquent as Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\SoftDeletes;


class Employee extends Model
{
    use SoftDeletes;
    use Sluggable;

    public $table = 'staff';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
        'remember_token',
        'enabled',
        'auth_type',
        'confirmed',
        'confirmation_code'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'username' => 'string',
        'email' => 'string',
        'password' => 'string',
        'remember_token' => 'string',
        'auth_type' => 'string',
        'confirmation_code' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }




    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function departmentAssignStaffs()
    {
        return $this->hasMany(\Modules\Employees\Models\DepartmentAssignStaff::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function departments()
    {
        return $this->hasMany(\Modules\Employees\Models\Department::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function permissions()
    {
        return $this->belongsToMany(\Modules\Employees\Models\Permission::class, 'permission_staff');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function teamAssignStaffs()
    {
        return $this->hasMany(\Modules\Employees\Models\TeamAssignStaff::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function teams()
    {
        return $this->hasMany(\Modules\Employees\Models\Team::class);
    }
}
