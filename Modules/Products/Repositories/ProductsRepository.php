<?php

namespace Modules\Products\Repositories;

use Modules\Products\Models\Product;
use InfyOm\Generator\Common\BaseRepository;

class ProductsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'company_id',
        'user_id',
        'product_key',
        'notes',
        'cost',
        'qty',
        'public_id',
        'default_tax_rate_id',
        'is_deleted'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Product::class;
    }
}
