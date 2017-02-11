<?php

namespace Modules\Invoices\Http\Controllers;

use Modules\Invoices\DataTables\Invoices\InvoicesDesignsDataTable;
use App\Http\Requests\Invoices;
use App\Http\Requests\Invoices\CreateInvoicesDesignsRequest;
use App\Http\Requests\Invoices\UpdateInvoicesDesignsRequest;
use Modules\Invoices\Repositories\InvoicesDesignsRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class InvoicesDesignsController extends AppBaseController
{
    /** @var  InvoicesDesignsRepository */
    private $invoicesDesignsRepository;

    public function __construct(InvoicesDesignsRepository $invoicesDesignsRepo)
    {
        $this->invoicesDesignsRepository = $invoicesDesignsRepo;
    }

    /**
     * Display a listing of the InvoicesDesigns.
     *
     * @param InvoicesDesignsDataTable $invoicesDesignsDataTable
     * @return Response
     */
    public function index(InvoicesDesignsDataTable $invoicesDesignsDataTable)
    {
        return $invoicesDesignsDataTable->render('invoices.invoices_designs.index');
    }

    /**
     * Show the form for creating a new InvoicesDesigns.
     *
     * @return Response
     */
    public function create()
    {
        return view('invoices.invoices_designs.create');
    }

    /**
     * Store a newly created InvoicesDesigns in storage.
     *
     * @param CreateInvoicesDesignsRequest $request
     *
     * @return Response
     */
    public function store(CreateInvoicesDesignsRequest $request)
    {
        $input = $request->all();

        $invoicesDesigns = $this->invoicesDesignsRepository->create($input);

        Flash::success('Invoices Designs saved successfully.');

        return redirect(route('invoices.invoicesDesigns.index'));
    }

    /**
     * Display the specified InvoicesDesigns.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $invoicesDesigns = $this->invoicesDesignsRepository->findWithoutFail($id);

        if (empty($invoicesDesigns)) {
            Flash::error('Invoices Designs not found');

            return redirect(route('invoices.invoicesDesigns.index'));
        }

        return view('invoices.invoices_designs.show')->with('invoicesDesigns', $invoicesDesigns);
    }

    /**
     * Show the form for editing the specified InvoicesDesigns.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $invoicesDesigns = $this->invoicesDesignsRepository->findWithoutFail($id);

        if (empty($invoicesDesigns)) {
            Flash::error('Invoices Designs not found');

            return redirect(route('invoices.invoicesDesigns.index'));
        }

        return view('invoices.invoices_designs.edit')->with('invoicesDesigns', $invoicesDesigns);
    }

    /**
     * Update the specified InvoicesDesigns in storage.
     *
     * @param  int              $id
     * @param UpdateInvoicesDesignsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInvoicesDesignsRequest $request)
    {
        $invoicesDesigns = $this->invoicesDesignsRepository->findWithoutFail($id);

        if (empty($invoicesDesigns)) {
            Flash::error('Invoices Designs not found');

            return redirect(route('invoices.invoicesDesigns.index'));
        }

        $invoicesDesigns = $this->invoicesDesignsRepository->update($request->all(), $id);

        Flash::success('Invoices Designs updated successfully.');

        return redirect(route('invoices.invoicesDesigns.index'));
    }

    /**
     * Remove the specified InvoicesDesigns from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $invoicesDesigns = $this->invoicesDesignsRepository->findWithoutFail($id);

        if (empty($invoicesDesigns)) {
            Flash::error('Invoices Designs not found');

            return redirect(route('invoices.invoicesDesigns.index'));
        }

        $this->invoicesDesignsRepository->delete($id);

        Flash::success('Invoices Designs deleted successfully.');

        return redirect(route('invoices.invoicesDesigns.index'));
    }
}
