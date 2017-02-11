<?php

namespace Modules\Core\Http\Controllers;

use Modules\Core\DataTables\Core\CompaniesDataTable;
use App\Http\Requests\Core;
use App\Http\Requests\Core\CreateCompaniesRequest;
use App\Http\Requests\Core\UpdateCompaniesRequest;
use App\Repositories\Core\CompaniesRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class CompaniesController extends AppBaseController
{
    /** @var  CompaniesRepository */
    private $companiesRepository;

    public function __construct(CompaniesRepository $companiesRepo)
    {
        $this->companiesRepository = $companiesRepo;
    }

    /**
     * Display a listing of the Companies.
     *
     * @param CompaniesDataTable $companiesDataTable
     * @return Response
     */
    public function index(CompaniesDataTable $companiesDataTable)
    {
        return $companiesDataTable->render('core.companies.index');
    }

    /**
     * Show the form for creating a new Companies.
     *
     * @return Response
     */
    public function create()
    {
        return view('core.companies.create');
    }

    /**
     * Store a newly created Companies in storage.
     *
     * @param CreateCompaniesRequest $request
     *
     * @return Response
     */
    public function store(CreateCompaniesRequest $request)
    {
        $input = $request->all();

        $companies = $this->companiesRepository->create($input);

        Flash::success('Companies saved successfully.');

        return redirect(route('core.companies.index'));
    }

    /**
     * Display the specified Companies.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $companies = $this->companiesRepository->findWithoutFail($id);

        if (empty($companies)) {
            Flash::error('Companies not found');

            return redirect(route('core.companies.index'));
        }

        return view('core.companies.show')->with('companies', $companies);
    }

    /**
     * Show the form for editing the specified Companies.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $companies = $this->companiesRepository->findWithoutFail($id);

        if (empty($companies)) {
            Flash::error('Companies not found');

            return redirect(route('core.companies.index'));
        }

        return view('core.companies.edit')->with('companies', $companies);
    }

    /**
     * Update the specified Companies in storage.
     *
     * @param  int              $id
     * @param UpdateCompaniesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCompaniesRequest $request)
    {
        $companies = $this->companiesRepository->findWithoutFail($id);

        if (empty($companies)) {
            Flash::error('Companies not found');

            return redirect(route('core.companies.index'));
        }

        $companies = $this->companiesRepository->update($request->all(), $id);

        Flash::success('Companies updated successfully.');

        return redirect(route('core.companies.index'));
    }

    /**
     * Remove the specified Companies from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $companies = $this->companiesRepository->findWithoutFail($id);

        if (empty($companies)) {
            Flash::error('Companies not found');

            return redirect(route('core.companies.index'));
        }

        $this->companiesRepository->delete($id);

        Flash::success('Companies deleted successfully.');

        return redirect(route('core.companies.index'));
    }
}
