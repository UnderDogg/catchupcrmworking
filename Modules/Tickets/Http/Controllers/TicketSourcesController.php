<?php

namespace App\Http\Controllers\Tickets;

use Modules\Tickets\DataTables\Tickets\TicketSourcesDataTable;
use App\Http\Requests\Tickets;
use App\Http\Requests\Tickets\CreateTicketSourcesRequest;
use App\Http\Requests\Tickets\UpdateTicketSourcesRequest;
use App\Repositories\Tickets\TicketSourcesRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class TicketSourcesController extends AppBaseController
{
    /** @var  TicketSourcesRepository */
    private $ticketSourcesRepository;

    public function __construct(TicketSourcesRepository $ticketSourcesRepo)
    {
        $this->ticketSourcesRepository = $ticketSourcesRepo;
    }

    /**
     * Display a listing of the TicketSources.
     *
     * @param TicketSourcesDataTable $ticketSourcesDataTable
     * @return Response
     */
    public function index(TicketSourcesDataTable $ticketSourcesDataTable)
    {
        return $ticketSourcesDataTable->render('tickets.ticket_sources.index');
    }

    /**
     * Show the form for creating a new TicketSources.
     *
     * @return Response
     */
    public function create()
    {
        return view('tickets.ticket_sources.create');
    }

    /**
     * Store a newly created TicketSources in storage.
     *
     * @param CreateTicketSourcesRequest $request
     *
     * @return Response
     */
    public function store(CreateTicketSourcesRequest $request)
    {
        $input = $request->all();

        $ticketSources = $this->ticketSourcesRepository->create($input);

        Flash::success('Ticket Sources saved successfully.');

        return redirect(route('tickets.ticketSources.index'));
    }

    /**
     * Display the specified TicketSources.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ticketSources = $this->ticketSourcesRepository->findWithoutFail($id);

        if (empty($ticketSources)) {
            Flash::error('Ticket Sources not found');

            return redirect(route('tickets.ticketSources.index'));
        }

        return view('tickets.ticket_sources.show')->with('ticketSources', $ticketSources);
    }

    /**
     * Show the form for editing the specified TicketSources.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ticketSources = $this->ticketSourcesRepository->findWithoutFail($id);

        if (empty($ticketSources)) {
            Flash::error('Ticket Sources not found');

            return redirect(route('tickets.ticketSources.index'));
        }

        return view('tickets.ticket_sources.edit')->with('ticketSources', $ticketSources);
    }

    /**
     * Update the specified TicketSources in storage.
     *
     * @param  int              $id
     * @param UpdateTicketSourcesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTicketSourcesRequest $request)
    {
        $ticketSources = $this->ticketSourcesRepository->findWithoutFail($id);

        if (empty($ticketSources)) {
            Flash::error('Ticket Sources not found');

            return redirect(route('tickets.ticketSources.index'));
        }

        $ticketSources = $this->ticketSourcesRepository->update($request->all(), $id);

        Flash::success('Ticket Sources updated successfully.');

        return redirect(route('tickets.ticketSources.index'));
    }

    /**
     * Remove the specified TicketSources from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ticketSources = $this->ticketSourcesRepository->findWithoutFail($id);

        if (empty($ticketSources)) {
            Flash::error('Ticket Sources not found');

            return redirect(route('tickets.ticketSources.index'));
        }

        $this->ticketSourcesRepository->delete($id);

        Flash::success('Ticket Sources deleted successfully.');

        return redirect(route('tickets.ticketSources.index'));
    }
}
