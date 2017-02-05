<?php

namespace App\Http\Controllers\Core;

use App\DataTables\Core\ActivityPriorityDataTable;
use App\Http\Requests\Core;
use App\Http\Requests\Core\CreateActivityPriorityRequest;
use App\Http\Requests\Core\UpdateActivityPriorityRequest;
use App\Repositories\Core\ActivityPriorityRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ActivityPriorityController extends AppBaseController
{
    /** @var  ActivityPriorityRepository */
    private $activityPriorityRepository;

    public function __construct(ActivityPriorityRepository $activityPriorityRepo)
    {
        $this->activityPriorityRepository = $activityPriorityRepo;
    }

    /**
     * Display a listing of the ActivityPriority.
     *
     * @param ActivityPriorityDataTable $activityPriorityDataTable
     * @return Response
     */
    public function index(ActivityPriorityDataTable $activityPriorityDataTable)
    {
        return $activityPriorityDataTable->render('core.activity_priorities.index');
    }

    /**
     * Show the form for creating a new ActivityPriority.
     *
     * @return Response
     */
    public function create()
    {
        return view('core.activity_priorities.create');
    }

    /**
     * Store a newly created ActivityPriority in storage.
     *
     * @param CreateActivityPriorityRequest $request
     *
     * @return Response
     */
    public function store(CreateActivityPriorityRequest $request)
    {
        $input = $request->all();

        $activityPriority = $this->activityPriorityRepository->create($input);

        Flash::success('Activity Priority saved successfully.');

        return redirect(route('core.activityPriorities.index'));
    }

    /**
     * Display the specified ActivityPriority.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $activityPriority = $this->activityPriorityRepository->findWithoutFail($id);

        if (empty($activityPriority)) {
            Flash::error('Activity Priority not found');

            return redirect(route('core.activityPriorities.index'));
        }

        return view('core.activity_priorities.show')->with('activityPriority', $activityPriority);
    }

    /**
     * Show the form for editing the specified ActivityPriority.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $activityPriority = $this->activityPriorityRepository->findWithoutFail($id);

        if (empty($activityPriority)) {
            Flash::error('Activity Priority not found');

            return redirect(route('core.activityPriorities.index'));
        }

        return view('core.activity_priorities.edit')->with('activityPriority', $activityPriority);
    }

    /**
     * Update the specified ActivityPriority in storage.
     *
     * @param  int              $id
     * @param UpdateActivityPriorityRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateActivityPriorityRequest $request)
    {
        $activityPriority = $this->activityPriorityRepository->findWithoutFail($id);

        if (empty($activityPriority)) {
            Flash::error('Activity Priority not found');

            return redirect(route('core.activityPriorities.index'));
        }

        $activityPriority = $this->activityPriorityRepository->update($request->all(), $id);

        Flash::success('Activity Priority updated successfully.');

        return redirect(route('core.activityPriorities.index'));
    }

    /**
     * Remove the specified ActivityPriority from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $activityPriority = $this->activityPriorityRepository->findWithoutFail($id);

        if (empty($activityPriority)) {
            Flash::error('Activity Priority not found');

            return redirect(route('core.activityPriorities.index'));
        }

        $this->activityPriorityRepository->delete($id);

        Flash::success('Activity Priority deleted successfully.');

        return redirect(route('core.activityPriorities.index'));
    }
}
