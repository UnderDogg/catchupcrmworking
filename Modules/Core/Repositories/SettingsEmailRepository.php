<?php

namespace App\Repositories\Core;

use App\Models\Core\SettingsEmail;
use InfyOm\Generator\Common\BaseRepository;

class SettingsEmailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'template',
        'sys_email',
        'alert_email',
        'admin_email',
        'mta',
        'email_fetching',
        'notification_cron',
        'strip',
        'separator',
        'all_emails',
        'email_collaborator',
        'attachment'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SettingsEmail::class;
    }
}
