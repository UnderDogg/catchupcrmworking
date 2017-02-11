<?php

namespace Modules\Invoices\Http\Controllers;

use Modules\Invoices\DataTables\Invoices\InvoiceItemsDataTable;
use App\Http\Requests\Invoices;
use App\Http\Requests\Invoices\CreateInvoiceItemsRequest;
use App\Http\Requests\Invoices\UpdateInvoiceItemsRequest;
use Modules\Invoices\Repositories\InvoiceItemsRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class InvoiceItemsController extends AppBaseController
{
    /** @var  InvoiceItemsRepository */
    private $invoiceItemsRepository;

    public function __construct(InvoiceItemsRepository $invoiceItemsRepo)
    {
        $this->invoiceItemsRepository = $invoiceItemsRepo;
    }

    /**
     * Display a listing of the InvoiceItems.
     *
     * @param InvoiceItemsDataTable $invoiceItemsDataTable
     * @return Response
     */
    public function index(InvoiceItemsDataTable $invoiceItemsDataTable)
    {
        return $invoiceItemsDataTable->render('invoices.invoice_items.index');
    }

    /**
     * Show the form for creating a new InvoiceItems.
     *
     * @return Response
     */
    public function create()
    {
        return view('invoices.invoice_items.create');
    }

    /**
     * Store a newly created InvoiceItems in storage.
     *
     * @param CreateInvoiceItemsRequest $request
     *
     * @return Response
     */
    public function store(CreateInvoiceItemsRequest $request)
    {
        $input = $request->all();

        $invoiceItems = $this->invoiceItemsRepository->create($input);

        Flash::success('Invoice Items saved successfully.');

        return redirect(route('invoices.invoiceItems.index'));
    }

    /**
     * Display the specified InvoiceItems.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $invoiceItems = $this->invoiceItemsRepository->findWithoutFail($id);

        if (empty($invoiceItems)) {
            Flash::error('Invoice Items not found');

            return redirect(route('invoices.invoiceItems.index'));
        }

        return view('invoices.invoice_items.show')->with('invoiceItems', $invoiceItems);
    }

    /**
     * Show the form for editing the specified InvoiceItems.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $invoiceItems = $this->invoiceItemsRepository->findWithoutFail($id);

        if (empty($invoiceItems)) {
            Flash::error('Invoice Items not found');

            return redirect(route('invoices.invoiceItems.index'));
        }

        return view('invoices.invoice_items.edit')->with('invoiceItems', $invoiceItems);
    }

    /**
     * Update the specified InvoiceItems in storage.
     *
     * @param  int              $id
     * @param UpdateInvoiceItemsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInvoiceItemsRequest $request)
    {
        $invoiceItems = $this->invoiceItemsRepository->findWithoutFail($id);

        if (empty($invoiceItems)) {
            Flash::error('Invoice Items not found');

            return redirect(route('invoices.invoiceItems.index'));
        }

        $invoiceItems = $this->invoiceItemsRepository->update($request->all(), $id);

        Flash::success('Invoice Items updated successfully.');

        return redirect(route('invoices.invoiceItems.index'));
    }

    /**
     * Remove the specified InvoiceItems from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $invoiceItems = $this->invoiceItemsRepository->findWithoutFail($id);

        if (empty($invoiceItems)) {
            Flash::error('Invoice Items not found');

            return redirect(route('invoices.invoiceItems.index'));
        }

        $this->invoiceItemsRepository->delete($id);

        Flash::success('Invoice Items deleted successfully.');

        return redirect(route('invoices.invoiceItems.index'));
    }
}
