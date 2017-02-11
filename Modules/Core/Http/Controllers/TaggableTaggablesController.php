<?php

namespace Modules\Core\Http\Controllers;

use Modules\Core\DataTables\Core\TaggableTaggablesDataTable;
use App\Http\Requests\Core;
use App\Http\Requests\Core\CreateTaggableTaggablesRequest;
use App\Http\Requests\Core\UpdateTaggableTaggablesRequest;
use App\Repositories\Core\TaggableTaggablesRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class TaggableTaggablesController extends AppBaseController
{
    /** @var  TaggableTaggablesRepository */
    private $taggableTaggablesRepository;

    public function __construct(TaggableTaggablesRepository $taggableTaggablesRepo)
    {
        $this->taggableTaggablesRepository = $taggableTaggablesRepo;
    }

    /**
     * Display a listing of the TaggableTaggables.
     *
     * @param TaggableTaggablesDataTable $taggableTaggablesDataTable
     * @return Response
     */
    public function index(TaggableTaggablesDataTable $taggableTaggablesDataTable)
    {
        return $taggableTaggablesDataTable->render('core.taggable_taggables.index');
    }

    /**
     * Show the form for creating a new TaggableTaggables.
     *
     * @return Response
     */
    public function create()
    {
        return view('core.taggable_taggables.create');
    }

    /**
     * Store a newly created TaggableTaggables in storage.
     *
     * @param CreateTaggableTaggablesRequest $request
     *
     * @return Response
     */
    public function store(CreateTaggableTaggablesRequest $request)
    {
        $input = $request->all();

        $taggableTaggables = $this->taggableTaggablesRepository->create($input);

        Flash::success('Taggable Taggables saved successfully.');

        return redirect(route('core.taggableTaggables.index'));
    }

    /**
     * Display the specified TaggableTaggables.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $taggableTaggables = $this->taggableTaggablesRepository->findWithoutFail($id);

        if (empty($taggableTaggables)) {
            Flash::error('Taggable Taggables not found');

            return redirect(route('core.taggableTaggables.index'));
        }

        return view('core.taggable_taggables.show')->with('taggableTaggables', $taggableTaggables);
    }

    /**
     * Show the form for editing the specified TaggableTaggables.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $taggableTaggables = $this->taggableTaggablesRepository->findWithoutFail($id);

        if (empty($taggableTaggables)) {
            Flash::error('Taggable Taggables not found');

            return redirect(route('core.taggableTaggables.index'));
        }

        return view('core.taggable_taggables.edit')->with('taggableTaggables', $taggableTaggables);
    }

    /**
     * Update the specified TaggableTaggables in storage.
     *
     * @param  int              $id
     * @param UpdateTaggableTaggablesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTaggableTaggablesRequest $request)
    {
        $taggableTaggables = $this->taggableTaggablesRepository->findWithoutFail($id);

        if (empty($taggableTaggables)) {
            Flash::error('Taggable Taggables not found');

            return redirect(route('core.taggableTaggables.index'));
        }

        $taggableTaggables = $this->taggableTaggablesRepository->update($request->all(), $id);

        Flash::success('Taggable Taggables updated successfully.');

        return redirect(route('core.taggableTaggables.index'));
    }

    /**
     * Remove the specified TaggableTaggables from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $taggableTaggables = $this->taggableTaggablesRepository->findWithoutFail($id);

        if (empty($taggableTaggables)) {
            Flash::error('Taggable Taggables not found');

            return redirect(route('core.taggableTaggables.index'));
        }

        $this->taggableTaggablesRepository->delete($id);

        Flash::success('Taggable Taggables deleted successfully.');

        return redirect(route('core.taggableTaggables.index'));
    }
}
