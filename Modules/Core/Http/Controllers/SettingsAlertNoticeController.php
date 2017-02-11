<?php

namespace Modules\Core\Http\Controllers;

use Modules\Core\DataTables\Core\SettingsAlertNoticeDataTable;
use App\Http\Requests\Core;
use App\Http\Requests\Core\CreateSettingsAlertNoticeRequest;
use App\Http\Requests\Core\UpdateSettingsAlertNoticeRequest;
use App\Repositories\Core\SettingsAlertNoticeRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class SettingsAlertNoticeController extends AppBaseController
{
    /** @var  SettingsAlertNoticeRepository */
    private $settingsAlertNoticeRepository;

    public function __construct(SettingsAlertNoticeRepository $settingsAlertNoticeRepo)
    {
        $this->settingsAlertNoticeRepository = $settingsAlertNoticeRepo;
    }

    /**
     * Display a listing of the SettingsAlertNotice.
     *
     * @param SettingsAlertNoticeDataTable $settingsAlertNoticeDataTable
     * @return Response
     */
    public function index(SettingsAlertNoticeDataTable $settingsAlertNoticeDataTable)
    {
        return $settingsAlertNoticeDataTable->render('core.settings_alert_notices.index');
    }

    /**
     * Show the form for creating a new SettingsAlertNotice.
     *
     * @return Response
     */
    public function create()
    {
        return view('core.settings_alert_notices.create');
    }

    /**
     * Store a newly created SettingsAlertNotice in storage.
     *
     * @param CreateSettingsAlertNoticeRequest $request
     *
     * @return Response
     */
    public function store(CreateSettingsAlertNoticeRequest $request)
    {
        $input = $request->all();

        $settingsAlertNotice = $this->settingsAlertNoticeRepository->create($input);

        Flash::success('Settings Alert Notice saved successfully.');

        return redirect(route('core.settingsAlertNotices.index'));
    }

    /**
     * Display the specified SettingsAlertNotice.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $settingsAlertNotice = $this->settingsAlertNoticeRepository->findWithoutFail($id);

        if (empty($settingsAlertNotice)) {
            Flash::error('Settings Alert Notice not found');

            return redirect(route('core.settingsAlertNotices.index'));
        }

        return view('core.settings_alert_notices.show')->with('settingsAlertNotice', $settingsAlertNotice);
    }

    /**
     * Show the form for editing the specified SettingsAlertNotice.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $settingsAlertNotice = $this->settingsAlertNoticeRepository->findWithoutFail($id);

        if (empty($settingsAlertNotice)) {
            Flash::error('Settings Alert Notice not found');

            return redirect(route('core.settingsAlertNotices.index'));
        }

        return view('core.settings_alert_notices.edit')->with('settingsAlertNotice', $settingsAlertNotice);
    }

    /**
     * Update the specified SettingsAlertNotice in storage.
     *
     * @param  int              $id
     * @param UpdateSettingsAlertNoticeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSettingsAlertNoticeRequest $request)
    {
        $settingsAlertNotice = $this->settingsAlertNoticeRepository->findWithoutFail($id);

        if (empty($settingsAlertNotice)) {
            Flash::error('Settings Alert Notice not found');

            return redirect(route('core.settingsAlertNotices.index'));
        }

        $settingsAlertNotice = $this->settingsAlertNoticeRepository->update($request->all(), $id);

        Flash::success('Settings Alert Notice updated successfully.');

        return redirect(route('core.settingsAlertNotices.index'));
    }

    /**
     * Remove the specified SettingsAlertNotice from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $settingsAlertNotice = $this->settingsAlertNoticeRepository->findWithoutFail($id);

        if (empty($settingsAlertNotice)) {
            Flash::error('Settings Alert Notice not found');

            return redirect(route('core.settingsAlertNotices.index'));
        }

        $this->settingsAlertNoticeRepository->delete($id);

        Flash::success('Settings Alert Notice deleted successfully.');

        return redirect(route('core.settingsAlertNotices.index'));
    }
}
