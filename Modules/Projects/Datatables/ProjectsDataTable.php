<?php

namespace Modules\Projects\DataTables\Projects;

use Modules\Projects\Models\Project;
use Form;
use Yajra\Datatables\Services\DataTable;

class ProjectsDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'projects.projects.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $projects = Projects::query();

        return $this->applyScopes($projects);
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
            'company_id' => ['name' => 'company_id', 'data' => 'company_id'],
            'relation_id' => ['name' => 'relation_id', 'data' => 'relation_id'],
            'user_id' => ['name' => 'user_id', 'data' => 'user_id'],
            'name' => ['name' => 'name', 'data' => 'name'],
            'public_id' => ['name' => 'public_id', 'data' => 'public_id'],
            'is_deleted' => ['name' => 'is_deleted', 'data' => 'is_deleted']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'projects';
    }
}
