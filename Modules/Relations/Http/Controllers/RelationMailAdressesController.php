<?php

namespace Modules\Relations\Http\Controllers;

use Modules\Relations\DataTables\RelationMailAdressesDataTable;
use App\Http\Requests\Relations;
use App\Http\Requests\Relations\CreateRelationMailAdressesRequest;
use App\Http\Requests\Relations\UpdateRelationMailAdressesRequest;
use Modules\Relations\Repositories\RelationMailAdressesRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class RelationMailAdressesController extends AppBaseController
{
    /** @var  RelationMailAdressesRepository */
    private $relationMailAdressesRepository;

    public function __construct(RelationMailAdressesRepository $relationMailAdressesRepo)
    {
        $this->relationMailAdressesRepository = $relationMailAdressesRepo;
    }

    /**
     * Display a listing of the RelationMailAdresses.
     *
     * @param RelationMailAdressesDataTable $relationMailAdressesDataTable
     * @return Response
     */
    public function index(RelationMailAdressesDataTable $relationMailAdressesDataTable)
    {
        return $relationMailAdressesDataTable->render('relations.relation_mail_adresses.index');
    }

    /**
     * Show the form for creating a new RelationMailAdresses.
     *
     * @return Response
     */
    public function create()
    {
        return view('relations.relation_mail_adresses.create');
    }

    /**
     * Store a newly created RelationMailAdresses in storage.
     *
     * @param CreateRelationMailAdressesRequest $request
     *
     * @return Response
     */
    public function store(CreateRelationMailAdressesRequest $request)
    {
        $input = $request->all();

        $relationMailAdresses = $this->relationMailAdressesRepository->create($input);

        Flash::success('Relation Mail Adresses saved successfully.');

        return redirect(route('relations.relationMailAdresses.index'));
    }

    /**
     * Display the specified RelationMailAdresses.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $relationMailAdresses = $this->relationMailAdressesRepository->findWithoutFail($id);

        if (empty($relationMailAdresses)) {
            Flash::error('Relation Mail Adresses not found');

            return redirect(route('relations.relationMailAdresses.index'));
        }

        return view('relations.relation_mail_adresses.show')->with('relationMailAdresses', $relationMailAdresses);
    }

    /**
     * Show the form for editing the specified RelationMailAdresses.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $relationMailAdresses = $this->relationMailAdressesRepository->findWithoutFail($id);

        if (empty($relationMailAdresses)) {
            Flash::error('Relation Mail Adresses not found');

            return redirect(route('relations.relationMailAdresses.index'));
        }

        return view('relations.relation_mail_adresses.edit')->with('relationMailAdresses', $relationMailAdresses);
    }

    /**
     * Update the specified RelationMailAdresses in storage.
     *
     * @param  int              $id
     * @param UpdateRelationMailAdressesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRelationMailAdressesRequest $request)
    {
        $relationMailAdresses = $this->relationMailAdressesRepository->findWithoutFail($id);

        if (empty($relationMailAdresses)) {
            Flash::error('Relation Mail Adresses not found');

            return redirect(route('relations.relationMailAdresses.index'));
        }

        $relationMailAdresses = $this->relationMailAdressesRepository->update($request->all(), $id);

        Flash::success('Relation Mail Adresses updated successfully.');

        return redirect(route('relations.relationMailAdresses.index'));
    }

    /**
     * Remove the specified RelationMailAdresses from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $relationMailAdresses = $this->relationMailAdressesRepository->findWithoutFail($id);

        if (empty($relationMailAdresses)) {
            Flash::error('Relation Mail Adresses not found');

            return redirect(route('relations.relationMailAdresses.index'));
        }

        $this->relationMailAdressesRepository->delete($id);

        Flash::success('Relation Mail Adresses deleted successfully.');

        return redirect(route('relations.relationMailAdresses.index'));
    }
}
