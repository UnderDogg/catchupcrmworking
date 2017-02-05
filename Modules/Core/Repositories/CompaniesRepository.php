<?php

namespace App\Repositories\Core;

use App\Models\Core\Companies;
use InfyOm\Generator\Common\BaseRepository;

class CompaniesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Companies::class;
    }
}
