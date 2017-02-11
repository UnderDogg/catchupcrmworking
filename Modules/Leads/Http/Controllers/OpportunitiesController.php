<?php

namespace App\Http\Controllers\Leads;

use Modules\Leads\DataTables\Leads\OpportunitiesDataTable;
use App\Http\Requests\Leads;
use App\Http\Requests\Leads\CreateOpportunitiesRequest;
use App\Http\Requests\Leads\UpdateOpportunitiesRequest;
use Modules\Leads\Repositories\OpportunitiesRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class OpportunitiesController extends AppBaseController
{
    /** @var  OpportunitiesRepository */
    private $opportunitiesRepository;

    public function __construct(OpportunitiesRepository $opportunitiesRepo)
    {
        $this->opportunitiesRepository = $opportunitiesRepo;
    }

    /**
     * Display a listing of the Opportunities.
     *
     * @param OpportunitiesDataTable $opportunitiesDataTable
     * @return Response
     */
    public function index(OpportunitiesDataTable $opportunitiesDataTable)
    {
        return $opportunitiesDataTable->render('leads.opportunities.index');
    }

    /**
     * Show the form for creating a new Opportunities.
     *
     * @return Response
     */
    public function create()
    {
        return view('leads.opportunities.create');
    }

    /**
     * Store a newly created Opportunities in storage.
     *
     * @param CreateOpportunitiesRequest $request
     *
     * @return Response
     */
    public function store(CreateOpportunitiesRequest $request)
    {
        $input = $request->all();

        $opportunities = $this->opportunitiesRepository->create($input);

        Flash::success('Opportunities saved successfully.');

        return redirect(route('leads.opportunities.index'));
    }

    /**
     * Display the specified Opportunities.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $opportunities = $this->opportunitiesRepository->findWithoutFail($id);

        if (empty($opportunities)) {
            Flash::error('Opportunities not found');

            return redirect(route('leads.opportunities.index'));
        }

        return view('leads.opportunities.show')->with('opportunities', $opportunities);
    }

    /**
     * Show the form for editing the specified Opportunities.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $opportunities = $this->opportunitiesRepository->findWithoutFail($id);

        if (empty($opportunities)) {
            Flash::error('Opportunities not found');

            return redirect(route('leads.opportunities.index'));
        }

        return view('leads.opportunities.edit')->with('opportunities', $opportunities);
    }

    /**
     * Update the specified Opportunities in storage.
     *
     * @param  int              $id
     * @param UpdateOpportunitiesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOpportunitiesRequest $request)
    {
        $opportunities = $this->opportunitiesRepository->findWithoutFail($id);

        if (empty($opportunities)) {
            Flash::error('Opportunities not found');

            return redirect(route('leads.opportunities.index'));
        }

        $opportunities = $this->opportunitiesRepository->update($request->all(), $id);

        Flash::success('Opportunities updated successfully.');

        return redirect(route('leads.opportunities.index'));
    }

    /**
     * Remove the specified Opportunities from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $opportunities = $this->opportunitiesRepository->findWithoutFail($id);

        if (empty($opportunities)) {
            Flash::error('Opportunities not found');

            return redirect(route('leads.opportunities.index'));
        }

        $this->opportunitiesRepository->delete($id);

        Flash::success('Opportunities deleted successfully.');

        return redirect(route('leads.opportunities.index'));
    }
}
