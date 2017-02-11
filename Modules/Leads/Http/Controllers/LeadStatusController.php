<?php

namespace App\Http\Controllers\Leads;

use Modules\Leads\DataTables\Leads\LeadStatusDataTable;
use App\Http\Requests\Leads;
use App\Http\Requests\Leads\CreateLeadStatusRequest;
use App\Http\Requests\Leads\UpdateLeadStatusRequest;
use Modules\Leads\Repositories\LeadStatusRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class LeadStatusController extends AppBaseController
{
    /** @var  LeadStatusRepository */
    private $leadStatusRepository;

    public function __construct(LeadStatusRepository $leadStatusRepo)
    {
        $this->leadStatusRepository = $leadStatusRepo;
    }

    /**
     * Display a listing of the LeadStatus.
     *
     * @param LeadStatusDataTable $leadStatusDataTable
     * @return Response
     */
    public function index(LeadStatusDataTable $leadStatusDataTable)
    {
        return $leadStatusDataTable->render('leads.lead_statuses.index');
    }

    /**
     * Show the form for creating a new LeadStatus.
     *
     * @return Response
     */
    public function create()
    {
        return view('leads.lead_statuses.create');
    }

    /**
     * Store a newly created LeadStatus in storage.
     *
     * @param CreateLeadStatusRequest $request
     *
     * @return Response
     */
    public function store(CreateLeadStatusRequest $request)
    {
        $input = $request->all();

        $leadStatus = $this->leadStatusRepository->create($input);

        Flash::success('Lead Status saved successfully.');

        return redirect(route('leads.leadStatuses.index'));
    }

    /**
     * Display the specified LeadStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $leadStatus = $this->leadStatusRepository->findWithoutFail($id);

        if (empty($leadStatus)) {
            Flash::error('Lead Status not found');

            return redirect(route('leads.leadStatuses.index'));
        }

        return view('leads.lead_statuses.show')->with('leadStatus', $leadStatus);
    }

    /**
     * Show the form for editing the specified LeadStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $leadStatus = $this->leadStatusRepository->findWithoutFail($id);

        if (empty($leadStatus)) {
            Flash::error('Lead Status not found');

            return redirect(route('leads.leadStatuses.index'));
        }

        return view('leads.lead_statuses.edit')->with('leadStatus', $leadStatus);
    }

    /**
     * Update the specified LeadStatus in storage.
     *
     * @param  int              $id
     * @param UpdateLeadStatusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLeadStatusRequest $request)
    {
        $leadStatus = $this->leadStatusRepository->findWithoutFail($id);

        if (empty($leadStatus)) {
            Flash::error('Lead Status not found');

            return redirect(route('leads.leadStatuses.index'));
        }

        $leadStatus = $this->leadStatusRepository->update($request->all(), $id);

        Flash::success('Lead Status updated successfully.');

        return redirect(route('leads.leadStatuses.index'));
    }

    /**
     * Remove the specified LeadStatus from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $leadStatus = $this->leadStatusRepository->findWithoutFail($id);

        if (empty($leadStatus)) {
            Flash::error('Lead Status not found');

            return redirect(route('leads.leadStatuses.index'));
        }

        $this->leadStatusRepository->delete($id);

        Flash::success('Lead Status deleted successfully.');

        return redirect(route('leads.leadStatuses.index'));
    }
}
