<?php

namespace Modules\Leads\DataTables\Leads;

use Modules\Leads\Models\Leads;
use Form;
use Yajra\Datatables\Services\DataTable;

class LeadsDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'leads.leads.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $leads = Leads::query();

        return $this->applyScopes($leads);
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
            'email' => ['name' => 'email', 'data' => 'email'],
            'title' => ['name' => 'title', 'data' => 'title'],
            'first_name' => ['name' => 'first_name', 'data' => 'first_name'],
            'last_name' => ['name' => 'last_name', 'data' => 'last_name'],
            'description' => ['name' => 'description', 'data' => 'description'],
            'company' => ['name' => 'company', 'data' => 'company'],
            'num_of_employees' => ['name' => 'num_of_employees', 'data' => 'num_of_employees'],
            'website' => ['name' => 'website', 'data' => 'website'],
            'annual_revenue' => ['name' => 'annual_revenue', 'data' => 'annual_revenue'],
            'phone' => ['name' => 'phone', 'data' => 'phone'],
            'mobile_phone' => ['name' => 'mobile_phone', 'data' => 'mobile_phone'],
            'fax' => ['name' => 'fax', 'data' => 'fax'],
            'do_not_call' => ['name' => 'do_not_call', 'data' => 'do_not_call'],
            'do_not_email' => ['name' => 'do_not_email', 'data' => 'do_not_email'],
            'do_not_fax' => ['name' => 'do_not_fax', 'data' => 'do_not_fax'],
            'email_opt_out' => ['name' => 'email_opt_out', 'data' => 'email_opt_out'],
            'fax_opt_out' => ['name' => 'fax_opt_out', 'data' => 'fax_opt_out'],
            'birthdate' => ['name' => 'birthdate', 'data' => 'birthdate'],
            'street' => ['name' => 'street', 'data' => 'street'],
            'city' => ['name' => 'city', 'data' => 'city'],
            'state' => ['name' => 'state', 'data' => 'state'],
            'zip' => ['name' => 'zip', 'data' => 'zip'],
            'country' => ['name' => 'country', 'data' => 'country'],
            'salutation_id' => ['name' => 'salutation_id', 'data' => 'salutation_id'],
            'lead_source_id' => ['name' => 'lead_source_id', 'data' => 'lead_source_id'],
            'status_id' => ['name' => 'status_id', 'data' => 'status_id'],
            'industry_id' => ['name' => 'industry_id', 'data' => 'industry_id'],
            'rating_id' => ['name' => 'rating_id', 'data' => 'rating_id'],
            'converted_at' => ['name' => 'converted_at', 'data' => 'converted_at'],
            'read_by_owner' => ['name' => 'read_by_owner', 'data' => 'read_by_owner'],
            'owner_id' => ['name' => 'owner_id', 'data' => 'owner_id'],
            'adder_id' => ['name' => 'adder_id', 'data' => 'adder_id'],
            'modifier_id' => ['name' => 'modifier_id', 'data' => 'modifier_id']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'leads';
    }
}
