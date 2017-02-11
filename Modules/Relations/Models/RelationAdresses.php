<?php

namespace Modules\Relations\Models;

use Eloquent as Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\SoftDeletes;


class RelationAdresses extends Model
{
    use SoftDeletes;
    use Sluggable;

    public $table = 'relations__adresses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'relation_id',
        'ismain',
        'addresstype_id',
        'address',
        'address2',
        'housenumber',
        'housenumberaddition',
        'postalcode',
        'city_id',
        'country_id',
        'phone',
        'fax',
        'website',
        'dateline',
        'lastupdate',
        'languageid',
        'slaplanid',
        'slaexpirytimeline',
        'usergroupid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'relation_id' => 'integer',
        'addresstype_id' => 'integer',
        'address' => 'string',
        'address2' => 'string',
        'housenumber' => 'string',
        'housenumberaddition' => 'string',
        'postalcode' => 'string',
        'city_id' => 'integer',
        'country_id' => 'integer',
        'phone' => 'string',
        'fax' => 'string',
        'website' => 'string',
        'dateline' => 'integer',
        'lastupdate' => 'integer',
        'languageid' => 'integer',
        'slaplanid' => 'integer',
        'slaexpirytimeline' => 'integer',
        'usergroupid' => 'integer'
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
