<?php

namespace App\Http\Controllers\Leads;

use Modules\Leads\DataTables\Leads\OpportunityTypeDataTable;
use App\Http\Requests\Leads;
use App\Http\Requests\Leads\CreateOpportunityTypeRequest;
use App\Http\Requests\Leads\UpdateOpportunityTypeRequest;
use Modules\Leads\Repositories\OpportunityTypeRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class OpportunityTypeController extends AppBaseController
{
    /** @var  OpportunityTypeRepository */
    private $opportunityTypeRepository;

    public function __construct(OpportunityTypeRepository $opportunityTypeRepo)
    {
        $this->opportunityTypeRepository = $opportunityTypeRepo;
    }

    /**
     * Display a listing of the OpportunityType.
     *
     * @param OpportunityTypeDataTable $opportunityTypeDataTable
     * @return Response
     */
    public function index(OpportunityTypeDataTable $opportunityTypeDataTable)
    {
        return $opportunityTypeDataTable->render('leads.opportunity_types.index');
    }

    /**
     * Show the form for creating a new OpportunityType.
     *
     * @return Response
     */
    public function create()
    {
        return view('leads.opportunity_types.create');
    }

    /**
     * Store a newly created OpportunityType in storage.
     *
     * @param CreateOpportunityTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateOpportunityTypeRequest $request)
    {
        $input = $request->all();

        $opportunityType = $this->opportunityTypeRepository->create($input);

        Flash::success('Opportunity Type saved successfully.');

        return redirect(route('leads.opportunityTypes.index'));
    }

    /**
     * Display the specified OpportunityType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $opportunityType = $this->opportunityTypeRepository->findWithoutFail($id);

        if (empty($opportunityType)) {
            Flash::error('Opportunity Type not found');

            return redirect(route('leads.opportunityTypes.index'));
        }

        return view('leads.opportunity_types.show')->with('opportunityType', $opportunityType);
    }

    /**
     * Show the form for editing the specified OpportunityType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $opportunityType = $this->opportunityTypeRepository->findWithoutFail($id);

        if (empty($opportunityType)) {
            Flash::error('Opportunity Type not found');

            return redirect(route('leads.opportunityTypes.index'));
        }

        return view('leads.opportunity_types.edit')->with('opportunityType', $opportunityType);
    }

    /**
     * Update the specified OpportunityType in storage.
     *
     * @param  int              $id
     * @param UpdateOpportunityTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOpportunityTypeRequest $request)
    {
        $opportunityType = $this->opportunityTypeRepository->findWithoutFail($id);

        if (empty($opportunityType)) {
            Flash::error('Opportunity Type not found');

            return redirect(route('leads.opportunityTypes.index'));
        }

        $opportunityType = $this->opportunityTypeRepository->update($request->all(), $id);

        Flash::success('Opportunity Type updated successfully.');

        return redirect(route('leads.opportunityTypes.index'));
    }

    /**
     * Remove the specified OpportunityType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $opportunityType = $this->opportunityTypeRepository->findWithoutFail($id);

        if (empty($opportunityType)) {
            Flash::error('Opportunity Type not found');

            return redirect(route('leads.opportunityTypes.index'));
        }

        $this->opportunityTypeRepository->delete($id);

        Flash::success('Opportunity Type deleted successfully.');

        return redirect(route('leads.opportunityTypes.index'));
    }
}
