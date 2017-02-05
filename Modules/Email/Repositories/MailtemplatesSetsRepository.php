<?php

namespace App\Repositories\Email;

use App\Models\Email\MailtemplatesSets;
use InfyOm\Generator\Common\BaseRepository;

class MailtemplatesSetsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'isactive'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MailtemplatesSets::class;
    }
}
