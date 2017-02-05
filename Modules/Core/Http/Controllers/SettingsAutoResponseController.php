<?php

namespace App\Http\Controllers\Core;

use App\DataTables\Core\SettingsAutoResponseDataTable;
use App\Http\Requests\Core;
use App\Http\Requests\Core\CreateSettingsAutoResponseRequest;
use App\Http\Requests\Core\UpdateSettingsAutoResponseRequest;
use App\Repositories\Core\SettingsAutoResponseRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class SettingsAutoResponseController extends AppBaseController
{
    /** @var  SettingsAutoResponseRepository */
    private $settingsAutoResponseRepository;

    public function __construct(SettingsAutoResponseRepository $settingsAutoResponseRepo)
    {
        $this->settingsAutoResponseRepository = $settingsAutoResponseRepo;
    }

    /**
     * Display a listing of the SettingsAutoResponse.
     *
     * @param SettingsAutoResponseDataTable $settingsAutoResponseDataTable
     * @return Response
     */
    public function index(SettingsAutoResponseDataTable $settingsAutoResponseDataTable)
    {
        return $settingsAutoResponseDataTable->render('core.settings_auto_responses.index');
    }

    /**
     * Show the form for creating a new SettingsAutoResponse.
     *
     * @return Response
     */
    public function create()
    {
        return view('core.settings_auto_responses.create');
    }

    /**
     * Store a newly created SettingsAutoResponse in storage.
     *
     * @param CreateSettingsAutoResponseRequest $request
     *
     * @return Response
     */
    public function store(CreateSettingsAutoResponseRequest $request)
    {
        $input = $request->all();

        $settingsAutoResponse = $this->settingsAutoResponseRepository->create($input);

        Flash::success('Settings Auto Response saved successfully.');

        return redirect(route('core.settingsAutoResponses.index'));
    }

    /**
     * Display the specified SettingsAutoResponse.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $settingsAutoResponse = $this->settingsAutoResponseRepository->findWithoutFail($id);

        if (empty($settingsAutoResponse)) {
            Flash::error('Settings Auto Response not found');

            return redirect(route('core.settingsAutoResponses.index'));
        }

        return view('core.settings_auto_responses.show')->with('settingsAutoResponse', $settingsAutoResponse);
    }

    /**
     * Show the form for editing the specified SettingsAutoResponse.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $settingsAutoResponse = $this->settingsAutoResponseRepository->findWithoutFail($id);

        if (empty($settingsAutoResponse)) {
            Flash::error('Settings Auto Response not found');

            return redirect(route('core.settingsAutoResponses.index'));
        }

        return view('core.settings_auto_responses.edit')->with('settingsAutoResponse', $settingsAutoResponse);
    }

    /**
     * Update the specified SettingsAutoResponse in storage.
     *
     * @param  int              $id
     * @param UpdateSettingsAutoResponseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSettingsAutoResponseRequest $request)
    {
        $settingsAutoResponse = $this->settingsAutoResponseRepository->findWithoutFail($id);

        if (empty($settingsAutoResponse)) {
            Flash::error('Settings Auto Response not found');

            return redirect(route('core.settingsAutoResponses.index'));
        }

        $settingsAutoResponse = $this->settingsAutoResponseRepository->update($request->all(), $id);

        Flash::success('Settings Auto Response updated successfully.');

        return redirect(route('core.settingsAutoResponses.index'));
    }

    /**
     * Remove the specified SettingsAutoResponse from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $settingsAutoResponse = $this->settingsAutoResponseRepository->findWithoutFail($id);

        if (empty($settingsAutoResponse)) {
            Flash::error('Settings Auto Response not found');

            return redirect(route('core.settingsAutoResponses.index'));
        }

        $this->settingsAutoResponseRepository->delete($id);

        Flash::success('Settings Auto Response deleted successfully.');

        return redirect(route('core.settingsAutoResponses.index'));
    }
}
