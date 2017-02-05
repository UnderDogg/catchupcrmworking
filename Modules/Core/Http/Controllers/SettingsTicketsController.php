<?php

namespace App\Http\Controllers\Core;

use App\DataTables\Core\SettingsTicketsDataTable;
use App\Http\Requests\Core;
use App\Http\Requests\Core\CreateSettingsTicketsRequest;
use App\Http\Requests\Core\UpdateSettingsTicketsRequest;
use App\Repositories\Core\SettingsTicketsRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class SettingsTicketsController extends AppBaseController
{
    /** @var  SettingsTicketsRepository */
    private $settingsTicketsRepository;

    public function __construct(SettingsTicketsRepository $settingsTicketsRepo)
    {
        $this->settingsTicketsRepository = $settingsTicketsRepo;
    }

    /**
     * Display a listing of the SettingsTickets.
     *
     * @param SettingsTicketsDataTable $settingsTicketsDataTable
     * @return Response
     */
    public function index(SettingsTicketsDataTable $settingsTicketsDataTable)
    {
        return $settingsTicketsDataTable->render('core.settings_tickets.index');
    }

    /**
     * Show the form for creating a new SettingsTickets.
     *
     * @return Response
     */
    public function create()
    {
        return view('core.settings_tickets.create');
    }

    /**
     * Store a newly created SettingsTickets in storage.
     *
     * @param CreateSettingsTicketsRequest $request
     *
     * @return Response
     */
    public function store(CreateSettingsTicketsRequest $request)
    {
        $input = $request->all();

        $settingsTickets = $this->settingsTicketsRepository->create($input);

        Flash::success('Settings Tickets saved successfully.');

        return redirect(route('core.settingsTickets.index'));
    }

    /**
     * Display the specified SettingsTickets.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $settingsTickets = $this->settingsTicketsRepository->findWithoutFail($id);

        if (empty($settingsTickets)) {
            Flash::error('Settings Tickets not found');

            return redirect(route('core.settingsTickets.index'));
        }

        return view('core.settings_tickets.show')->with('settingsTickets', $settingsTickets);
    }

    /**
     * Show the form for editing the specified SettingsTickets.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $settingsTickets = $this->settingsTicketsRepository->findWithoutFail($id);

        if (empty($settingsTickets)) {
            Flash::error('Settings Tickets not found');

            return redirect(route('core.settingsTickets.index'));
        }

        return view('core.settings_tickets.edit')->with('settingsTickets', $settingsTickets);
    }

    /**
     * Update the specified SettingsTickets in storage.
     *
     * @param  int              $id
     * @param UpdateSettingsTicketsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSettingsTicketsRequest $request)
    {
        $settingsTickets = $this->settingsTicketsRepository->findWithoutFail($id);

        if (empty($settingsTickets)) {
            Flash::error('Settings Tickets not found');

            return redirect(route('core.settingsTickets.index'));
        }

        $settingsTickets = $this->settingsTicketsRepository->update($request->all(), $id);

        Flash::success('Settings Tickets updated successfully.');

        return redirect(route('core.settingsTickets.index'));
    }

    /**
     * Remove the specified SettingsTickets from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $settingsTickets = $this->settingsTicketsRepository->findWithoutFail($id);

        if (empty($settingsTickets)) {
            Flash::error('Settings Tickets not found');

            return redirect(route('core.settingsTickets.index'));
        }

        $this->settingsTicketsRepository->delete($id);

        Flash::success('Settings Tickets deleted successfully.');

        return redirect(route('core.settingsTickets.index'));
    }
}
