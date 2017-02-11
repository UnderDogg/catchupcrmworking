<?php

namespace App\Models\Tickets;

use Eloquent as Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\SoftDeletes;


class TicketType extends Model
{
    use SoftDeletes;

    public $table = 'tickets__types';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'ismaster',
        'ispublic',
        'title',
        'displayicon',
        'department_id',
        'displayorder'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'displayicon' => 'string',
        'department_id' => 'integer',
        'displayorder' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
