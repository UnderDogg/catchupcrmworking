<?php

namespace App\Models\Core;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Companies",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="relation_id",
 *          description="relation_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="company_name",
 *          description="company_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="website",
 *          description="website",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="phone",
 *          description="phone",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="address",
 *          description="address",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="landing_page",
 *          description="landing_page",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="offline_page",
 *          description="offline_page",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="thank_page",
 *          description="thank_page",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="logo",
 *          description="logo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="use_logo",
 *          description="use_logo",
 *          type="string"
 *      )
 * )
 */
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
