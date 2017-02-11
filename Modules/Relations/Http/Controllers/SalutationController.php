<?php

namespace Modules\Relations\Http\Controllers;

use Modules\Relations\DataTables\SalutationDataTable;
use App\Http\Requests\Relations;
use App\Http\Requests\Relations\CreateSalutationRequest;
use App\Http\Requests\Relations\UpdateSalutationRequest;
use Modules\Relations\Repositories\SalutationRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class SalutationController extends AppBaseController
{
    /** @var  SalutationRepository */
    private $salutationRepository;

    public function __construct(SalutationRepository $salutationRepo)
    {
        $this->salutationRepository = $salutationRepo;
    }

    /**
     * Display a listing of the Salutation.
     *
     * @param SalutationDataTable $salutationDataTable
     * @return Response
     */
    public function index(SalutationDataTable $salutationDataTable)
    {
        return $salutationDataTable->render('relations.salutations.index');
    }

    /**
     * Show the form for creating a new Salutation.
     *
     * @return Response
     */
    public function create()
    {
        return view('relations.salutations.create');
    }

    /**
     * Store a newly created Salutation in storage.
     *
     * @param CreateSalutationRequest $request
     *
     * @return Response
     */
    public function store(CreateSalutationRequest $request)
    {
        $input = $request->all();

        $salutation = $this->salutationRepository->create($input);

        Flash::success('Salutation saved successfully.');

        return redirect(route('relations.salutations.index'));
    }

    /**
     * Display the specified Salutation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $salutation = $this->salutationRepository->findWithoutFail($id);

        if (empty($salutation)) {
            Flash::error('Salutation not found');

            return redirect(route('relations.salutations.index'));
        }

        return view('relations.salutations.show')->with('salutation', $salutation);
    }

    /**
     * Show the form for editing the specified Salutation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $salutation = $this->salutationRepository->findWithoutFail($id);

        if (empty($salutation)) {
            Flash::error('Salutation not found');

            return redirect(route('relations.salutations.index'));
        }

        return view('relations.salutations.edit')->with('salutation', $salutation);
    }

    /**
     * Update the specified Salutation in storage.
     *
     * @param  int              $id
     * @param UpdateSalutationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSalutationRequest $request)
    {
        $salutation = $this->salutationRepository->findWithoutFail($id);

        if (empty($salutation)) {
            Flash::error('Salutation not found');

            return redirect(route('relations.salutations.index'));
        }

        $salutation = $this->salutationRepository->update($request->all(), $id);

        Flash::success('Salutation updated successfully.');

        return redirect(route('relations.salutations.index'));
    }

    /**
     * Remove the specified Salutation from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $salutation = $this->salutationRepository->findWithoutFail($id);

        if (empty($salutation)) {
            Flash::error('Salutation not found');

            return redirect(route('relations.salutations.index'));
        }

        $this->salutationRepository->delete($id);

        Flash::success('Salutation deleted successfully.');

        return redirect(route('relations.salutations.index'));
    }
}
