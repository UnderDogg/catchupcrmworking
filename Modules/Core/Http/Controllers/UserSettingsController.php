<?php

namespace Modules\Core\Http\Controllers;

use Modules\Core\DataTables\Core\UserSettingsDataTable;
use App\Http\Requests\Core;
use App\Http\Requests\Core\CreateUserSettingsRequest;
use App\Http\Requests\Core\UpdateUserSettingsRequest;
use App\Repositories\Core\UserSettingsRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class UserSettingsController extends AppBaseController
{
    /** @var  UserSettingsRepository */
    private $userSettingsRepository;

    public function __construct(UserSettingsRepository $userSettingsRepo)
    {
        $this->userSettingsRepository = $userSettingsRepo;
    }

    /**
     * Display a listing of the UserSettings.
     *
     * @param UserSettingsDataTable $userSettingsDataTable
     * @return Response
     */
    public function index(UserSettingsDataTable $userSettingsDataTable)
    {
        return $userSettingsDataTable->render('core.user_settings.index');
    }

    /**
     * Show the form for creating a new UserSettings.
     *
     * @return Response
     */
    public function create()
    {
        return view('core.user_settings.create');
    }

    /**
     * Store a newly created UserSettings in storage.
     *
     * @param CreateUserSettingsRequest $request
     *
     * @return Response
     */
    public function store(CreateUserSettingsRequest $request)
    {
        $input = $request->all();

        $userSettings = $this->userSettingsRepository->create($input);

        Flash::success('User Settings saved successfully.');

        return redirect(route('core.userSettings.index'));
    }

    /**
     * Display the specified UserSettings.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userSettings = $this->userSettingsRepository->findWithoutFail($id);

        if (empty($userSettings)) {
            Flash::error('User Settings not found');

            return redirect(route('core.userSettings.index'));
        }

        return view('core.user_settings.show')->with('userSettings', $userSettings);
    }

    /**
     * Show the form for editing the specified UserSettings.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userSettings = $this->userSettingsRepository->findWithoutFail($id);

        if (empty($userSettings)) {
            Flash::error('User Settings not found');

            return redirect(route('core.userSettings.index'));
        }

        return view('core.user_settings.edit')->with('userSettings', $userSettings);
    }

    /**
     * Update the specified UserSettings in storage.
     *
     * @param  int              $id
     * @param UpdateUserSettingsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserSettingsRequest $request)
    {
        $userSettings = $this->userSettingsRepository->findWithoutFail($id);

        if (empty($userSettings)) {
            Flash::error('User Settings not found');

            return redirect(route('core.userSettings.index'));
        }

        $userSettings = $this->userSettingsRepository->update($request->all(), $id);

        Flash::success('User Settings updated successfully.');

        return redirect(route('core.userSettings.index'));
    }

    /**
     * Remove the specified UserSettings from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userSettings = $this->userSettingsRepository->findWithoutFail($id);

        if (empty($userSettings)) {
            Flash::error('User Settings not found');

            return redirect(route('core.userSettings.index'));
        }

        $this->userSettingsRepository->delete($id);

        Flash::success('User Settings deleted successfully.');

        return redirect(route('core.userSettings.index'));
    }
}
