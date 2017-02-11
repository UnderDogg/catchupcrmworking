<?php

namespace Modules\Relations\Models;

use Eloquent as Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\SoftDeletes;


class RelationContracts extends Model
{
    use SoftDeletes;
    use Sluggable;

    public $table = 'relations__contracts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'contractname',
        'contracttype_id',
        'relation_id',
        'relationcontact_id',
        'slaplan_id',
        'contract_start_date',
        'contract_end_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'contractname' => 'string',
        'contracttype_id' => 'integer',
        'relation_id' => 'integer',
        'relationcontact_id' => 'integer',
        'slaplan_id' => 'integer'
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
