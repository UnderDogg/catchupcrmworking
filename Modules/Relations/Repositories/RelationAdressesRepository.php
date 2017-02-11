<?php

namespace Modules\Relations\Repositories;

use Modules\Relations\Models\RelationAdresses;


class RelationAdressesRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return RelationAdresses::class;
    }
}
