<?php

namespace App\Models\Core;

use Eloquent as Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\SoftDeletes;


class Companies extends Model
{
    use SoftDeletes;

    public $table = 'companies';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'relation_id',
        'company_name',
        'website',
        'phone',
        'address',
        'landing_page',
        'offline_page',
        'thank_page',
        'logo',
        'use_logo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'relation_id' => 'integer',
        'company_name' => 'string',
        'website' => 'string',
        'phone' => 'string',
        'address' => 'string',
        'landing_page' => 'string',
        'offline_page' => 'string',
        'thank_page' => 'string',
        'logo' => 'string',
        'use_logo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
