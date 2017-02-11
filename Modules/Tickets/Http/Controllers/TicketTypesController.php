<?php

namespace App\Http\Controllers\Tickets;

use Modules\Tickets\DataTables\Tickets\TicketTypesDataTable;
use App\Http\Requests\Tickets;
use App\Http\Requests\Tickets\CreateTicketTypesRequest;
use App\Http\Requests\Tickets\UpdateTicketTypesRequest;
use App\Repositories\Tickets\TicketTypesRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class TicketTypesController extends AppBaseController
{
    /** @var  TicketTypesRepository */
    private $ticketTypesRepository;

    public function __construct(TicketTypesRepository $ticketTypesRepo)
    {
        $this->ticketTypesRepository = $ticketTypesRepo;
    }

    /**
     * Display a listing of the TicketTypes.
     *
     * @param TicketTypesDataTable $ticketTypesDataTable
     * @return Response
     */
    public function index(TicketTypesDataTable $ticketTypesDataTable)
    {
        return $ticketTypesDataTable->render('tickets.ticket_types.index');
    }

    /**
     * Show the form for creating a new TicketTypes.
     *
     * @return Response
     */
    public function create()
    {
        return view('tickets.ticket_types.create');
    }

    /**
     * Store a newly created TicketTypes in storage.
     *
     * @param CreateTicketTypesRequest $request
     *
     * @return Response
     */
    public function store(CreateTicketTypesRequest $request)
    {
        $input = $request->all();

        $ticketTypes = $this->ticketTypesRepository->create($input);

        Flash::success('Ticket Types saved successfully.');

        return redirect(route('tickets.ticketTypes.index'));
    }

    /**
     * Display the specified TicketTypes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ticketTypes = $this->ticketTypesRepository->findWithoutFail($id);

        if (empty($ticketTypes)) {
            Flash::error('Ticket Types not found');

            return redirect(route('tickets.ticketTypes.index'));
        }

        return view('tickets.ticket_types.show')->with('ticketTypes', $ticketTypes);
    }

    /**
     * Show the form for editing the specified TicketTypes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ticketTypes = $this->ticketTypesRepository->findWithoutFail($id);

        if (empty($ticketTypes)) {
            Flash::error('Ticket Types not found');

            return redirect(route('tickets.ticketTypes.index'));
        }

        return view('tickets.ticket_types.edit')->with('ticketTypes', $ticketTypes);
    }

    /**
     * Update the specified TicketTypes in storage.
     *
     * @param  int              $id
     * @param UpdateTicketTypesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTicketTypesRequest $request)
    {
        $ticketTypes = $this->ticketTypesRepository->findWithoutFail($id);

        if (empty($ticketTypes)) {
            Flash::error('Ticket Types not found');

            return redirect(route('tickets.ticketTypes.index'));
        }

        $ticketTypes = $this->ticketTypesRepository->update($request->all(), $id);

        Flash::success('Ticket Types updated successfully.');

        return redirect(route('tickets.ticketTypes.index'));
    }

    /**
     * Remove the specified TicketTypes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ticketTypes = $this->ticketTypesRepository->findWithoutFail($id);

        if (empty($ticketTypes)) {
            Flash::error('Ticket Types not found');

            return redirect(route('tickets.ticketTypes.index'));
        }

        $this->ticketTypesRepository->delete($id);

        Flash::success('Ticket Types deleted successfully.');

        return redirect(route('tickets.ticketTypes.index'));
    }
}
