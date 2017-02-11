<?php

namespace Modules\Invoices\Repositories;

use Modules\Invoices\Models\InvoicesDesigns;
use InfyOm\Generator\Common\BaseRepository;

class InvoicesDesignsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'javascript',
        'pdfmake'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return InvoicesDesigns::class;
    }
}
