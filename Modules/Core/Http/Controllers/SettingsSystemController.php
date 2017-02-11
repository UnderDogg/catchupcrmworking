<?php

namespace Modules\Core\Http\Controllers;

use Modules\Core\DataTables\Core\SettingsSystemDataTable;
use App\Http\Requests\Core;
use App\Http\Requests\Core\CreateSettingsSystemRequest;
use App\Http\Requests\Core\UpdateSettingsSystemRequest;
use App\Repositories\Core\SettingsSystemRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class SettingsSystemController extends AppBaseController
{
    /** @var  SettingsSystemRepository */
    private $settingsSystemRepository;

    public function __construct(SettingsSystemRepository $settingsSystemRepo)
    {
        $this->settingsSystemRepository = $settingsSystemRepo;
    }

    /**
     * Display a listing of the SettingsSystem.
     *
     * @param SettingsSystemDataTable $settingsSystemDataTable
     * @return Response
     */
    public function index(SettingsSystemDataTable $settingsSystemDataTable)
    {
        return $settingsSystemDataTable->render('core.settings_systems.index');
    }

    /**
     * Show the form for creating a new SettingsSystem.
     *
     * @return Response
     */
    public function create()
    {
        return view('core.settings_systems.create');
    }

    /**
     * Store a newly created SettingsSystem in storage.
     *
     * @param CreateSettingsSystemRequest $request
     *
     * @return Response
     */
    public function store(CreateSettingsSystemRequest $request)
    {
        $input = $request->all();

        $settingsSystem = $this->settingsSystemRepository->create($input);

        Flash::success('Settings System saved successfully.');

        return redirect(route('core.settingsSystems.index'));
    }

    /**
     * Display the specified SettingsSystem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $settingsSystem = $this->settingsSystemRepository->findWithoutFail($id);

        if (empty($settingsSystem)) {
            Flash::error('Settings System not found');

            return redirect(route('core.settingsSystems.index'));
        }

        return view('core.settings_systems.show')->with('settingsSystem', $settingsSystem);
    }

    /**
     * Show the form for editing the specified SettingsSystem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $settingsSystem = $this->settingsSystemRepository->findWithoutFail($id);

        if (empty($settingsSystem)) {
            Flash::error('Settings System not found');

            return redirect(route('core.settingsSystems.index'));
        }

        return view('core.settings_systems.edit')->with('settingsSystem', $settingsSystem);
    }

    /**
     * Update the specified SettingsSystem in storage.
     *
     * @param  int              $id
     * @param UpdateSettingsSystemRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSettingsSystemRequest $request)
    {
        $settingsSystem = $this->settingsSystemRepository->findWithoutFail($id);

        if (empty($settingsSystem)) {
            Flash::error('Settings System not found');

            return redirect(route('core.settingsSystems.index'));
        }

        $settingsSystem = $this->settingsSystemRepository->update($request->all(), $id);

        Flash::success('Settings System updated successfully.');

        return redirect(route('core.settingsSystems.index'));
    }

    /**
     * Remove the specified SettingsSystem from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $settingsSystem = $this->settingsSystemRepository->findWithoutFail($id);

        if (empty($settingsSystem)) {
            Flash::error('Settings System not found');

            return redirect(route('core.settingsSystems.index'));
        }

        $this->settingsSystemRepository->delete($id);

        Flash::success('Settings System deleted successfully.');

        return redirect(route('core.settingsSystems.index'));
    }
}
