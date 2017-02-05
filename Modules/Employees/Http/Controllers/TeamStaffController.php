<?php

namespace App\Http\Controllers\Employees;

use App\DataTables\Employees\TeamStaffDataTable;
use App\Http\Requests\Employees;
use App\Http\Requests\Employees\CreateTeamStaffRequest;
use App\Http\Requests\Employees\UpdateTeamStaffRequest;
use App\Repositories\Employees\TeamStaffRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TeamStaffController extends AppBaseController
{
    /** @var  TeamStaffRepository */
    private $teamStaffRepository;

    public function __construct(TeamStaffRepository $teamStaffRepo)
    {
        $this->teamStaffRepository = $teamStaffRepo;
    }

    /**
     * Display a listing of the TeamStaff.
     *
     * @param TeamStaffDataTable $teamStaffDataTable
     * @return Response
     */
    public function index(TeamStaffDataTable $teamStaffDataTable)
    {
        return $teamStaffDataTable->render('employees.team_staffs.index');
    }

    /**
     * Show the form for creating a new TeamStaff.
     *
     * @return Response
     */
    public function create()
    {
        return view('employees.team_staffs.create');
    }

    /**
     * Store a newly created TeamStaff in storage.
     *
     * @param CreateTeamStaffRequest $request
     *
     * @return Response
     */
    public function store(CreateTeamStaffRequest $request)
    {
        $input = $request->all();

        $teamStaff = $this->teamStaffRepository->create($input);

        Flash::success('Team Staff saved successfully.');

        return redirect(route('employees.teamStaffs.index'));
    }

    /**
     * Display the specified TeamStaff.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $teamStaff = $this->teamStaffRepository->findWithoutFail($id);

        if (empty($teamStaff)) {
            Flash::error('Team Staff not found');

            return redirect(route('employees.teamStaffs.index'));
        }

        return view('employees.team_staffs.show')->with('teamStaff', $teamStaff);
    }

    /**
     * Show the form for editing the specified TeamStaff.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $teamStaff = $this->teamStaffRepository->findWithoutFail($id);

        if (empty($teamStaff)) {
            Flash::error('Team Staff not found');

            return redirect(route('employees.teamStaffs.index'));
        }

        return view('employees.team_staffs.edit')->with('teamStaff', $teamStaff);
    }

    /**
     * Update the specified TeamStaff in storage.
     *
     * @param  int              $id
     * @param UpdateTeamStaffRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTeamStaffRequest $request)
    {
        $teamStaff = $this->teamStaffRepository->findWithoutFail($id);

        if (empty($teamStaff)) {
            Flash::error('Team Staff not found');

            return redirect(route('employees.teamStaffs.index'));
        }

        $teamStaff = $this->teamStaffRepository->update($request->all(), $id);

        Flash::success('Team Staff updated successfully.');

        return redirect(route('employees.teamStaffs.index'));
    }

    /**
     * Remove the specified TeamStaff from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $teamStaff = $this->teamStaffRepository->findWithoutFail($id);

        if (empty($teamStaff)) {
            Flash::error('Team Staff not found');

            return redirect(route('employees.teamStaffs.index'));
        }

        $this->teamStaffRepository->delete($id);

        Flash::success('Team Staff deleted successfully.');

        return redirect(route('employees.teamStaffs.index'));
    }
}
