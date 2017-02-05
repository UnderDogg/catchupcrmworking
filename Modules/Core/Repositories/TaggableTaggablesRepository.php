<?php

namespace App\Repositories\Core;

use App\Models\Core\TaggableTaggables;
use InfyOm\Generator\Common\BaseRepository;

class TaggableTaggablesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tag_id',
        'taggable_id',
        'taggable_type'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TaggableTaggables::class;
    }
}
