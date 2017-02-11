<?php

namespace Modules\Leads\Repositories;

use Modules\Leads\Models\Leads;
use InfyOm\Generator\Common\BaseRepository;

class LeadsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'email',
        'title',
        'first_name',
        'last_name',
        'description',
        'company',
        'num_of_employees',
        'website',
        'annual_revenue',
        'phone',
        'mobile_phone',
        'fax',
        'do_not_call',
        'do_not_email',
        'do_not_fax',
        'email_opt_out',
        'fax_opt_out',
        'birthdate',
        'street',
        'city',
        'state',
        'zip',
        'country',
        'salutation_id',
        'lead_source_id',
        'status_id',
        'industry_id',
        'rating_id',
        'converted_at',
        'read_by_owner',
        'owner_id',
        'adder_id',
        'modifier_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Leads::class;
    }
}
