<?php

namespace Modules\Relations\Http\Controllers;

use Modules\Relations\DataTables\RelationAdressesDataTable;
use App\Http\Requests\Relations;
use App\Http\Requests\Relations\CreateRelationAdressesRequest;
use App\Http\Requests\Relations\UpdateRelationAdressesRequest;
use Modules\Relations\Repositories\RelationAdressesRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class RelationAdressesController extends AppBaseController
{
    /** @var  RelationAdressesRepository */
    private $relationAdressesRepository;

    public function __construct(RelationAdressesRepository $relationAdressesRepo)
    {
        $this->relationAdressesRepository = $relationAdressesRepo;
    }

    /**
     * Display a listing of the RelationAdresses.
     *
     * @param RelationAdressesDataTable $relationAdressesDataTable
     * @return Response
     */
    public function index(RelationAdressesDataTable $relationAdressesDataTable)
    {
        return $relationAdressesDataTable->render('relations.relation_adresses.index');
    }

    /**
     * Show the form for creating a new RelationAdresses.
     *
     * @return Response
     */
    public function create()
    {
        return view('relations.relation_adresses.create');
    }

    /**
     * Store a newly created RelationAdresses in storage.
     *
     * @param CreateRelationAdressesRequest $request
     *
     * @return Response
     */
    public function store(CreateRelationAdressesRequest $request)
    {
        $input = $request->all();

        $relationAdresses = $this->relationAdressesRepository->create($input);

        Flash::success('Relation Adresses saved successfully.');

        return redirect(route('relations.relationAdresses.index'));
    }

    /**
     * Display the specified RelationAdresses.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $relationAdresses = $this->relationAdressesRepository->findWithoutFail($id);

        if (empty($relationAdresses)) {
            Flash::error('Relation Adresses not found');

            return redirect(route('relations.relationAdresses.index'));
        }

        return view('relations.relation_adresses.show')->with('relationAdresses', $relationAdresses);
    }

    /**
     * Show the form for editing the specified RelationAdresses.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $relationAdresses = $this->relationAdressesRepository->findWithoutFail($id);

        if (empty($relationAdresses)) {
            Flash::error('Relation Adresses not found');

            return redirect(route('relations.relationAdresses.index'));
        }

        return view('relations.relation_adresses.edit')->with('relationAdresses', $relationAdresses);
    }

    /**
     * Update the specified RelationAdresses in storage.
     *
     * @param  int              $id
     * @param UpdateRelationAdressesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRelationAdressesRequest $request)
    {
        $relationAdresses = $this->relationAdressesRepository->findWithoutFail($id);

        if (empty($relationAdresses)) {
            Flash::error('Relation Adresses not found');

            return redirect(route('relations.relationAdresses.index'));
        }

        $relationAdresses = $this->relationAdressesRepository->update($request->all(), $id);

        Flash::success('Relation Adresses updated successfully.');

        return redirect(route('relations.relationAdresses.index'));
    }

    /**
     * Remove the specified RelationAdresses from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $relationAdresses = $this->relationAdressesRepository->findWithoutFail($id);

        if (empty($relationAdresses)) {
            Flash::error('Relation Adresses not found');

            return redirect(route('relations.relationAdresses.index'));
        }

        $this->relationAdressesRepository->delete($id);

        Flash::success('Relation Adresses deleted successfully.');

        return redirect(route('relations.relationAdresses.index'));
    }
}
