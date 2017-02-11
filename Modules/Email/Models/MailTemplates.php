<?php

namespace App\Models\Email;

use Eloquent as Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\SoftDeletes;


class MailTemplates extends Model
{
    use SoftDeletes;

    public $table = 'mailtemplates';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'is_active',
        'set_id',
        'type_id',
        'variable',
        'subject',
        'message',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'set_id' => 'integer',
        'type_id' => 'integer',
        'variable' => 'string',
        'subject' => 'string',
        'message' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
