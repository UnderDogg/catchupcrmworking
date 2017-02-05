<?php

namespace App\DataTables\Workflows;

use App\Models\Workflows\WorkflowRules;
use Form;
use Yajra\Datatables\Services\DataTable;

class WorkflowRulesDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'workflows.workflow_rules.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $workflowRules = WorkflowRules::query();

        return $this->applyScopes($workflowRules);
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
            'workflow_id' => ['name' => 'workflow_id', 'data' => 'workflow_id'],
            'matching_criteria' => ['name' => 'matching_criteria', 'data' => 'matching_criteria'],
            'matching_scenario' => ['name' => 'matching_scenario', 'data' => 'matching_scenario'],
            'matching_relation' => ['name' => 'matching_relation', 'data' => 'matching_relation'],
            'matching_value' => ['name' => 'matching_value', 'data' => 'matching_value']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'workflowRules';
    }
}
