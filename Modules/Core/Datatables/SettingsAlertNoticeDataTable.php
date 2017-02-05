<?php

namespace App\DataTables\Core;

use App\Models\Core\SettingsAlertNotice;
use Form;
use Yajra\Datatables\Services\DataTable;

class SettingsAlertNoticeDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'core.settings_alert_notices.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $settingsAlertNotices = SettingsAlertNotice::query();

        return $this->applyScopes($settingsAlertNotices);
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
            'ticket_status' => ['name' => 'ticket_status', 'data' => 'ticket_status'],
            'ticket_admin_email' => ['name' => 'ticket_admin_email', 'data' => 'ticket_admin_email'],
            'ticket_department_manager' => ['name' => 'ticket_department_manager', 'data' => 'ticket_department_manager'],
            'ticket_department_member' => ['name' => 'ticket_department_member', 'data' => 'ticket_department_member'],
            'ticket_organization_accmanager' => ['name' => 'ticket_organization_accmanager', 'data' => 'ticket_organization_accmanager'],
            'message_status' => ['name' => 'message_status', 'data' => 'message_status'],
            'message_last_responder' => ['name' => 'message_last_responder', 'data' => 'message_last_responder'],
            'message_assigned_agent' => ['name' => 'message_assigned_agent', 'data' => 'message_assigned_agent'],
            'message_department_manager' => ['name' => 'message_department_manager', 'data' => 'message_department_manager'],
            'message_organization_accmanager' => ['name' => 'message_organization_accmanager', 'data' => 'message_organization_accmanager'],
            'internal_status' => ['name' => 'internal_status', 'data' => 'internal_status'],
            'internal_last_responder' => ['name' => 'internal_last_responder', 'data' => 'internal_last_responder'],
            'internal_assigned_agent' => ['name' => 'internal_assigned_agent', 'data' => 'internal_assigned_agent'],
            'internal_department_manager' => ['name' => 'internal_department_manager', 'data' => 'internal_department_manager'],
            'assignment_status' => ['name' => 'assignment_status', 'data' => 'assignment_status'],
            'assignment_assigned_agent' => ['name' => 'assignment_assigned_agent', 'data' => 'assignment_assigned_agent'],
            'assignment_team_leader' => ['name' => 'assignment_team_leader', 'data' => 'assignment_team_leader'],
            'assignment_team_member' => ['name' => 'assignment_team_member', 'data' => 'assignment_team_member'],
            'transfer_status' => ['name' => 'transfer_status', 'data' => 'transfer_status'],
            'transfer_assigned_agent' => ['name' => 'transfer_assigned_agent', 'data' => 'transfer_assigned_agent'],
            'transfer_department_manager' => ['name' => 'transfer_department_manager', 'data' => 'transfer_department_manager'],
            'transfer_department_member' => ['name' => 'transfer_department_member', 'data' => 'transfer_department_member'],
            'overdue_status' => ['name' => 'overdue_status', 'data' => 'overdue_status'],
            'overdue_assigned_agent' => ['name' => 'overdue_assigned_agent', 'data' => 'overdue_assigned_agent'],
            'overdue_department_manager' => ['name' => 'overdue_department_manager', 'data' => 'overdue_department_manager'],
            'overdue_department_member' => ['name' => 'overdue_department_member', 'data' => 'overdue_department_member'],
            'system_error' => ['name' => 'system_error', 'data' => 'system_error'],
            'sql_error' => ['name' => 'sql_error', 'data' => 'sql_error'],
            'excessive_failure' => ['name' => 'excessive_failure', 'data' => 'excessive_failure']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'settingsAlertNotices';
    }
}
