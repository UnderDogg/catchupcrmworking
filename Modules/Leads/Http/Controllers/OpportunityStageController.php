<?php

namespace App\Http\Controllers\Leads;

use Modules\Leads\DataTables\Leads\OpportunityStageDataTable;
use App\Http\Requests\Leads;
use App\Http\Requests\Leads\CreateOpportunityStageRequest;
use App\Http\Requests\Leads\UpdateOpportunityStageRequest;
use Modules\Leads\Repositories\OpportunityStageRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class OpportunityStageController extends AppBaseController
{
    /** @var  OpportunityStageRepository */
    private $opportunityStageRepository;

    public function __construct(OpportunityStageRepository $opportunityStageRepo)
    {
        $this->opportunityStageRepository = $opportunityStageRepo;
    }

    /**
     * Display a listing of the OpportunityStage.
     *
     * @param OpportunityStageDataTable $opportunityStageDataTable
     * @return Response
     */
    public function index(OpportunityStageDataTable $opportunityStageDataTable)
    {
        return $opportunityStageDataTable->render('leads.opportunity_stages.index');
    }

    /**
     * Show the form for creating a new OpportunityStage.
     *
     * @return Response
     */
    public function create()
    {
        return view('leads.opportunity_stages.create');
    }

    /**
     * Store a newly created OpportunityStage in storage.
     *
     * @param CreateOpportunityStageRequest $request
     *
     * @return Response
     */
    public function store(CreateOpportunityStageRequest $request)
    {
        $input = $request->all();

        $opportunityStage = $this->opportunityStageRepository->create($input);

        Flash::success('Opportunity Stage saved successfully.');

        return redirect(route('leads.opportunityStages.index'));
    }

    /**
     * Display the specified OpportunityStage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $opportunityStage = $this->opportunityStageRepository->findWithoutFail($id);

        if (empty($opportunityStage)) {
            Flash::error('Opportunity Stage not found');

            return redirect(route('leads.opportunityStages.index'));
        }

        return view('leads.opportunity_stages.show')->with('opportunityStage', $opportunityStage);
    }

    /**
     * Show the form for editing the specified OpportunityStage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $opportunityStage = $this->opportunityStageRepository->findWithoutFail($id);

        if (empty($opportunityStage)) {
            Flash::error('Opportunity Stage not found');

            return redirect(route('leads.opportunityStages.index'));
        }

        return view('leads.opportunity_stages.edit')->with('opportunityStage', $opportunityStage);
    }

    /**
     * Update the specified OpportunityStage in storage.
     *
     * @param  int              $id
     * @param UpdateOpportunityStageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOpportunityStageRequest $request)
    {
        $opportunityStage = $this->opportunityStageRepository->findWithoutFail($id);

        if (empty($opportunityStage)) {
            Flash::error('Opportunity Stage not found');

            return redirect(route('leads.opportunityStages.index'));
        }

        $opportunityStage = $this->opportunityStageRepository->update($request->all(), $id);

        Flash::success('Opportunity Stage updated successfully.');

        return redirect(route('leads.opportunityStages.index'));
    }

    /**
     * Remove the specified OpportunityStage from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $opportunityStage = $this->opportunityStageRepository->findWithoutFail($id);

        if (empty($opportunityStage)) {
            Flash::error('Opportunity Stage not found');

            return redirect(route('leads.opportunityStages.index'));
        }

        $this->opportunityStageRepository->delete($id);

        Flash::success('Opportunity Stage deleted successfully.');

        return redirect(route('leads.opportunityStages.index'));
    }
}
