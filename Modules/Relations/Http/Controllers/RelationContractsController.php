<?php

namespace Modules\Relations\Http\Controllers;

use Modules\Relations\DataTables\RelationContractsDataTable;
use App\Http\Requests\Relations;
use App\Http\Requests\Relations\CreateRelationContractsRequest;
use App\Http\Requests\Relations\UpdateRelationContractsRequest;
use Modules\Relations\Repositories\RelationContractsRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class RelationContractsController extends AppBaseController
{
    /** @var  RelationContractsRepository */
    private $relationContractsRepository;

    public function __construct(RelationContractsRepository $relationContractsRepo)
    {
        $this->relationContractsRepository = $relationContractsRepo;
    }

    /**
     * Display a listing of the RelationContracts.
     *
     * @param RelationContractsDataTable $relationContractsDataTable
     * @return Response
     */
    public function index(RelationContractsDataTable $relationContractsDataTable)
    {
        return $relationContractsDataTable->render('relations.relation_contracts.index');
    }

    /**
     * Show the form for creating a new RelationContracts.
     *
     * @return Response
     */
    public function create()
    {
        return view('relations.relation_contracts.create');
    }

    /**
     * Store a newly created RelationContracts in storage.
     *
     * @param CreateRelationContractsRequest $request
     *
     * @return Response
     */
    public function store(CreateRelationContractsRequest $request)
    {
        $input = $request->all();

        $relationContracts = $this->relationContractsRepository->create($input);

        Flash::success('Relation Contracts saved successfully.');

        return redirect(route('relations.relationContracts.index'));
    }

    /**
     * Display the specified RelationContracts.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $relationContracts = $this->relationContractsRepository->findWithoutFail($id);

        if (empty($relationContracts)) {
            Flash::error('Relation Contracts not found');

            return redirect(route('relations.relationContracts.index'));
        }

        return view('relations.relation_contracts.show')->with('relationContracts', $relationContracts);
    }

    /**
     * Show the form for editing the specified RelationContracts.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $relationContracts = $this->relationContractsRepository->findWithoutFail($id);

        if (empty($relationContracts)) {
            Flash::error('Relation Contracts not found');

            return redirect(route('relations.relationContracts.index'));
        }

        return view('relations.relation_contracts.edit')->with('relationContracts', $relationContracts);
    }

    /**
     * Update the specified RelationContracts in storage.
     *
     * @param  int              $id
     * @param UpdateRelationContractsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRelationContractsRequest $request)
    {
        $relationContracts = $this->relationContractsRepository->findWithoutFail($id);

        if (empty($relationContracts)) {
            Flash::error('Relation Contracts not found');

            return redirect(route('relations.relationContracts.index'));
        }

        $relationContracts = $this->relationContractsRepository->update($request->all(), $id);

        Flash::success('Relation Contracts updated successfully.');

        return redirect(route('relations.relationContracts.index'));
    }

    /**
     * Remove the specified RelationContracts from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $relationContracts = $this->relationContractsRepository->findWithoutFail($id);

        if (empty($relationContracts)) {
            Flash::error('Relation Contracts not found');

            return redirect(route('relations.relationContracts.index'));
        }

        $this->relationContractsRepository->delete($id);

        Flash::success('Relation Contracts deleted successfully.');

        return redirect(route('relations.relationContracts.index'));
    }
}
