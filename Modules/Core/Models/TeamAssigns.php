<?php

namespace App\Models\Core;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="TeamAssigns",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="name",
 *          description="name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="shortname",
 *          description="shortname",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="relationtype_id",
 *          description="relationtype_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="language_id",
 *          description="language_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="slaplanid",
 *          description="slaplanid",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="slaexpirytimeline",
 *          description="slaexpirytimeline",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
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
