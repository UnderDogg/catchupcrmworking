<?php

namespace App\DataTables\Email;

use App\Models\Email\MailTemplates;
use Form;
use Yajra\Datatables\Services\DataTable;

class MailTemplatesDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'email.mail_templates.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $mailTemplates = MailTemplates::query();

        return $this->applyScopes($mailTemplates);
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
            'name' => ['name' => 'name', 'data' => 'name'],
            'is_active' => ['name' => 'is_active', 'data' => 'is_active'],
            'set_id' => ['name' => 'set_id', 'data' => 'set_id'],
            'type_id' => ['name' => 'type_id', 'data' => 'type_id'],
            'variable' => ['name' => 'variable', 'data' => 'variable'],
            'subject' => ['name' => 'subject', 'data' => 'subject'],
            'message' => ['name' => 'message', 'data' => 'message'],
            'description' => ['name' => 'description', 'data' => 'description']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'mailTemplates';
    }
}
