<?php

namespace Modules\Relations\Repositories;

use Modules\Relations\Models\ContactType;


class ContactTypeRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'value'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ContactType::class;
    }
}
