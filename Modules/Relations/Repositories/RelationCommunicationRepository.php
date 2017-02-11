<?php

namespace Modules\Relations\Repositories;

use Modules\Relations\Models\RelationCommunication;


class RelationCommunicationRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'relation_id',
        'ismain',
        'communicationtype_id',
        'phonenumber',
        'mobilenumber',
        'faxnumber',
        'website'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RelationCommunication::class;
    }
}
