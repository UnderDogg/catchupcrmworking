<?php

namespace Modules\Employees\Http\Controllers;

use Modules\Employees\DataTables\Employees\TeamsDataTable;
use App\Http\Requests\Employees;
use App\Http\Requests\Employees\CreateTeamsRequest;
use App\Http\Requests\Employees\UpdateTeamsRequest;
use App\Repositories\Employees\TeamsRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class TeamsController extends AppBaseController
{
    /** @var  TeamsRepository */
    private $teamsRepository;

    public function __construct(TeamsRepository $teamsRepo)
    {
        $this->teamsRepository = $teamsRepo;
    }

    /**
     * Display a listing of the Teams.
     *
     * @param TeamsDataTable $teamsDataTable
     * @return Response
     */
    public function index(TeamsDataTable $teamsDataTable)
    {
        return $teamsDataTable->render('employees.teams.index');
    }

    /**
     * Show the form for creating a new Teams.
     *
     * @return Response
     */
    public function create()
    {
        return view('employees::teams.create');
    }

    /**
     * Store a newly created Teams in storage.
     *
     * @param CreateTeamsRequest $request
     *
     * @return Response
     */
    public function store(CreateTeamsRequest $request)
    {
        $input = $request->all();

        $teams = $this->teamsRepository->create($input);

        Flash::success('Teams saved successfully.');

        return redirect(route('employees.teams.index'));
    }

    /**
     * Display the specified Teams.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $teams = $this->teamsRepository->findWithoutFail($id);

        if (empty($teams)) {
            Flash::error('Teams not found');

            return redirect(route('employees.teams.index'));
        }

        return view('employees::teams.show')->with('teams', $teams);
    }

    /**
     * Show the form for editing the specified Teams.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $teams = $this->teamsRepository->findWithoutFail($id);

        if (empty($teams)) {
            Flash::error('Teams not found');

            return redirect(route('employees.teams.index'));
        }

        return view('employees::teams.edit')->with('teams', $teams);
    }

    /**
     * Update the specified Teams in storage.
     *
     * @param  int              $id
     * @param UpdateTeamsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTeamsRequest $request)
    {
        $teams = $this->teamsRepository->findWithoutFail($id);

        if (empty($teams)) {
            Flash::error('Teams not found');

            return redirect(route('employees.teams.index'));
        }

        $teams = $this->teamsRepository->update($request->all(), $id);

        Flash::success('Teams updated successfully.');

        return redirect(route('employees.teams.index'));
    }

    /**
     * Remove the specified Teams from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $teams = $this->teamsRepository->findWithoutFail($id);

        if (empty($teams)) {
            Flash::error('Teams not found');

            return redirect(route('employees.teams.index'));
        }

        $this->teamsRepository->delete($id);

        Flash::success('Teams deleted successfully.');

        return redirect(route('employees.teams.index'));
    }
}
