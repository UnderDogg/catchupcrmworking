<?php

namespace Modules\Employees\Http\Controllers;

use Modules\Employees\DataTables\Employees\EmployeesDataTable;
use App\Http\Requests\Employees;
use App\Http\Requests\Employees\CreateEmployeesRequest;
use App\Http\Requests\Employees\UpdateEmployeesRequest;
use App\Repositories\Employees\EmployeesRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class EmployeesController extends AppBaseController
{
    /** @var  EmployeesRepository */
    private $employeesRepository;

    public function __construct(EmployeesRepository $employeesRepo)
    {
        $this->employeesRepository = $employeesRepo;
    }

    /**
     * Display a listing of the Employees.
     *
     * @param EmployeesDataTable $employeesDataTable
     * @return Response
     */
    public function index(EmployeesDataTable $employeesDataTable)
    {
        return $employeesDataTable->render('employees.employees.index');
    }

    /**
     * Show the form for creating a new Employees.
     *
     * @return Response
     */
    public function create()
    {
        return view('employees::employees.create');
    }

    /**
     * Store a newly created Employees in storage.
     *
     * @param CreateEmployeesRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeesRequest $request)
    {
        $input = $request->all();

        $employees = $this->employeesRepository->create($input);

        Flash::success('Employees saved successfully.');

        return redirect(route('employees.employees.index'));
    }

    /**
     * Display the specified Employees.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $employees = $this->employeesRepository->findWithoutFail($id);

        if (empty($employees)) {
            Flash::error('Employees not found');

            return redirect(route('employees.employees.index'));
        }

        return view('employees::employees.show')->with('employees', $employees);
    }

    /**
     * Show the form for editing the specified Employees.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $employees = $this->employeesRepository->findWithoutFail($id);

        if (empty($employees)) {
            Flash::error('Employees not found');

            return redirect(route('employees.employees.index'));
        }

        return view('employees::employees.edit')->with('employees', $employees);
    }

    /**
     * Update the specified Employees in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeesRequest $request)
    {
        $employees = $this->employeesRepository->findWithoutFail($id);

        if (empty($employees)) {
            Flash::error('Employees not found');

            return redirect(route('employees.employees.index'));
        }

        $employees = $this->employeesRepository->update($request->all(), $id);

        Flash::success('Employees updated successfully.');

        return redirect(route('employees.employees.index'));
    }

    /**
     * Remove the specified Employees from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $employees = $this->employeesRepository->findWithoutFail($id);

        if (empty($employees)) {
            Flash::error('Employees not found');

            return redirect(route('employees.employees.index'));
        }

        $this->employeesRepository->delete($id);

        Flash::success('Employees deleted successfully.');

        return redirect(route('employees.employees.index'));
    }
}
