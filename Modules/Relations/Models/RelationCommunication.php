<?php

namespace Modules\Relations\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class RelationCommunication extends Model
{
    use SoftDeletes;

    public $table = 'relations__communication';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'relation_id',
        'ismain',
        'communicationtype_id',
        'phonenumber',
        'mobilenumber',
        'faxnumber',
        'website'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'relation_id' => 'integer',
        'communicationtype_id' => 'integer',
        'phonenumber' => 'string',
        'mobilenumber' => 'string',
        'faxnumber' => 'string',
        'website' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
