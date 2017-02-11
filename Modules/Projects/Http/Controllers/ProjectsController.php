<?php

namespace Modules\Projects\Http\Controllers;

use Modules\Projects\DataTables\Projects\ProjectsDataTable;
use App\Http\Requests\Projects;
use App\Http\Requests\Projects\CreateProjectsRequest;
use App\Http\Requests\Projects\UpdateProjectsRequest;
use Modules\Projects\Repositories\ProjectsRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class ProjectsController extends AppBaseController
{
    /** @var  ProjectsRepository */
    private $projectsRepository;

    public function __construct(ProjectsRepository $projectsRepo)
    {
        $this->projectsRepository = $projectsRepo;
    }

    /**
     * Display a listing of the Projects.
     *
     * @param ProjectsDataTable $projectsDataTable
     * @return Response
     */
    public function index(ProjectsDataTable $projectsDataTable)
    {
        return $projectsDataTable->render('projects.projects.index');
    }

    /**
     * Show the form for creating a new Projects.
     *
     * @return Response
     */
    public function create()
    {
        return view('projects.projects.create');
    }

    /**
     * Store a newly created Projects in storage.
     *
     * @param CreateProjectsRequest $request
     *
     * @return Response
     */
    public function store(CreateProjectsRequest $request)
    {
        $input = $request->all();

        $projects = $this->projectsRepository->create($input);

        Flash::success('Projects saved successfully.');

        return redirect(route('projects.projects.index'));
    }

    /**
     * Display the specified Projects.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $projects = $this->projectsRepository->findWithoutFail($id);

        if (empty($projects)) {
            Flash::error('Projects not found');

            return redirect(route('projects.projects.index'));
        }

        return view('projects.projects.show')->with('projects', $projects);
    }

    /**
     * Show the form for editing the specified Projects.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $projects = $this->projectsRepository->findWithoutFail($id);

        if (empty($projects)) {
            Flash::error('Projects not found');

            return redirect(route('projects.projects.index'));
        }

        return view('projects.projects.edit')->with('projects', $projects);
    }

    /**
     * Update the specified Projects in storage.
     *
     * @param  int              $id
     * @param UpdateProjectsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProjectsRequest $request)
    {
        $projects = $this->projectsRepository->findWithoutFail($id);

        if (empty($projects)) {
            Flash::error('Projects not found');

            return redirect(route('projects.projects.index'));
        }

        $projects = $this->projectsRepository->update($request->all(), $id);

        Flash::success('Projects updated successfully.');

        return redirect(route('projects.projects.index'));
    }

    /**
     * Remove the specified Projects from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $projects = $this->projectsRepository->findWithoutFail($id);

        if (empty($projects)) {
            Flash::error('Projects not found');

            return redirect(route('projects.projects.index'));
        }

        $this->projectsRepository->delete($id);

        Flash::success('Projects deleted successfully.');

        return redirect(route('projects.projects.index'));
    }
}
