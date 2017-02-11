<?php

namespace Modules\Relations\Repositories;

use Modules\Relations\Models\RelationMailAdresses;


class RelationMailAdressesRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'relation_id',
        'isprimary',
        'linktype',
        'linktype_id',
        'emailaddress'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RelationMailAdresses::class;
    }
}
