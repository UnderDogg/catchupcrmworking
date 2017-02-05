<?php

namespace App\DataTables\Core;

use App\Models\Core\Departments;
use Form;
use Yajra\Datatables\Services\DataTable;

class DepartmentsDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'core.departments.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $departments = Departments::query();

        return $this->applyScopes($departments);
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
            'departmenttype' => ['name' => 'departmenttype', 'data' => 'departmenttype'],
            'isdefault' => ['name' => 'isdefault', 'data' => 'isdefault'],
            'slaplan_id' => ['name' => 'slaplan_id', 'data' => 'slaplan_id'],
            'manager_id' => ['name' => 'manager_id', 'data' => 'manager_id'],
            'department_signature' => ['name' => 'department_signature', 'data' => 'department_signature']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'departments';
    }
}
