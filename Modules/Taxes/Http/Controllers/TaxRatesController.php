<?php

namespace Modules\Taxes\Http\Controllers;

use Modules\Taxes\DataTables\Taxes\TaxRatesDataTable;
use App\Http\Requests\Taxes;
use App\Http\Requests\Taxes\CreateTaxRatesRequest;
use App\Http\Requests\Taxes\UpdateTaxRatesRequest;
use App\Repositories\Taxes\TaxRatesRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class TaxRatesController extends AppBaseController
{
    /** @var  TaxRatesRepository */
    private $taxRatesRepository;

    public function __construct(TaxRatesRepository $taxRatesRepo)
    {
        $this->taxRatesRepository = $taxRatesRepo;
    }

    /**
     * Display a listing of the TaxRates.
     *
     * @param TaxRatesDataTable $taxRatesDataTable
     * @return Response
     */
    public function index(TaxRatesDataTable $taxRatesDataTable)
    {
        return $taxRatesDataTable->render('taxes.tax_rates.index');
    }

    /**
     * Show the form for creating a new TaxRates.
     *
     * @return Response
     */
    public function create()
    {
        return view('taxes.tax_rates.create');
    }

    /**
     * Store a newly created TaxRates in storage.
     *
     * @param CreateTaxRatesRequest $request
     *
     * @return Response
     */
    public function store(CreateTaxRatesRequest $request)
    {
        $input = $request->all();

        $taxRates = $this->taxRatesRepository->create($input);

        Flash::success('Tax Rates saved successfully.');

        return redirect(route('taxes.taxRates.index'));
    }

    /**
     * Display the specified TaxRates.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $taxRates = $this->taxRatesRepository->findWithoutFail($id);

        if (empty($taxRates)) {
            Flash::error('Tax Rates not found');

            return redirect(route('taxes.taxRates.index'));
        }

        return view('taxes.tax_rates.show')->with('taxRates', $taxRates);
    }

    /**
     * Show the form for editing the specified TaxRates.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $taxRates = $this->taxRatesRepository->findWithoutFail($id);

        if (empty($taxRates)) {
            Flash::error('Tax Rates not found');

            return redirect(route('taxes.taxRates.index'));
        }

        return view('taxes.tax_rates.edit')->with('taxRates', $taxRates);
    }

    /**
     * Update the specified TaxRates in storage.
     *
     * @param  int              $id
     * @param UpdateTaxRatesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTaxRatesRequest $request)
    {
        $taxRates = $this->taxRatesRepository->findWithoutFail($id);

        if (empty($taxRates)) {
            Flash::error('Tax Rates not found');

            return redirect(route('taxes.taxRates.index'));
        }

        $taxRates = $this->taxRatesRepository->update($request->all(), $id);

        Flash::success('Tax Rates updated successfully.');

        return redirect(route('taxes.taxRates.index'));
    }

    /**
     * Remove the specified TaxRates from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $taxRates = $this->taxRatesRepository->findWithoutFail($id);

        if (empty($taxRates)) {
            Flash::error('Tax Rates not found');

            return redirect(route('taxes.taxRates.index'));
        }

        $this->taxRatesRepository->delete($id);

        Flash::success('Tax Rates deleted successfully.');

        return redirect(route('taxes.taxRates.index'));
    }
}
