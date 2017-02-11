<?php

namespace Modules\Relations\Http\Controllers;

use Modules\Relations\DataTables\RelationCommunicationDataTable;
use App\Http\Requests\Relations;
use App\Http\Requests\Relations\CreateRelationCommunicationRequest;
use App\Http\Requests\Relations\UpdateRelationCommunicationRequest;
use Modules\Relations\Repositories\RelationCommunicationRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class RelationCommunicationController extends AppBaseController
{
    /** @var  RelationCommunicationRepository */
    private $relationCommunicationRepository;

    public function __construct(RelationCommunicationRepository $relationCommunicationRepo)
    {
        $this->relationCommunicationRepository = $relationCommunicationRepo;
    }

    /**
     * Display a listing of the RelationCommunication.
     *
     * @param RelationCommunicationDataTable $relationCommunicationDataTable
     * @return Response
     */
    public function index(RelationCommunicationDataTable $relationCommunicationDataTable)
    {
        return $relationCommunicationDataTable->render('relations.relation_communications.index');
    }

    /**
     * Show the form for creating a new RelationCommunication.
     *
     * @return Response
     */
    public function create()
    {
        return view('relations.relation_communications.create');
    }

    /**
     * Store a newly created RelationCommunication in storage.
     *
     * @param CreateRelationCommunicationRequest $request
     *
     * @return Response
     */
    public function store(CreateRelationCommunicationRequest $request)
    {
        $input = $request->all();

        $relationCommunication = $this->relationCommunicationRepository->create($input);

        Flash::success('Relation Communication saved successfully.');

        return redirect(route('relations.relationCommunications.index'));
    }

    /**
     * Display the specified RelationCommunication.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $relationCommunication = $this->relationCommunicationRepository->findWithoutFail($id);

        if (empty($relationCommunication)) {
            Flash::error('Relation Communication not found');

            return redirect(route('relations.relationCommunications.index'));
        }

        return view('relations.relation_communications.show')->with('relationCommunication', $relationCommunication);
    }

    /**
     * Show the form for editing the specified RelationCommunication.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $relationCommunication = $this->relationCommunicationRepository->findWithoutFail($id);

        if (empty($relationCommunication)) {
            Flash::error('Relation Communication not found');

            return redirect(route('relations.relationCommunications.index'));
        }

        return view('relations.relation_communications.edit')->with('relationCommunication', $relationCommunication);
    }

    /**
     * Update the specified RelationCommunication in storage.
     *
     * @param  int              $id
     * @param UpdateRelationCommunicationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRelationCommunicationRequest $request)
    {
        $relationCommunication = $this->relationCommunicationRepository->findWithoutFail($id);

        if (empty($relationCommunication)) {
            Flash::error('Relation Communication not found');

            return redirect(route('relations.relationCommunications.index'));
        }

        $relationCommunication = $this->relationCommunicationRepository->update($request->all(), $id);

        Flash::success('Relation Communication updated successfully.');

        return redirect(route('relations.relationCommunications.index'));
    }

    /**
     * Remove the specified RelationCommunication from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $relationCommunication = $this->relationCommunicationRepository->findWithoutFail($id);

        if (empty($relationCommunication)) {
            Flash::error('Relation Communication not found');

            return redirect(route('relations.relationCommunications.index'));
        }

        $this->relationCommunicationRepository->delete($id);

        Flash::success('Relation Communication deleted successfully.');

        return redirect(route('relations.relationCommunications.index'));
    }
}
