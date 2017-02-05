<?php

namespace App\Http\Controllers\Core;

use App\DataTables\Core\ActivityStatusDataTable;
use App\Http\Requests\Core;
use App\Http\Requests\Core\CreateActivityStatusRequest;
use App\Http\Requests\Core\UpdateActivityStatusRequest;
use App\Repositories\Core\ActivityStatusRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ActivityStatusController extends AppBaseController
{
    /** @var  ActivityStatusRepository */
    private $activityStatusRepository;

    public function __construct(ActivityStatusRepository $activityStatusRepo)
    {
        $this->activityStatusRepository = $activityStatusRepo;
    }

    /**
     * Display a listing of the ActivityStatus.
     *
     * @param ActivityStatusDataTable $activityStatusDataTable
     * @return Response
     */
    public function index(ActivityStatusDataTable $activityStatusDataTable)
    {
        return $activityStatusDataTable->render('core.activity_statuses.index');
    }

    /**
     * Show the form for creating a new ActivityStatus.
     *
     * @return Response
     */
    public function create()
    {
        return view('core.activity_statuses.create');
    }

    /**
     * Store a newly created ActivityStatus in storage.
     *
     * @param CreateActivityStatusRequest $request
     *
     * @return Response
     */
    public function store(CreateActivityStatusRequest $request)
    {
        $input = $request->all();

        $activityStatus = $this->activityStatusRepository->create($input);

        Flash::success('Activity Status saved successfully.');

        return redirect(route('core.activityStatuses.index'));
    }

    /**
     * Display the specified ActivityStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $activityStatus = $this->activityStatusRepository->findWithoutFail($id);

        if (empty($activityStatus)) {
            Flash::error('Activity Status not found');

            return redirect(route('core.activityStatuses.index'));
        }

        return view('core.activity_statuses.show')->with('activityStatus', $activityStatus);
    }

    /**
     * Show the form for editing the specified ActivityStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $activityStatus = $this->activityStatusRepository->findWithoutFail($id);

        if (empty($activityStatus)) {
            Flash::error('Activity Status not found');

            return redirect(route('core.activityStatuses.index'));
        }

        return view('core.activity_statuses.edit')->with('activityStatus', $activityStatus);
    }

    /**
     * Update the specified ActivityStatus in storage.
     *
     * @param  int              $id
     * @param UpdateActivityStatusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateActivityStatusRequest $request)
    {
        $activityStatus = $this->activityStatusRepository->findWithoutFail($id);

        if (empty($activityStatus)) {
            Flash::error('Activity Status not found');

            return redirect(route('core.activityStatuses.index'));
        }

        $activityStatus = $this->activityStatusRepository->update($request->all(), $id);

        Flash::success('Activity Status updated successfully.');

        return redirect(route('core.activityStatuses.index'));
    }

    /**
     * Remove the specified ActivityStatus from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $activityStatus = $this->activityStatusRepository->findWithoutFail($id);

        if (empty($activityStatus)) {
            Flash::error('Activity Status not found');

            return redirect(route('core.activityStatuses.index'));
        }

        $this->activityStatusRepository->delete($id);

        Flash::success('Activity Status deleted successfully.');

        return redirect(route('core.activityStatuses.index'));
    }
}
