<?php

namespace App\Http\Controllers\Email;

use Modules\Email\DataTables\Email\MailTemplatesDataTable;
use App\Http\Requests\Email;
use App\Http\Requests\Email\CreateMailTemplatesRequest;
use App\Http\Requests\Email\UpdateMailTemplatesRequest;
use App\Repositories\Email\MailTemplatesRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class MailTemplatesController extends AppBaseController
{
    /** @var  MailTemplatesRepository */
    private $mailTemplatesRepository;

    public function __construct(MailTemplatesRepository $mailTemplatesRepo)
    {
        $this->mailTemplatesRepository = $mailTemplatesRepo;
    }

    /**
     * Display a listing of the MailTemplates.
     *
     * @param MailTemplatesDataTable $mailTemplatesDataTable
     * @return Response
     */
    public function index(MailTemplatesDataTable $mailTemplatesDataTable)
    {
        return $mailTemplatesDataTable->render('email.mail_templates.index');
    }

    /**
     * Show the form for creating a new MailTemplates.
     *
     * @return Response
     */
    public function create()
    {
        return view('email.mail_templates.create');
    }

    /**
     * Store a newly created MailTemplates in storage.
     *
     * @param CreateMailTemplatesRequest $request
     *
     * @return Response
     */
    public function store(CreateMailTemplatesRequest $request)
    {
        $input = $request->all();

        $mailTemplates = $this->mailTemplatesRepository->create($input);

        Flash::success('Mail Templates saved successfully.');

        return redirect(route('email.mailTemplates.index'));
    }

    /**
     * Display the specified MailTemplates.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mailTemplates = $this->mailTemplatesRepository->findWithoutFail($id);

        if (empty($mailTemplates)) {
            Flash::error('Mail Templates not found');

            return redirect(route('email.mailTemplates.index'));
        }

        return view('email.mail_templates.show')->with('mailTemplates', $mailTemplates);
    }

    /**
     * Show the form for editing the specified MailTemplates.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mailTemplates = $this->mailTemplatesRepository->findWithoutFail($id);

        if (empty($mailTemplates)) {
            Flash::error('Mail Templates not found');

            return redirect(route('email.mailTemplates.index'));
        }

        return view('email.mail_templates.edit')->with('mailTemplates', $mailTemplates);
    }

    /**
     * Update the specified MailTemplates in storage.
     *
     * @param  int              $id
     * @param UpdateMailTemplatesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMailTemplatesRequest $request)
    {
        $mailTemplates = $this->mailTemplatesRepository->findWithoutFail($id);

        if (empty($mailTemplates)) {
            Flash::error('Mail Templates not found');

            return redirect(route('email.mailTemplates.index'));
        }

        $mailTemplates = $this->mailTemplatesRepository->update($request->all(), $id);

        Flash::success('Mail Templates updated successfully.');

        return redirect(route('email.mailTemplates.index'));
    }

    /**
     * Remove the specified MailTemplates from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mailTemplates = $this->mailTemplatesRepository->findWithoutFail($id);

        if (empty($mailTemplates)) {
            Flash::error('Mail Templates not found');

            return redirect(route('email.mailTemplates.index'));
        }

        $this->mailTemplatesRepository->delete($id);

        Flash::success('Mail Templates deleted successfully.');

        return redirect(route('email.mailTemplates.index'));
    }
}
