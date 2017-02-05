<?php

namespace App\Http\Controllers\Core;

use App\DataTables\Core\Department_assign_staffDataTable;
use App\Http\Requests\Core;
use App\Http\Requests\Core\CreateDepartment_assign_staffRequest;
use App\Http\Requests\Core\UpdateDepartment_assign_staffRequest;
use App\Repositories\Core\Department_assign_staffRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class Department_assign_staffController extends AppBaseController
{
    /** @var  Department_assign_staffRepository */
    private $departmentAssignStaffRepository;

    public function __construct(Department_assign_staffRepository $departmentAssignStaffRepo)
    {
        $this->departmentAssignStaffRepository = $departmentAssignStaffRepo;
    }

    /**
     * Display a listing of the Department_assign_staff.
     *
     * @param Department_assign_staffDataTable $departmentAssignStaffDataTable
     * @return Response
     */
    public function index(Department_assign_staffDataTable $departmentAssignStaffDataTable)
    {
        return $departmentAssignStaffDataTable->render('core.department_assign_staffs.index');
    }

    /**
     * Show the form for creating a new Department_assign_staff.
     *
     * @return Response
     */
    public function create()
    {
        return view('core.department_assign_staffs.create');
    }

    /**
     * Store a newly created Department_assign_staff in storage.
     *
     * @param CreateDepartment_assign_staffRequest $request
     *
     * @return Response
     */
    public function store(CreateDepartment_assign_staffRequest $request)
    {
        $input = $request->all();

        $departmentAssignStaff = $this->departmentAssignStaffRepository->create($input);

        Flash::success('Department Assign Staff saved successfully.');

        return redirect(route('core.departmentAssignStaffs.index'));
    }

    /**
     * Display the specified Department_assign_staff.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $departmentAssignStaff = $this->departmentAssignStaffRepository->findWithoutFail($id);

        if (empty($departmentAssignStaff)) {
            Flash::error('Department Assign Staff not found');

            return redirect(route('core.departmentAssignStaffs.index'));
        }

        return view('core.department_assign_staffs.show')->with('departmentAssignStaff', $departmentAssignStaff);
    }

    /**
     * Show the form for editing the specified Department_assign_staff.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $departmentAssignStaff = $this->departmentAssignStaffRepository->findWithoutFail($id);

        if (empty($departmentAssignStaff)) {
            Flash::error('Department Assign Staff not found');

            return redirect(route('core.departmentAssignStaffs.index'));
        }

        return view('core.department_assign_staffs.edit')->with('departmentAssignStaff', $departmentAssignStaff);
    }

    /**
     * Update the specified Department_assign_staff in storage.
     *
     * @param  int              $id
     * @param UpdateDepartment_assign_staffRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDepartment_assign_staffRequest $request)
    {
        $departmentAssignStaff = $this->departmentAssignStaffRepository->findWithoutFail($id);

        if (empty($departmentAssignStaff)) {
            Flash::error('Department Assign Staff not found');

            return redirect(route('core.departmentAssignStaffs.index'));
        }

        $departmentAssignStaff = $this->departmentAssignStaffRepository->update($request->all(), $id);

        Flash::success('Department Assign Staff updated successfully.');

        return redirect(route('core.departmentAssignStaffs.index'));
    }

    /**
     * Remove the specified Department_assign_staff from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $departmentAssignStaff = $this->departmentAssignStaffRepository->findWithoutFail($id);

        if (empty($departmentAssignStaff)) {
            Flash::error('Department Assign Staff not found');

            return redirect(route('core.departmentAssignStaffs.index'));
        }

        $this->departmentAssignStaffRepository->delete($id);

        Flash::success('Department Assign Staff deleted successfully.');

        return redirect(route('core.departmentAssignStaffs.index'));
    }
}
