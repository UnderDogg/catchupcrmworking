<?php

namespace App\Models\Core;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="TaggableTaggables",
 *      required={""},
 *      @SWG\Property(
 *          property="tag_id",
 *          description="tag_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="taggable_id",
 *          description="taggable_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="taggable_type",
 *          description="taggable_type",
 *          type="string"
 *      )
 * )
 */
class TaggableTaggables extends Model
{
    use SoftDeletes;

    public $table = 'taggable_taggables';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'tag_id',
        'taggable_id',
        'taggable_type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tag_id' => 'integer',
        'taggable_id' => 'integer',
        'taggable_type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
