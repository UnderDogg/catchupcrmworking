<?php

namespace App\Repositories\Core;

use App\Models\Core\Users;
use InfyOm\Generator\Common\BaseRepository;

class UsersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_role',
        'relation_id',
        'user_name',
        'first_name',
        'last_name',
        'isactive',
        'isbanned',
        'isvalidated',
        'salutation',
        'userdesignation',
        'gender',
        'emailaddress',
        'password',
        'phonenumber',
        'mobilenumber',
        'language_id',
        'timezonephp',
        'enabledst',
        'internal_note',
        'profile_pic',
        'remember_token',
        'lastvisit',
        'lastvisit2',
        'lastactivity',
        'lastvisitip',
        'lastvisitip2'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Users::class;
    }
}
