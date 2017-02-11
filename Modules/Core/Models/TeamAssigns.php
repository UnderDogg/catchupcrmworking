<?php

namespace App\Models\Core;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class TeamAssigns extends Model
{
    use SoftDeletes;

    public $table = 'relations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'shortname',
        'relationtype_id',
        'language_id',
        'slaplanid',
        'slaexpirytimeline'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'shortname' => 'string',
        'relationtype_id' => 'integer',
        'language_id' => 'integer',
        'slaplanid' => 'integer',
        'slaexpirytimeline' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
