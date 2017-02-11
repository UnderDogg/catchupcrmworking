<?php

namespace App\Http\Controllers\Leads;

use Modules\Leads\DataTables\Leads\LeadSourceDataTable;
use App\Http\Requests\Leads;
use App\Http\Requests\Leads\CreateLeadSourceRequest;
use App\Http\Requests\Leads\UpdateLeadSourceRequest;
use Modules\Leads\Repositories\LeadSourceRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class LeadSourceController extends AppBaseController
{
    /** @var  LeadSourceRepository */
    private $leadSourceRepository;

    public function __construct(LeadSourceRepository $leadSourceRepo)
    {
        $this->leadSourceRepository = $leadSourceRepo;
    }

    /**
     * Display a listing of the LeadSource.
     *
     * @param LeadSourceDataTable $leadSourceDataTable
     * @return Response
     */
    public function index(LeadSourceDataTable $leadSourceDataTable)
    {
        return $leadSourceDataTable->render('leads.lead_sources.index');
    }

    /**
     * Show the form for creating a new LeadSource.
     *
     * @return Response
     */
    public function create()
    {
        return view('leads.lead_sources.create');
    }

    /**
     * Store a newly created LeadSource in storage.
     *
     * @param CreateLeadSourceRequest $request
     *
     * @return Response
     */
    public function store(CreateLeadSourceRequest $request)
    {
        $input = $request->all();

        $leadSource = $this->leadSourceRepository->create($input);

        Flash::success('Lead Source saved successfully.');

        return redirect(route('leads.leadSources.index'));
    }

    /**
     * Display the specified LeadSource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $leadSource = $this->leadSourceRepository->findWithoutFail($id);

        if (empty($leadSource)) {
            Flash::error('Lead Source not found');

            return redirect(route('leads.leadSources.index'));
        }

        return view('leads.lead_sources.show')->with('leadSource', $leadSource);
    }

    /**
     * Show the form for editing the specified LeadSource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $leadSource = $this->leadSourceRepository->findWithoutFail($id);

        if (empty($leadSource)) {
            Flash::error('Lead Source not found');

            return redirect(route('leads.leadSources.index'));
        }

        return view('leads.lead_sources.edit')->with('leadSource', $leadSource);
    }

    /**
     * Update the specified LeadSource in storage.
     *
     * @param  int              $id
     * @param UpdateLeadSourceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLeadSourceRequest $request)
    {
        $leadSource = $this->leadSourceRepository->findWithoutFail($id);

        if (empty($leadSource)) {
            Flash::error('Lead Source not found');

            return redirect(route('leads.leadSources.index'));
        }

        $leadSource = $this->leadSourceRepository->update($request->all(), $id);

        Flash::success('Lead Source updated successfully.');

        return redirect(route('leads.leadSources.index'));
    }

    /**
     * Remove the specified LeadSource from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $leadSource = $this->leadSourceRepository->findWithoutFail($id);

        if (empty($leadSource)) {
            Flash::error('Lead Source not found');

            return redirect(route('leads.leadSources.index'));
        }

        $this->leadSourceRepository->delete($id);

        Flash::success('Lead Source deleted successfully.');

        return redirect(route('leads.leadSources.index'));
    }
}
