<?php

namespace App\DataTables\Core;

use App\Models\Core\SettingsEmail;
use Form;
use Yajra\Datatables\Services\DataTable;

class SettingsEmailDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'core.settings_emails.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $settingsEmails = SettingsEmail::query();

        return $this->applyScopes($settingsEmails);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->addAction(['width' => '10%'])
            ->ajax('')
            ->parameters([
                'dom' => 'Bfrtip',
                'scrollX' => false,
                'buttons' => [
                    'print',
                    'reset',
                    'reload',
                    [
                         'extend'  => 'collection',
                         'text'    => '<i class="fa fa-download"></i> Export',
                         'buttons' => [
                             'csv',
                             'excel',
                             'pdf',
                         ],
                    ],
                    'colvis'
                ]
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            'template' => ['name' => 'template', 'data' => 'template'],
            'sys_email' => ['name' => 'sys_email', 'data' => 'sys_email'],
            'alert_email' => ['name' => 'alert_email', 'data' => 'alert_email'],
            'admin_email' => ['name' => 'admin_email', 'data' => 'admin_email'],
            'mta' => ['name' => 'mta', 'data' => 'mta'],
            'email_fetching' => ['name' => 'email_fetching', 'data' => 'email_fetching'],
            'notification_cron' => ['name' => 'notification_cron', 'data' => 'notification_cron'],
            'strip' => ['name' => 'strip', 'data' => 'strip'],
            'separator' => ['name' => 'separator', 'data' => 'separator'],
            'all_emails' => ['name' => 'all_emails', 'data' => 'all_emails'],
            'email_collaborator' => ['name' => 'email_collaborator', 'data' => 'email_collaborator'],
            'attachment' => ['name' => 'attachment', 'data' => 'attachment']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'settingsEmails';
    }
}
