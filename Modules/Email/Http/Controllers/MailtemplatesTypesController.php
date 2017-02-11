<?php

namespace App\Http\Controllers\Email;

use Modules\Email\DataTables\Email\MailtemplatesTypesDataTable;
use App\Http\Requests\Email;
use App\Http\Requests\Email\CreateMailtemplatesTypesRequest;
use App\Http\Requests\Email\UpdateMailtemplatesTypesRequest;
use App\Repositories\Email\MailtemplatesTypesRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class MailtemplatesTypesController extends AppBaseController
{
    /** @var  MailtemplatesTypesRepository */
    private $mailtemplatesTypesRepository;

    public function __construct(MailtemplatesTypesRepository $mailtemplatesTypesRepo)
    {
        $this->mailtemplatesTypesRepository = $mailtemplatesTypesRepo;
    }

    /**
     * Display a listing of the MailtemplatesTypes.
     *
     * @param MailtemplatesTypesDataTable $mailtemplatesTypesDataTable
     * @return Response
     */
    public function index(MailtemplatesTypesDataTable $mailtemplatesTypesDataTable)
    {
        return $mailtemplatesTypesDataTable->render('email.mailtemplates_types.index');
    }

    /**
     * Show the form for creating a new MailtemplatesTypes.
     *
     * @return Response
     */
    public function create()
    {
        return view('email.mailtemplates_types.create');
    }

    /**
     * Store a newly created MailtemplatesTypes in storage.
     *
     * @param CreateMailtemplatesTypesRequest $request
     *
     * @return Response
     */
    public function store(CreateMailtemplatesTypesRequest $request)
    {
        $input = $request->all();

        $mailtemplatesTypes = $this->mailtemplatesTypesRepository->create($input);

        Flash::success('Mailtemplates Types saved successfully.');

        return redirect(route('email.mailtemplatesTypes.index'));
    }

    /**
     * Display the specified MailtemplatesTypes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mailtemplatesTypes = $this->mailtemplatesTypesRepository->findWithoutFail($id);

        if (empty($mailtemplatesTypes)) {
            Flash::error('Mailtemplates Types not found');

            return redirect(route('email.mailtemplatesTypes.index'));
        }

        return view('email.mailtemplates_types.show')->with('mailtemplatesTypes', $mailtemplatesTypes);
    }

    /**
     * Show the form for editing the specified MailtemplatesTypes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mailtemplatesTypes = $this->mailtemplatesTypesRepository->findWithoutFail($id);

        if (empty($mailtemplatesTypes)) {
            Flash::error('Mailtemplates Types not found');

            return redirect(route('email.mailtemplatesTypes.index'));
        }

        return view('email.mailtemplates_types.edit')->with('mailtemplatesTypes', $mailtemplatesTypes);
    }

    /**
     * Update the specified MailtemplatesTypes in storage.
     *
     * @param  int              $id
     * @param UpdateMailtemplatesTypesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMailtemplatesTypesRequest $request)
    {
        $mailtemplatesTypes = $this->mailtemplatesTypesRepository->findWithoutFail($id);

        if (empty($mailtemplatesTypes)) {
            Flash::error('Mailtemplates Types not found');

            return redirect(route('email.mailtemplatesTypes.index'));
        }

        $mailtemplatesTypes = $this->mailtemplatesTypesRepository->update($request->all(), $id);

        Flash::success('Mailtemplates Types updated successfully.');

        return redirect(route('email.mailtemplatesTypes.index'));
    }

    /**
     * Remove the specified MailtemplatesTypes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mailtemplatesTypes = $this->mailtemplatesTypesRepository->findWithoutFail($id);

        if (empty($mailtemplatesTypes)) {
            Flash::error('Mailtemplates Types not found');

            return redirect(route('email.mailtemplatesTypes.index'));
        }

        $this->mailtemplatesTypesRepository->delete($id);

        Flash::success('Mailtemplates Types deleted successfully.');

        return redirect(route('email.mailtemplatesTypes.index'));
    }
}
