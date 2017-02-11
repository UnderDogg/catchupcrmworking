<?php

namespace Modules\Leads\Models;

use Eloquent as Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\SoftDeletes;


class Lead extends Model
{
    use SoftDeletes;
    use Sluggable;

    public $table = 'leads';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'email',
        'title',
        'first_name',
        'last_name',
        'description',
        'company',
        'num_of_employees',
        'website',
        'annual_revenue',
        'phone',
        'mobile_phone',
        'fax',
        'do_not_call',
        'do_not_email',
        'do_not_fax',
        'email_opt_out',
        'fax_opt_out',
        'birthdate',
        'street',
        'city',
        'state',
        'zip',
        'country',
        'salutation_id',
        'lead_source_id',
        'status_id',
        'industry_id',
        'rating_id',
        'converted_at',
        'read_by_owner',
        'owner_id',
        'adder_id',
        'modifier_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'email' => 'string',
        'title' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'description' => 'string',
        'company' => 'string',
        'num_of_employees' => 'integer',
        'website' => 'string',
        'phone' => 'string',
        'mobile_phone' => 'string',
        'fax' => 'string',
        'birthdate' => 'date',
        'street' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'country' => 'string',
        'salutation_id' => 'integer',
        'lead_source_id' => 'integer',
        'status_id' => 'integer',
        'industry_id' => 'integer',
        'rating_id' => 'integer',
        'converted_at' => 'date',
        'owner_id' => 'integer',
        'adder_id' => 'integer',
        'modifier_id' => 'integer'
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
}
