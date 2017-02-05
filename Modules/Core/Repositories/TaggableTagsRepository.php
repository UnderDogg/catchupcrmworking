<?php

namespace App\Repositories\Core;

use App\Models\Core\TaggableTags;
use InfyOm\Generator\Common\BaseRepository;

class TaggableTagsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'normalized'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TaggableTags::class;
    }
}
