<?php

namespace App\Repositories\Balancesheet;

use App\Models\Balancesheet\ExpenseCategories;
use InfyOm\Generator\Common\BaseRepository;

class ExpenseCategoriesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'company_id',
        'user_id',
        'public_id',
        'name',
        'is_deleted'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ExpenseCategories::class;
    }
}
