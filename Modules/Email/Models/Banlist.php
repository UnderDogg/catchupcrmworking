<?php

namespace App\Models\Email;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Banlist",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="email_address",
 *          description="email_address",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="internal_notes",
 *          description="internal_notes",
 *          type="string"
 *      )
 * )
 */
class Banlist extends Model
{
    use SoftDeletes;

    public $table = 'banlist';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'ban_status',
        'email_address',
        'internal_notes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'email_address' => 'string',
        'internal_notes' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
