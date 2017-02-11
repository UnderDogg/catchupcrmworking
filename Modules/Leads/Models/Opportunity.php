<?php

namespace Modules\Leads\Models;

use Eloquent as Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\SoftDeletes;


class Opportunity extends Model
{
    use SoftDeletes;
    use Sluggable;

    public $table = 'opportunities';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'amount',
        'close_date',
        'expected_revenue',
        'next_step',
        'probability',
        'competitors',
        'description',
        'lead_source_id',
        'stage_id',
        'type_id',
        'contact_id',
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
        'name' => 'string',
        'close_date' => 'date',
        'next_step' => 'string',
        'competitors' => 'string',
        'description' => 'string',
        'lead_source_id' => 'integer',
        'stage_id' => 'integer',
        'type_id' => 'integer',
        'contact_id' => 'integer',
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
