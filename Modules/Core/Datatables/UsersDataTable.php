<?php

namespace Modules\Core\DataTables\Core;

use App\Models\Core\Users;
use Form;
use Yajra\Datatables\Services\DataTable;

class UsersDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'core.users.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $users = Users::query();

        return $this->applyScopes($users);
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
            'user_role' => ['name' => 'user_role', 'data' => 'user_role'],
            'relation_id' => ['name' => 'relation_id', 'data' => 'relation_id'],
            'user_name' => ['name' => 'user_name', 'data' => 'user_name'],
            'first_name' => ['name' => 'first_name', 'data' => 'first_name'],
            'last_name' => ['name' => 'last_name', 'data' => 'last_name'],
            'isactive' => ['name' => 'isactive', 'data' => 'isactive'],
            'isbanned' => ['name' => 'isbanned', 'data' => 'isbanned'],
            'isvalidated' => ['name' => 'isvalidated', 'data' => 'isvalidated'],
            'salutation' => ['name' => 'salutation', 'data' => 'salutation'],
            'userdesignation' => ['name' => 'userdesignation', 'data' => 'userdesignation'],
            'gender' => ['name' => 'gender', 'data' => 'gender'],
            'emailaddress' => ['name' => 'emailaddress', 'data' => 'emailaddress'],
            'password' => ['name' => 'password', 'data' => 'password'],
            'phonenumber' => ['name' => 'phonenumber', 'data' => 'phonenumber'],
            'mobilenumber' => ['name' => 'mobilenumber', 'data' => 'mobilenumber'],
            'language_id' => ['name' => 'language_id', 'data' => 'language_id'],
            'timezonephp' => ['name' => 'timezonephp', 'data' => 'timezonephp'],
            'enabledst' => ['name' => 'enabledst', 'data' => 'enabledst'],
            'internal_note' => ['name' => 'internal_note', 'data' => 'internal_note'],
            'profile_pic' => ['name' => 'profile_pic', 'data' => 'profile_pic'],
            'remember_token' => ['name' => 'remember_token', 'data' => 'remember_token'],
            'lastvisit' => ['name' => 'lastvisit', 'data' => 'lastvisit'],
            'lastvisit2' => ['name' => 'lastvisit2', 'data' => 'lastvisit2'],
            'lastactivity' => ['name' => 'lastactivity', 'data' => 'lastactivity'],
            'lastvisitip' => ['name' => 'lastvisitip', 'data' => 'lastvisitip'],
            'lastvisitip2' => ['name' => 'lastvisitip2', 'data' => 'lastvisitip2']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'users';
    }
}
