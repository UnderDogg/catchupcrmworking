<?php

namespace App\Http\Controllers\Core;

use App\DataTables\Core\TeamAssignsDataTable;
use App\Http\Requests\Core;
use App\Http\Requests\Core\CreateTeamAssignsRequest;
use App\Http\Requests\Core\UpdateTeamAssignsRequest;
use App\Repositories\Core\TeamAssignsRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TeamAssignsController extends AppBaseController
{
    /** @var  TeamAssignsRepository */
    private $teamAssignsRepository;

    public function __construct(TeamAssignsRepository $teamAssignsRepo)
    {
        $this->teamAssignsRepository = $teamAssignsRepo;
    }

    /**
     * Display a listing of the TeamAssigns.
     *
     * @param TeamAssignsDataTable $teamAssignsDataTable
     * @return Response
     */
    public function index(TeamAssignsDataTable $teamAssignsDataTable)
    {
        return $teamAssignsDataTable->render('core.team_assigns.index');
    }

    /**
     * Show the form for creating a new TeamAssigns.
     *
     * @return Response
     */
    public function create()
    {
        return view('core.team_assigns.create');
    }

    /**
     * Store a newly created TeamAssigns in storage.
     *
     * @param CreateTeamAssignsRequest $request
     *
     * @return Response
     */
    public function store(CreateTeamAssignsRequest $request)
    {
        $input = $request->all();

        $teamAssigns = $this->teamAssignsRepository->create($input);

        Flash::success('Team Assigns saved successfully.');

        return redirect(route('core.teamAssigns.index'));
    }

    /**
     * Display the specified TeamAssigns.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $teamAssigns = $this->teamAssignsRepository->findWithoutFail($id);

        if (empty($teamAssigns)) {
            Flash::error('Team Assigns not found');

            return redirect(route('core.teamAssigns.index'));
        }

        return view('core.team_assigns.show')->with('teamAssigns', $teamAssigns);
    }

    /**
     * Show the form for editing the specified TeamAssigns.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $teamAssigns = $this->teamAssignsRepository->findWithoutFail($id);

        if (empty($teamAssigns)) {
            Flash::error('Team Assigns not found');

            return redirect(route('core.teamAssigns.index'));
        }

        return view('core.team_assigns.edit')->with('teamAssigns', $teamAssigns);
    }

    /**
     * Update the specified TeamAssigns in storage.
     *
     * @param  int              $id
     * @param UpdateTeamAssignsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTeamAssignsRequest $request)
    {
        $teamAssigns = $this->teamAssignsRepository->findWithoutFail($id);

        if (empty($teamAssigns)) {
            Flash::error('Team Assigns not found');

            return redirect(route('core.teamAssigns.index'));
        }

        $teamAssigns = $this->teamAssignsRepository->update($request->all(), $id);

        Flash::success('Team Assigns updated successfully.');

        return redirect(route('core.teamAssigns.index'));
    }

    /**
     * Remove the specified TeamAssigns from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $teamAssigns = $this->teamAssignsRepository->findWithoutFail($id);

        if (empty($teamAssigns)) {
            Flash::error('Team Assigns not found');

            return redirect(route('core.teamAssigns.index'));
        }

        $this->teamAssignsRepository->delete($id);

        Flash::success('Team Assigns deleted successfully.');

        return redirect(route('core.teamAssigns.index'));
    }
}
