<?php

namespace Modules\Core\DataTables\Core;

use App\Models\Core\SettingsSystem;
use Form;
use Yajra\Datatables\Services\DataTable;

class SettingsSystemDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'core.settings_systems.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $settingsSystems = SettingsSystem::query();

        return $this->applyScopes($settingsSystems);
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
            'status' => ['name' => 'status', 'data' => 'status'],
            'url' => ['name' => 'url', 'data' => 'url'],
            'name' => ['name' => 'name', 'data' => 'name'],
            'department' => ['name' => 'department', 'data' => 'department'],
            'page_size' => ['name' => 'page_size', 'data' => 'page_size'],
            'log_level' => ['name' => 'log_level', 'data' => 'log_level'],
            'purge_log' => ['name' => 'purge_log', 'data' => 'purge_log'],
            'api_enable' => ['name' => 'api_enable', 'data' => 'api_enable'],
            'api_key_mandatory' => ['name' => 'api_key_mandatory', 'data' => 'api_key_mandatory'],
            'api_key' => ['name' => 'api_key', 'data' => 'api_key'],
            'name_format' => ['name' => 'name_format', 'data' => 'name_format'],
            'time_farmat' => ['name' => 'time_farmat', 'data' => 'time_farmat'],
            'date_format' => ['name' => 'date_format', 'data' => 'date_format'],
            'date_time_format' => ['name' => 'date_time_format', 'data' => 'date_time_format'],
            'day_date_time' => ['name' => 'day_date_time', 'data' => 'day_date_time'],
            'time_zone' => ['name' => 'time_zone', 'data' => 'time_zone'],
            'content' => ['name' => 'content', 'data' => 'content'],
            'version' => ['name' => 'version', 'data' => 'version']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'settingsSystems';
    }
}
