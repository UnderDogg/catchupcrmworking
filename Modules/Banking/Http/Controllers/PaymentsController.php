<?php

namespace App\Http\Controllers\Banking;

use App\DataTables\Banking\PaymentsDataTable;
use App\Http\Requests\Banking;
use App\Http\Requests\Banking\CreatePaymentsRequest;
use App\Http\Requests\Banking\UpdatePaymentsRequest;
use App\Repositories\Banking\PaymentsRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PaymentsController extends AppBaseController
{
    /** @var  PaymentsRepository */
    private $paymentsRepository;

    public function __construct(PaymentsRepository $paymentsRepo)
    {
        $this->paymentsRepository = $paymentsRepo;
    }

    /**
     * Display a listing of the Payments.
     *
     * @param PaymentsDataTable $paymentsDataTable
     * @return Response
     */
    public function index(PaymentsDataTable $paymentsDataTable)
    {
        return $paymentsDataTable->render('banking.payments.index');
    }

    /**
     * Show the form for creating a new Payments.
     *
     * @return Response
     */
    public function create()
    {
        return view('banking.payments.create');
    }

    /**
     * Store a newly created Payments in storage.
     *
     * @param CreatePaymentsRequest $request
     *
     * @return Response
     */
    public function store(CreatePaymentsRequest $request)
    {
        $input = $request->all();

        $payments = $this->paymentsRepository->create($input);

        Flash::success('Payments saved successfully.');

        return redirect(route('banking.payments.index'));
    }

    /**
     * Display the specified Payments.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $payments = $this->paymentsRepository->findWithoutFail($id);

        if (empty($payments)) {
            Flash::error('Payments not found');

            return redirect(route('banking.payments.index'));
        }

        return view('banking.payments.show')->with('payments', $payments);
    }

    /**
     * Show the form for editing the specified Payments.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $payments = $this->paymentsRepository->findWithoutFail($id);

        if (empty($payments)) {
            Flash::error('Payments not found');

            return redirect(route('banking.payments.index'));
        }

        return view('banking.payments.edit')->with('payments', $payments);
    }

    /**
     * Update the specified Payments in storage.
     *
     * @param  int              $id
     * @param UpdatePaymentsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePaymentsRequest $request)
    {
        $payments = $this->paymentsRepository->findWithoutFail($id);

        if (empty($payments)) {
            Flash::error('Payments not found');

            return redirect(route('banking.payments.index'));
        }

        $payments = $this->paymentsRepository->update($request->all(), $id);

        Flash::success('Payments updated successfully.');

        return redirect(route('banking.payments.index'));
    }

    /**
     * Remove the specified Payments from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $payments = $this->paymentsRepository->findWithoutFail($id);

        if (empty($payments)) {
            Flash::error('Payments not found');

            return redirect(route('banking.payments.index'));
        }

        $this->paymentsRepository->delete($id);

        Flash::success('Payments deleted successfully.');

        return redirect(route('banking.payments.index'));
    }
}
