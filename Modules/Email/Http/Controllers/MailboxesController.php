<?php

namespace App\Http\Controllers\Email;

use Modules\Email\DataTables\Email\MailboxesDataTable;
use App\Http\Requests\Email;
use App\Http\Requests\Email\CreateMailboxesRequest;
use App\Http\Requests\Email\UpdateMailboxesRequest;
use App\Repositories\Email\MailboxesRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class MailboxesController extends AppBaseController
{
    /** @var  MailboxesRepository */
    private $mailboxesRepository;

    public function __construct(MailboxesRepository $mailboxesRepo)
    {
        $this->mailboxesRepository = $mailboxesRepo;
    }

    /**
     * Display a listing of the Mailboxes.
     *
     * @param MailboxesDataTable $mailboxesDataTable
     * @return Response
     */
    public function index(MailboxesDataTable $mailboxesDataTable)
    {
        return $mailboxesDataTable->render('email.mailboxes.index');
    }

    /**
     * Show the form for creating a new Mailboxes.
     *
     * @return Response
     */
    public function create()
    {
        return view('email.mailboxes.create');
    }

    /**
     * Store a newly created Mailboxes in storage.
     *
     * @param CreateMailboxesRequest $request
     *
     * @return Response
     */
    public function store(CreateMailboxesRequest $request)
    {
        $input = $request->all();

        $mailboxes = $this->mailboxesRepository->create($input);

        Flash::success('Mailboxes saved successfully.');

        return redirect(route('email.mailboxes.index'));
    }

    /**
     * Display the specified Mailboxes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mailboxes = $this->mailboxesRepository->findWithoutFail($id);

        if (empty($mailboxes)) {
            Flash::error('Mailboxes not found');

            return redirect(route('email.mailboxes.index'));
        }

        return view('email.mailboxes.show')->with('mailboxes', $mailboxes);
    }

    /**
     * Show the form for editing the specified Mailboxes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mailboxes = $this->mailboxesRepository->findWithoutFail($id);

        if (empty($mailboxes)) {
            Flash::error('Mailboxes not found');

            return redirect(route('email.mailboxes.index'));
        }

        return view('email.mailboxes.edit')->with('mailboxes', $mailboxes);
    }

    /**
     * Update the specified Mailboxes in storage.
     *
     * @param  int              $id
     * @param UpdateMailboxesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMailboxesRequest $request)
    {
        $mailboxes = $this->mailboxesRepository->findWithoutFail($id);

        if (empty($mailboxes)) {
            Flash::error('Mailboxes not found');

            return redirect(route('email.mailboxes.index'));
        }

        $mailboxes = $this->mailboxesRepository->update($request->all(), $id);

        Flash::success('Mailboxes updated successfully.');

        return redirect(route('email.mailboxes.index'));
    }

    /**
     * Remove the specified Mailboxes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mailboxes = $this->mailboxesRepository->findWithoutFail($id);

        if (empty($mailboxes)) {
            Flash::error('Mailboxes not found');

            return redirect(route('email.mailboxes.index'));
        }

        $this->mailboxesRepository->delete($id);

        Flash::success('Mailboxes deleted successfully.');

        return redirect(route('email.mailboxes.index'));
    }
}
