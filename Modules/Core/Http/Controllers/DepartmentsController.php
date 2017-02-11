<?php

namespace Modules\Core\Http\Controllers;

use Modules\Core\DataTables\Core\DepartmentsDataTable;
use App\Http\Requests\Core;
use App\Http\Requests\Core\CreateDepartmentsRequest;
use App\Http\Requests\Core\UpdateDepartmentsRequest;
use App\Repositories\Core\DepartmentsRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class DepartmentsController extends AppBaseController
{
    /** @var  DepartmentsRepository */
    private $departmentsRepository;

    public function __construct(DepartmentsRepository $departmentsRepo)
    {
        $this->departmentsRepository = $departmentsRepo;
    }

    /**
     * Display a listing of the Departments.
     *
     * @param DepartmentsDataTable $departmentsDataTable
     * @return Response
     */
    public function index(DepartmentsDataTable $departmentsDataTable)
    {
        return $departmentsDataTable->render('core.departments.index');
    }

    /**
     * Show the form for creating a new Departments.
     *
     * @return Response
     */
    public function create()
    {
        return view('core.departments.create');
    }

    /**
     * Store a newly created Departments in storage.
     *
     * @param CreateDepartmentsRequest $request
     *
     * @return Response
     */
    public function store(CreateDepartmentsRequest $request)
    {
        $input = $request->all();

        $departments = $this->departmentsRepository->create($input);

        Flash::success('Departments saved successfully.');

        return redirect(route('core.departments.index'));
    }

    /**
     * Display the specified Departments.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $departments = $this->departmentsRepository->findWithoutFail($id);

        if (empty($departments)) {
            Flash::error('Departments not found');

            return redirect(route('core.departments.index'));
        }

        return view('core.departments.show')->with('departments', $departments);
    }

    /**
     * Show the form for editing the specified Departments.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $departments = $this->departmentsRepository->findWithoutFail($id);

        if (empty($departments)) {
            Flash::error('Departments not found');

            return redirect(route('core.departments.index'));
        }

        return view('core.departments.edit')->with('departments', $departments);
    }

    /**
     * Update the specified Departments in storage.
     *
     * @param  int              $id
     * @param UpdateDepartmentsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDepartmentsRequest $request)
    {
        $departments = $this->departmentsRepository->findWithoutFail($id);

        if (empty($departments)) {
            Flash::error('Departments not found');

            return redirect(route('core.departments.index'));
        }

        $departments = $this->departmentsRepository->update($request->all(), $id);

        Flash::success('Departments updated successfully.');

        return redirect(route('core.departments.index'));
    }

    /**
     * Remove the specified Departments from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $departments = $this->departmentsRepository->findWithoutFail($id);

        if (empty($departments)) {
            Flash::error('Departments not found');

            return redirect(route('core.departments.index'));
        }

        $this->departmentsRepository->delete($id);

        Flash::success('Departments deleted successfully.');

        return redirect(route('core.departments.index'));
    }
}
