<?php

namespace Modules\Invoices\Http\Controllers;

use Modules\Invoices\DataTables\Invoices\InvoicesDataTable;
use App\Http\Requests\Invoices;
use App\Http\Requests\Invoices\CreateInvoicesRequest;
use App\Http\Requests\Invoices\UpdateInvoicesRequest;
use Modules\Invoices\Repositories\InvoicesRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class InvoicesController extends AppBaseController
{
    /** @var  InvoicesRepository */
    private $invoicesRepository;

    public function __construct(InvoicesRepository $invoicesRepo)
    {
        $this->invoicesRepository = $invoicesRepo;
    }

    /**
     * Display a listing of the Invoices.
     *
     * @param InvoicesDataTable $invoicesDataTable
     * @return Response
     */
    public function index(InvoicesDataTable $invoicesDataTable)
    {
        return $invoicesDataTable->render('invoices.invoices.index');
    }

    /**
     * Show the form for creating a new Invoices.
     *
     * @return Response
     */
    public function create()
    {
        return view('invoices.invoices.create');
    }

    /**
     * Store a newly created Invoices in storage.
     *
     * @param CreateInvoicesRequest $request
     *
     * @return Response
     */
    public function store(CreateInvoicesRequest $request)
    {
        $input = $request->all();

        $invoices = $this->invoicesRepository->create($input);

        Flash::success('Invoices saved successfully.');

        return redirect(route('invoices.invoices.index'));
    }

    /**
     * Display the specified Invoices.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $invoices = $this->invoicesRepository->findWithoutFail($id);

        if (empty($invoices)) {
            Flash::error('Invoices not found');

            return redirect(route('invoices.invoices.index'));
        }

        return view('invoices.invoices.show')->with('invoices', $invoices);
    }

    /**
     * Show the form for editing the specified Invoices.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $invoices = $this->invoicesRepository->findWithoutFail($id);

        if (empty($invoices)) {
            Flash::error('Invoices not found');

            return redirect(route('invoices.invoices.index'));
        }

        return view('invoices.invoices.edit')->with('invoices', $invoices);
    }

    /**
     * Update the specified Invoices in storage.
     *
     * @param  int              $id
     * @param UpdateInvoicesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInvoicesRequest $request)
    {
        $invoices = $this->invoicesRepository->findWithoutFail($id);

        if (empty($invoices)) {
            Flash::error('Invoices not found');

            return redirect(route('invoices.invoices.index'));
        }

        $invoices = $this->invoicesRepository->update($request->all(), $id);

        Flash::success('Invoices updated successfully.');

        return redirect(route('invoices.invoices.index'));
    }

    /**
     * Remove the specified Invoices from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $invoices = $this->invoicesRepository->findWithoutFail($id);

        if (empty($invoices)) {
            Flash::error('Invoices not found');

            return redirect(route('invoices.invoices.index'));
        }

        $this->invoicesRepository->delete($id);

        Flash::success('Invoices deleted successfully.');

        return redirect(route('invoices.invoices.index'));
    }
}
