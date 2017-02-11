<?php

namespace Modules\Relations\Http\Controllers;

use Modules\Relations\DataTables\RelationTypeDataTable;
use App\Http\Requests\Relations;
use App\Http\Requests\Relations\CreateRelationTypeRequest;
use App\Http\Requests\Relations\UpdateRelationTypeRequest;
use Modules\Relations\Repositories\RelationTypeRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class RelationTypeController extends AppBaseController
{
    /** @var  RelationTypeRepository */
    private $relationTypeRepository;

    public function __construct(RelationTypeRepository $relationTypeRepo)
    {
        $this->relationTypeRepository = $relationTypeRepo;
    }

    /**
     * Display a listing of the RelationType.
     *
     * @param RelationTypeDataTable $relationTypeDataTable
     * @return Response
     */
    public function index(RelationTypeDataTable $relationTypeDataTable)
    {
        return $relationTypeDataTable->render('relations.relation_types.index');
    }

    /**
     * Show the form for creating a new RelationType.
     *
     * @return Response
     */
    public function create()
    {
        return view('relations.relation_types.create');
    }

    /**
     * Store a newly created RelationType in storage.
     *
     * @param CreateRelationTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateRelationTypeRequest $request)
    {
        $input = $request->all();

        $relationType = $this->relationTypeRepository->create($input);

        Flash::success('Relation Type saved successfully.');

        return redirect(route('relations.relationTypes.index'));
    }

    /**
     * Display the specified RelationType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $relationType = $this->relationTypeRepository->findWithoutFail($id);

        if (empty($relationType)) {
            Flash::error('Relation Type not found');

            return redirect(route('relations.relationTypes.index'));
        }

        return view('relations.relation_types.show')->with('relationType', $relationType);
    }

    /**
     * Show the form for editing the specified RelationType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $relationType = $this->relationTypeRepository->findWithoutFail($id);

        if (empty($relationType)) {
            Flash::error('Relation Type not found');

            return redirect(route('relations.relationTypes.index'));
        }

        return view('relations.relation_types.edit')->with('relationType', $relationType);
    }

    /**
     * Update the specified RelationType in storage.
     *
     * @param  int              $id
     * @param UpdateRelationTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRelationTypeRequest $request)
    {
        $relationType = $this->relationTypeRepository->findWithoutFail($id);

        if (empty($relationType)) {
            Flash::error('Relation Type not found');

            return redirect(route('relations.relationTypes.index'));
        }

        $relationType = $this->relationTypeRepository->update($request->all(), $id);

        Flash::success('Relation Type updated successfully.');

        return redirect(route('relations.relationTypes.index'));
    }

    /**
     * Remove the specified RelationType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $relationType = $this->relationTypeRepository->findWithoutFail($id);

        if (empty($relationType)) {
            Flash::error('Relation Type not found');

            return redirect(route('relations.relationTypes.index'));
        }

        $this->relationTypeRepository->delete($id);

        Flash::success('Relation Type deleted successfully.');

        return redirect(route('relations.relationTypes.index'));
    }
}
