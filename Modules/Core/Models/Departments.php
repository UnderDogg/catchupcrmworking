<?php

namespace App\Models\Core;

use Eloquent as Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\SoftDeletes;


class Departments extends Model
{
    use SoftDeletes;

    public $table = 'departments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'departmenttype',
        'isdefault',
        'slaplan_id',
        'manager_id',
        'department_signature'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'departmenttype' => 'string',
        'slaplan_id' => 'integer',
        'manager_id' => 'integer',
        'department_signature' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function staff()
    {
        return $this->belongsTo(\App\Models\Core\Staff::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function departmentAssignStaffs()
    {
        return $this->hasMany(\App\Models\Core\DepartmentAssignStaff::class);
    }
}
