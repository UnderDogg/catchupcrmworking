<?php

namespace App\Http\Controllers\Tickets;

use Modules\Tickets\DataTables\Tickets\TicketHelpTopicsDataTable;
use App\Http\Requests\Tickets;
use App\Http\Requests\Tickets\CreateTicketHelpTopicsRequest;
use App\Http\Requests\Tickets\UpdateTicketHelpTopicsRequest;
use App\Repositories\Tickets\TicketHelpTopicsRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class TicketHelpTopicsController extends AppBaseController
{
    /** @var  TicketHelpTopicsRepository */
    private $ticketHelpTopicsRepository;

    public function __construct(TicketHelpTopicsRepository $ticketHelpTopicsRepo)
    {
        $this->ticketHelpTopicsRepository = $ticketHelpTopicsRepo;
    }

    /**
     * Display a listing of the TicketHelpTopics.
     *
     * @param TicketHelpTopicsDataTable $ticketHelpTopicsDataTable
     * @return Response
     */
    public function index(TicketHelpTopicsDataTable $ticketHelpTopicsDataTable)
    {
        return $ticketHelpTopicsDataTable->render('tickets.ticket_help_topics.index');
    }

    /**
     * Show the form for creating a new TicketHelpTopics.
     *
     * @return Response
     */
    public function create()
    {
        return view('tickets.ticket_help_topics.create');
    }

    /**
     * Store a newly created TicketHelpTopics in storage.
     *
     * @param CreateTicketHelpTopicsRequest $request
     *
     * @return Response
     */
    public function store(CreateTicketHelpTopicsRequest $request)
    {
        $input = $request->all();

        $ticketHelpTopics = $this->ticketHelpTopicsRepository->create($input);

        Flash::success('Ticket Help Topics saved successfully.');

        return redirect(route('tickets.ticketHelpTopics.index'));
    }

    /**
     * Display the specified TicketHelpTopics.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ticketHelpTopics = $this->ticketHelpTopicsRepository->findWithoutFail($id);

        if (empty($ticketHelpTopics)) {
            Flash::error('Ticket Help Topics not found');

            return redirect(route('tickets.ticketHelpTopics.index'));
        }

        return view('tickets.ticket_help_topics.show')->with('ticketHelpTopics', $ticketHelpTopics);
    }

    /**
     * Show the form for editing the specified TicketHelpTopics.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ticketHelpTopics = $this->ticketHelpTopicsRepository->findWithoutFail($id);

        if (empty($ticketHelpTopics)) {
            Flash::error('Ticket Help Topics not found');

            return redirect(route('tickets.ticketHelpTopics.index'));
        }

        return view('tickets.ticket_help_topics.edit')->with('ticketHelpTopics', $ticketHelpTopics);
    }

    /**
     * Update the specified TicketHelpTopics in storage.
     *
     * @param  int              $id
     * @param UpdateTicketHelpTopicsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTicketHelpTopicsRequest $request)
    {
        $ticketHelpTopics = $this->ticketHelpTopicsRepository->findWithoutFail($id);

        if (empty($ticketHelpTopics)) {
            Flash::error('Ticket Help Topics not found');

            return redirect(route('tickets.ticketHelpTopics.index'));
        }

        $ticketHelpTopics = $this->ticketHelpTopicsRepository->update($request->all(), $id);

        Flash::success('Ticket Help Topics updated successfully.');

        return redirect(route('tickets.ticketHelpTopics.index'));
    }

    /**
     * Remove the specified TicketHelpTopics from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ticketHelpTopics = $this->ticketHelpTopicsRepository->findWithoutFail($id);

        if (empty($ticketHelpTopics)) {
            Flash::error('Ticket Help Topics not found');

            return redirect(route('tickets.ticketHelpTopics.index'));
        }

        $this->ticketHelpTopicsRepository->delete($id);

        Flash::success('Ticket Help Topics deleted successfully.');

        return redirect(route('tickets.ticketHelpTopics.index'));
    }
}
