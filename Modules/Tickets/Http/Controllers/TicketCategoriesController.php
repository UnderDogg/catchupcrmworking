<?php

namespace App\Http\Controllers\Tickets;

use Modules\Tickets\DataTables\Tickets\TicketCategoriesDataTable;
use App\Http\Requests\Tickets;
use App\Http\Requests\Tickets\CreateTicketCategoriesRequest;
use App\Http\Requests\Tickets\UpdateTicketCategoriesRequest;
use App\Repositories\Tickets\TicketCategoriesRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class TicketCategoriesController extends AppBaseController
{
    /** @var  TicketCategoriesRepository */
    private $ticketCategoriesRepository;

    public function __construct(TicketCategoriesRepository $ticketCategoriesRepo)
    {
        $this->ticketCategoriesRepository = $ticketCategoriesRepo;
    }

    /**
     * Display a listing of the TicketCategories.
     *
     * @param TicketCategoriesDataTable $ticketCategoriesDataTable
     * @return Response
     */
    public function index(TicketCategoriesDataTable $ticketCategoriesDataTable)
    {
        return $ticketCategoriesDataTable->render('tickets.ticket_categories.index');
    }

    /**
     * Show the form for creating a new TicketCategories.
     *
     * @return Response
     */
    public function create()
    {
        return view('tickets.ticket_categories.create');
    }

    /**
     * Store a newly created TicketCategories in storage.
     *
     * @param CreateTicketCategoriesRequest $request
     *
     * @return Response
     */
    public function store(CreateTicketCategoriesRequest $request)
    {
        $input = $request->all();

        $ticketCategories = $this->ticketCategoriesRepository->create($input);

        Flash::success('Ticket Categories saved successfully.');

        return redirect(route('tickets.ticketCategories.index'));
    }

    /**
     * Display the specified TicketCategories.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ticketCategories = $this->ticketCategoriesRepository->findWithoutFail($id);

        if (empty($ticketCategories)) {
            Flash::error('Ticket Categories not found');

            return redirect(route('tickets.ticketCategories.index'));
        }

        return view('tickets.ticket_categories.show')->with('ticketCategories', $ticketCategories);
    }

    /**
     * Show the form for editing the specified TicketCategories.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ticketCategories = $this->ticketCategoriesRepository->findWithoutFail($id);

        if (empty($ticketCategories)) {
            Flash::error('Ticket Categories not found');

            return redirect(route('tickets.ticketCategories.index'));
        }

        return view('tickets.ticket_categories.edit')->with('ticketCategories', $ticketCategories);
    }

    /**
     * Update the specified TicketCategories in storage.
     *
     * @param  int              $id
     * @param UpdateTicketCategoriesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTicketCategoriesRequest $request)
    {
        $ticketCategories = $this->ticketCategoriesRepository->findWithoutFail($id);

        if (empty($ticketCategories)) {
            Flash::error('Ticket Categories not found');

            return redirect(route('tickets.ticketCategories.index'));
        }

        $ticketCategories = $this->ticketCategoriesRepository->update($request->all(), $id);

        Flash::success('Ticket Categories updated successfully.');

        return redirect(route('tickets.ticketCategories.index'));
    }

    /**
     * Remove the specified TicketCategories from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ticketCategories = $this->ticketCategoriesRepository->findWithoutFail($id);

        if (empty($ticketCategories)) {
            Flash::error('Ticket Categories not found');

            return redirect(route('tickets.ticketCategories.index'));
        }

        $this->ticketCategoriesRepository->delete($id);

        Flash::success('Ticket Categories deleted successfully.');

        return redirect(route('tickets.ticketCategories.index'));
    }
}
