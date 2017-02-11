<?php

namespace App\Http\Controllers\Leads;

use Modules\Leads\DataTables\Leads\LeadsDataTable;
use App\Http\Requests\Leads;
use App\Http\Requests\Leads\CreateLeadsRequest;
use App\Http\Requests\Leads\UpdateLeadsRequest;
use Modules\Leads\Repositories\LeadsRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class LeadsController extends AppBaseController
{
    /** @var  LeadsRepository */
    private $leadsRepository;

    public function __construct(LeadsRepository $leadsRepo)
    {
        $this->leadsRepository = $leadsRepo;
    }

    /**
     * Display a listing of the Leads.
     *
     * @param LeadsDataTable $leadsDataTable
     * @return Response
     */
    public function index(LeadsDataTable $leadsDataTable)
    {
        return $leadsDataTable->render('leads.leads.index');
    }

    /**
     * Show the form for creating a new Leads.
     *
     * @return Response
     */
    public function create()
    {
        return view('leads.leads.create');
    }

    /**
     * Store a newly created Leads in storage.
     *
     * @param CreateLeadsRequest $request
     *
     * @return Response
     */
    public function store(CreateLeadsRequest $request)
    {
        $input = $request->all();

        $leads = $this->leadsRepository->create($input);

        Flash::success('Leads saved successfully.');

        return redirect(route('leads.leads.index'));
    }

    /**
     * Display the specified Leads.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $leads = $this->leadsRepository->findWithoutFail($id);

        if (empty($leads)) {
            Flash::error('Leads not found');

            return redirect(route('leads.leads.index'));
        }

        return view('leads.leads.show')->with('leads', $leads);
    }

    /**
     * Show the form for editing the specified Leads.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $leads = $this->leadsRepository->findWithoutFail($id);

        if (empty($leads)) {
            Flash::error('Leads not found');

            return redirect(route('leads.leads.index'));
        }

        return view('leads.leads.edit')->with('leads', $leads);
    }

    /**
     * Update the specified Leads in storage.
     *
     * @param  int              $id
     * @param UpdateLeadsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLeadsRequest $request)
    {
        $leads = $this->leadsRepository->findWithoutFail($id);

        if (empty($leads)) {
            Flash::error('Leads not found');

            return redirect(route('leads.leads.index'));
        }

        $leads = $this->leadsRepository->update($request->all(), $id);

        Flash::success('Leads updated successfully.');

        return redirect(route('leads.leads.index'));
    }

    /**
     * Remove the specified Leads from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $leads = $this->leadsRepository->findWithoutFail($id);

        if (empty($leads)) {
            Flash::error('Leads not found');

            return redirect(route('leads.leads.index'));
        }

        $this->leadsRepository->delete($id);

        Flash::success('Leads deleted successfully.');

        return redirect(route('leads.leads.index'));
    }
}
