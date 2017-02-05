<?php

namespace App\DataTables\Email;

use App\Models\Email\Mailboxes;
use Form;
use Yajra\Datatables\Services\DataTable;

class MailboxesDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'email.mailboxes.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $mailboxes = Mailboxes::query();

        return $this->applyScopes($mailboxes);
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
            'email_address' => ['name' => 'email_address', 'data' => 'email_address'],
            'email_name' => ['name' => 'email_name', 'data' => 'email_name'],
            'is_active' => ['name' => 'is_active', 'data' => 'is_active'],
            'department_id' => ['name' => 'department_id', 'data' => 'department_id'],
            'priority_id' => ['name' => 'priority_id', 'data' => 'priority_id'],
            'helptopic_id' => ['name' => 'helptopic_id', 'data' => 'helptopic_id'],
            'username' => ['name' => 'username', 'data' => 'username'],
            'password' => ['name' => 'password', 'data' => 'password'],
            'mailbox_type' => ['name' => 'mailbox_type', 'data' => 'mailbox_type'],
            'fetchtype' => ['name' => 'fetchtype', 'data' => 'fetchtype'],
            'fetching_status' => ['name' => 'fetching_status', 'data' => 'fetching_status'],
            'fetching_host' => ['name' => 'fetching_host', 'data' => 'fetching_host'],
            'fetching_port' => ['name' => 'fetching_port', 'data' => 'fetching_port'],
            'fetching_protocol' => ['name' => 'fetching_protocol', 'data' => 'fetching_protocol'],
            'fetching_encryption' => ['name' => 'fetching_encryption', 'data' => 'fetching_encryption'],
            'imap_config' => ['name' => 'imap_config', 'data' => 'imap_config'],
            'sending_status' => ['name' => 'sending_status', 'data' => 'sending_status'],
            'sending_host' => ['name' => 'sending_host', 'data' => 'sending_host'],
            'sending_port' => ['name' => 'sending_port', 'data' => 'sending_port'],
            'sending_protocol' => ['name' => 'sending_protocol', 'data' => 'sending_protocol'],
            'sending_encryption' => ['name' => 'sending_encryption', 'data' => 'sending_encryption'],
            'smtp_validate' => ['name' => 'smtp_validate', 'data' => 'smtp_validate'],
            'smtp_authentication' => ['name' => 'smtp_authentication', 'data' => 'smtp_authentication'],
            'tickettypeid' => ['name' => 'tickettypeid', 'data' => 'tickettypeid'],
            'priorityid' => ['name' => 'priorityid', 'data' => 'priorityid'],
            'ticketstatusid' => ['name' => 'ticketstatusid', 'data' => 'ticketstatusid'],
            'auto_response' => ['name' => 'auto_response', 'data' => 'auto_response'],
            'replyautoresponse' => ['name' => 'replyautoresponse', 'data' => 'replyautoresponse'],
            'leavecopyonserver' => ['name' => 'leavecopyonserver', 'data' => 'leavecopyonserver']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'mailboxes';
    }
}
