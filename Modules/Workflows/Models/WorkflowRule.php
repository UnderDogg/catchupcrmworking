<?php

namespace Modules\Workflows\Models;

use Eloquent as Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\SoftDeletes;


class WorkflowRule extends Model
{
    use SoftDeletes;
    use Sluggable;

    public $table = 'workflow_rules';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'workflow_id',
        'matching_criteria',
        'matching_scenario',
        'matching_relation',
        'matching_value'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'workflow_id' => 'integer',
        'matching_criteria' => 'string',
        'matching_scenario' => 'string',
        'matching_relation' => 'string',
        'matching_value' => 'string'
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
    public function workflowName()
    {
        return $this->belongsTo(\Modules\Workflows\Models\WorkflowName::class);
    }

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
