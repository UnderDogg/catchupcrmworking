<?php

namespace Modules\Relations\Http\Controllers;

use Modules\Relations\DataTables\RelationsDataTable;
use App\Http\Requests\Relations;
use App\Http\Requests\Relations\CreateRelationsRequest;
use App\Http\Requests\Relations\UpdateRelationsRequest;
use Modules\Relations\Repositories\RelationsRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class RelationsController extends AppBaseController
{
    /** @var  RelationsRepository */
    private $relationsRepository;

    public function __construct(RelationsRepository $relationsRepo)
    {
        $this->relationsRepository = $relationsRepo;
    }

    /**
     * Display a listing of the Relations.
     *
     * @param RelationsDataTable $relationsDataTable
     * @return Response
     */
    public function index(RelationsDataTable $relationsDataTable)
    {
        //echo "hello world";
        return $relationsDataTable->render('relations::relations.index');
    }

    /**
     * Show the form for creating a new Relations.
     *
     * @return Response
     */
    public function create()
    {
        return view('relations::relations.create');
    }

    /**
     * Store a newly created Relations in storage.
     *
     * @param CreateRelationsRequest $request
     *
     * @return Response
     */
    public function store(CreateRelationsRequest $request)
    {
        $input = $request->all();

        $relations = $this->relationsRepository->create($input);

        Flash::success('Relations saved successfully.');

        return redirect(route('relations.relations.index'));
    }

    /**
     * Display the specified Relations.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $relations = $this->relationsRepository->findWithoutFail($id);

        if (empty($relations)) {
            Flash::error('Relations not found');

            return redirect(route('relations.relations.index'));
        }

        return view('relations::relations.show')->with('relations', $relations);
    }

    /**
     * Show the form for editing the specified Relations.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $relations = $this->relationsRepository->findWithoutFail($id);

        if (empty($relations)) {
            Flash::error('Relations not found');

            return redirect(route('relations.relations.index'));
        }

        return view('relations::relations.edit')->with('relations', $relations);
    }

    /**
     * Update the specified Relations in storage.
     *
     * @param  int              $id
     * @param UpdateRelationsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRelationsRequest $request)
    {
        $relations = $this->relationsRepository->findWithoutFail($id);

        if (empty($relations)) {
            Flash::error('Relations not found');

            return redirect(route('relations.relations.index'));
        }

        $relations = $this->relationsRepository->update($request->all(), $id);

        Flash::success('Relations updated successfully.');

        return redirect(route('relations.relations.index'));
    }

    /**
     * Remove the specified Relations from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $relations = $this->relationsRepository->findWithoutFail($id);

        if (empty($relations)) {
            Flash::error('Relations not found');

            return redirect(route('relations.relations.index'));
        }

        $this->relationsRepository->delete($id);

        Flash::success('Relations deleted successfully.');

        return redirect(route('relations.relations.index'));
    }
}
