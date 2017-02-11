<?php

namespace App\Http\Controllers\Email;

use Modules\Email\DataTables\Email\MailtemplatesSetsDataTable;
use App\Http\Requests\Email;
use App\Http\Requests\Email\CreateMailtemplatesSetsRequest;
use App\Http\Requests\Email\UpdateMailtemplatesSetsRequest;
use App\Repositories\Email\MailtemplatesSetsRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class MailtemplatesSetsController extends AppBaseController
{
    /** @var  MailtemplatesSetsRepository */
    private $mailtemplatesSetsRepository;

    public function __construct(MailtemplatesSetsRepository $mailtemplatesSetsRepo)
    {
        $this->mailtemplatesSetsRepository = $mailtemplatesSetsRepo;
    }

    /**
     * Display a listing of the MailtemplatesSets.
     *
     * @param MailtemplatesSetsDataTable $mailtemplatesSetsDataTable
     * @return Response
     */
    public function index(MailtemplatesSetsDataTable $mailtemplatesSetsDataTable)
    {
        return $mailtemplatesSetsDataTable->render('email.mailtemplates_sets.index');
    }

    /**
     * Show the form for creating a new MailtemplatesSets.
     *
     * @return Response
     */
    public function create()
    {
        return view('email.mailtemplates_sets.create');
    }

    /**
     * Store a newly created MailtemplatesSets in storage.
     *
     * @param CreateMailtemplatesSetsRequest $request
     *
     * @return Response
     */
    public function store(CreateMailtemplatesSetsRequest $request)
    {
        $input = $request->all();

        $mailtemplatesSets = $this->mailtemplatesSetsRepository->create($input);

        Flash::success('Mailtemplates Sets saved successfully.');

        return redirect(route('email.mailtemplatesSets.index'));
    }

    /**
     * Display the specified MailtemplatesSets.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mailtemplatesSets = $this->mailtemplatesSetsRepository->findWithoutFail($id);

        if (empty($mailtemplatesSets)) {
            Flash::error('Mailtemplates Sets not found');

            return redirect(route('email.mailtemplatesSets.index'));
        }

        return view('email.mailtemplates_sets.show')->with('mailtemplatesSets', $mailtemplatesSets);
    }

    /**
     * Show the form for editing the specified MailtemplatesSets.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mailtemplatesSets = $this->mailtemplatesSetsRepository->findWithoutFail($id);

        if (empty($mailtemplatesSets)) {
            Flash::error('Mailtemplates Sets not found');

            return redirect(route('email.mailtemplatesSets.index'));
        }

        return view('email.mailtemplates_sets.edit')->with('mailtemplatesSets', $mailtemplatesSets);
    }

    /**
     * Update the specified MailtemplatesSets in storage.
     *
     * @param  int              $id
     * @param UpdateMailtemplatesSetsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMailtemplatesSetsRequest $request)
    {
        $mailtemplatesSets = $this->mailtemplatesSetsRepository->findWithoutFail($id);

        if (empty($mailtemplatesSets)) {
            Flash::error('Mailtemplates Sets not found');

            return redirect(route('email.mailtemplatesSets.index'));
        }

        $mailtemplatesSets = $this->mailtemplatesSetsRepository->update($request->all(), $id);

        Flash::success('Mailtemplates Sets updated successfully.');

        return redirect(route('email.mailtemplatesSets.index'));
    }

    /**
     * Remove the specified MailtemplatesSets from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mailtemplatesSets = $this->mailtemplatesSetsRepository->findWithoutFail($id);

        if (empty($mailtemplatesSets)) {
            Flash::error('Mailtemplates Sets not found');

            return redirect(route('email.mailtemplatesSets.index'));
        }

        $this->mailtemplatesSetsRepository->delete($id);

        Flash::success('Mailtemplates Sets deleted successfully.');

        return redirect(route('email.mailtemplatesSets.index'));
    }
}
