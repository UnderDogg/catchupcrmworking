<?php

namespace Modules\Banking\Http\Controllers;

use Modules\Banking\DataTables\Banking\PaymentsDataTable;
use App\Http\Requests\Banking;
use App\Http\Requests\Banking\CreatePaymentsRequest;
use App\Http\Requests\Banking\UpdatePaymentsRequest;
use App\Repositories\Banking\PaymentsRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class BanksController extends AppBaseController
{
    /** @var  BanksRepository */
    private $banksRepository;

    public function __construct(BanksRepository $banksRepo)
    {
        $this->banksRepository = $banksRepo;
    }

    /**
     * Display a listing of the Banks.
     *
     * @param BanksDataTable $banksDataTable
     * @return Response
     */
    public function index(BanksDataTable $banksDataTable)
    {
        return $banksDataTable->render('banking.banks.index');
    }

    /**
     * Show the form for creating a new Banks.
     *
     * @return Response
     */
    public function create()
    {
        return view('banking.banks.create');
    }

    /**
     * Store a newly created Banks in storage.
     *
     * @param CreateBanksRequest $request
     *
     * @return Response
     */
    public function store(CreateBanksRequest $request)
    {
        $input = $request->all();

        $banks = $this->banksRepository->create($input);

        Flash::success('Banks saved successfully.');

        return redirect(route('banking.banks.index'));
    }

    /**
     * Display the specified Banks.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $banks = $this->banksRepository->findWithoutFail($id);

        if (empty($banks)) {
            Flash::error('Banks not found');

            return redirect(route('banking.banks.index'));
        }

        return view('banking.banks.show')->with('banks', $banks);
    }

    /**
     * Show the form for editing the specified Banks.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $banks = $this->banksRepository->findWithoutFail($id);

        if (empty($banks)) {
            Flash::error('Banks not found');

            return redirect(route('banking.banks.index'));
        }

        return view('banking.banks.edit')->with('banks', $banks);
    }

    /**
     * Update the specified Banks in storage.
     *
     * @param  int              $id
     * @param UpdateBanksRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBanksRequest $request)
    {
        $banks = $this->banksRepository->findWithoutFail($id);

        if (empty($banks)) {
            Flash::error('Banks not found');

            return redirect(route('banking.banks.index'));
        }

        $banks = $this->banksRepository->update($request->all(), $id);

        Flash::success('Banks updated successfully.');

        return redirect(route('banking.banks.index'));
    }

    /**
     * Remove the specified Banks from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $banks = $this->banksRepository->findWithoutFail($id);

        if (empty($banks)) {
            Flash::error('Banks not found');

            return redirect(route('banking.banks.index'));
        }

        $this->banksRepository->delete($id);

        Flash::success('Banks deleted successfully.');

        return redirect(route('banking.banks.index'));
    }
}
