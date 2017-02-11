<?php

namespace Modules\Core\Http\Controllers;

use Modules\Core\DataTables\Core\TaggableTagsDataTable;
use App\Http\Requests\Core;
use App\Http\Requests\Core\CreateTaggableTagsRequest;
use App\Http\Requests\Core\UpdateTaggableTagsRequest;
use App\Repositories\Core\TaggableTagsRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class TaggableTagsController extends AppBaseController
{
    /** @var  TaggableTagsRepository */
    private $taggableTagsRepository;

    public function __construct(TaggableTagsRepository $taggableTagsRepo)
    {
        $this->taggableTagsRepository = $taggableTagsRepo;
    }

    /**
     * Display a listing of the TaggableTags.
     *
     * @param TaggableTagsDataTable $taggableTagsDataTable
     * @return Response
     */
    public function index(TaggableTagsDataTable $taggableTagsDataTable)
    {
        return $taggableTagsDataTable->render('core.taggable_tags.index');
    }

    /**
     * Show the form for creating a new TaggableTags.
     *
     * @return Response
     */
    public function create()
    {
        return view('core.taggable_tags.create');
    }

    /**
     * Store a newly created TaggableTags in storage.
     *
     * @param CreateTaggableTagsRequest $request
     *
     * @return Response
     */
    public function store(CreateTaggableTagsRequest $request)
    {
        $input = $request->all();

        $taggableTags = $this->taggableTagsRepository->create($input);

        Flash::success('Taggable Tags saved successfully.');

        return redirect(route('core.taggableTags.index'));
    }

    /**
     * Display the specified TaggableTags.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $taggableTags = $this->taggableTagsRepository->findWithoutFail($id);

        if (empty($taggableTags)) {
            Flash::error('Taggable Tags not found');

            return redirect(route('core.taggableTags.index'));
        }

        return view('core.taggable_tags.show')->with('taggableTags', $taggableTags);
    }

    /**
     * Show the form for editing the specified TaggableTags.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $taggableTags = $this->taggableTagsRepository->findWithoutFail($id);

        if (empty($taggableTags)) {
            Flash::error('Taggable Tags not found');

            return redirect(route('core.taggableTags.index'));
        }

        return view('core.taggable_tags.edit')->with('taggableTags', $taggableTags);
    }

    /**
     * Update the specified TaggableTags in storage.
     *
     * @param  int              $id
     * @param UpdateTaggableTagsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTaggableTagsRequest $request)
    {
        $taggableTags = $this->taggableTagsRepository->findWithoutFail($id);

        if (empty($taggableTags)) {
            Flash::error('Taggable Tags not found');

            return redirect(route('core.taggableTags.index'));
        }

        $taggableTags = $this->taggableTagsRepository->update($request->all(), $id);

        Flash::success('Taggable Tags updated successfully.');

        return redirect(route('core.taggableTags.index'));
    }

    /**
     * Remove the specified TaggableTags from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $taggableTags = $this->taggableTagsRepository->findWithoutFail($id);

        if (empty($taggableTags)) {
            Flash::error('Taggable Tags not found');

            return redirect(route('core.taggableTags.index'));
        }

        $this->taggableTagsRepository->delete($id);

        Flash::success('Taggable Tags deleted successfully.');

        return redirect(route('core.taggableTags.index'));
    }
}
