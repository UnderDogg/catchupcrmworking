<?php

namespace Modules\Core\Http\Controllers;

use Modules\Core\DataTables\Core\SettingsEmailDataTable;
use App\Http\Requests\Core;
use App\Http\Requests\Core\CreateSettingsEmailRequest;
use App\Http\Requests\Core\UpdateSettingsEmailRequest;
use App\Repositories\Core\SettingsEmailRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class SettingsEmailController extends AppBaseController
{
    /** @var  SettingsEmailRepository */
    private $settingsEmailRepository;

    public function __construct(SettingsEmailRepository $settingsEmailRepo)
    {
        $this->settingsEmailRepository = $settingsEmailRepo;
    }

    /**
     * Display a listing of the SettingsEmail.
     *
     * @param SettingsEmailDataTable $settingsEmailDataTable
     * @return Response
     */
    public function index(SettingsEmailDataTable $settingsEmailDataTable)
    {
        return $settingsEmailDataTable->render('core.settings_emails.index');
    }

    /**
     * Show the form for creating a new SettingsEmail.
     *
     * @return Response
     */
    public function create()
    {
        return view('core.settings_emails.create');
    }

    /**
     * Store a newly created SettingsEmail in storage.
     *
     * @param CreateSettingsEmailRequest $request
     *
     * @return Response
     */
    public function store(CreateSettingsEmailRequest $request)
    {
        $input = $request->all();

        $settingsEmail = $this->settingsEmailRepository->create($input);

        Flash::success('Settings Email saved successfully.');

        return redirect(route('core.settingsEmails.index'));
    }

    /**
     * Display the specified SettingsEmail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $settingsEmail = $this->settingsEmailRepository->findWithoutFail($id);

        if (empty($settingsEmail)) {
            Flash::error('Settings Email not found');

            return redirect(route('core.settingsEmails.index'));
        }

        return view('core.settings_emails.show')->with('settingsEmail', $settingsEmail);
    }

    /**
     * Show the form for editing the specified SettingsEmail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $settingsEmail = $this->settingsEmailRepository->findWithoutFail($id);

        if (empty($settingsEmail)) {
            Flash::error('Settings Email not found');

            return redirect(route('core.settingsEmails.index'));
        }

        return view('core.settings_emails.edit')->with('settingsEmail', $settingsEmail);
    }

    /**
     * Update the specified SettingsEmail in storage.
     *
     * @param  int              $id
     * @param UpdateSettingsEmailRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSettingsEmailRequest $request)
    {
        $settingsEmail = $this->settingsEmailRepository->findWithoutFail($id);

        if (empty($settingsEmail)) {
            Flash::error('Settings Email not found');

            return redirect(route('core.settingsEmails.index'));
        }

        $settingsEmail = $this->settingsEmailRepository->update($request->all(), $id);

        Flash::success('Settings Email updated successfully.');

        return redirect(route('core.settingsEmails.index'));
    }

    /**
     * Remove the specified SettingsEmail from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $settingsEmail = $this->settingsEmailRepository->findWithoutFail($id);

        if (empty($settingsEmail)) {
            Flash::error('Settings Email not found');

            return redirect(route('core.settingsEmails.index'));
        }

        $this->settingsEmailRepository->delete($id);

        Flash::success('Settings Email deleted successfully.');

        return redirect(route('core.settingsEmails.index'));
    }
}
