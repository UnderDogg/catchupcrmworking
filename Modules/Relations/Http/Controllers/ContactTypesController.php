<?php

namespace Modules\Relations\Http\Controllers;

use Modules\Relations\DataTables\ContactTypeDataTable;
use App\Http\Requests\Relations;
use App\Http\Requests\Relations\CreateContactTypeRequest;
use App\Http\Requests\Relations\UpdateContactTypeRequest;
use Modules\Relations\Repositories\ContactTypeRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class ContactTypesController extends AppBaseController
{
    /** @var  ContactTypeRepository */
    private $contactTypeRepository;

    public function __construct(ContactTypeRepository $contactTypeRepo)
    {
        $this->contactTypeRepository = $contactTypeRepo;
    }

    /**
     * Display a listing of the ContactType.
     *
     * @param ContactTypeDataTable $contactTypeDataTable
     * @return Response
     */
    public function index(ContactTypeDataTable $contactTypeDataTable)
    {
        return $contactTypeDataTable->render('relations.contact_types.index');
    }

    /**
     * Show the form for creating a new ContactType.
     *
     * @return Response
     */
    public function create()
    {
        return view('relations.contact_types.create');
    }

    /**
     * Store a newly created ContactType in storage.
     *
     * @param CreateContactTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateContactTypeRequest $request)
    {
        $input = $request->all();

        $contactType = $this->contactTypeRepository->create($input);

        Flash::success('Contact Type saved successfully.');

        return redirect(route('relations.contactTypes.index'));
    }

    /**
     * Display the specified ContactType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contactType = $this->contactTypeRepository->findWithoutFail($id);

        if (empty($contactType)) {
            Flash::error('Contact Type not found');

            return redirect(route('relations.contactTypes.index'));
        }

        return view('relations.contact_types.show')->with('contactType', $contactType);
    }

    /**
     * Show the form for editing the specified ContactType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contactType = $this->contactTypeRepository->findWithoutFail($id);

        if (empty($contactType)) {
            Flash::error('Contact Type not found');

            return redirect(route('relations.contactTypes.index'));
        }

        return view('relations.contact_types.edit')->with('contactType', $contactType);
    }

    /**
     * Update the specified ContactType in storage.
     *
     * @param  int              $id
     * @param UpdateContactTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContactTypeRequest $request)
    {
        $contactType = $this->contactTypeRepository->findWithoutFail($id);

        if (empty($contactType)) {
            Flash::error('Contact Type not found');

            return redirect(route('relations.contactTypes.index'));
        }

        $contactType = $this->contactTypeRepository->update($request->all(), $id);

        Flash::success('Contact Type updated successfully.');

        return redirect(route('relations.contactTypes.index'));
    }

    /**
     * Remove the specified ContactType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contactType = $this->contactTypeRepository->findWithoutFail($id);

        if (empty($contactType)) {
            Flash::error('Contact Type not found');

            return redirect(route('relations.contactTypes.index'));
        }

        $this->contactTypeRepository->delete($id);

        Flash::success('Contact Type deleted successfully.');

        return redirect(route('relations.contactTypes.index'));
    }
}
