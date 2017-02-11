<?php

namespace Modules\Workflows\Http\Controllers;

use Modules\Workflows\DataTables\Workflows\WorkflowCloseDataTable;
use App\Http\Requests\Workflows;
use App\Http\Requests\Workflows\CreateWorkflowCloseRequest;
use App\Http\Requests\Workflows\UpdateWorkflowCloseRequest;
use Modules\Workflows\Repositories\WorkflowCloseRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class WorkflowCloseController extends AppBaseController
{
    /** @var  WorkflowCloseRepository */
    private $workflowCloseRepository;

    public function __construct(WorkflowCloseRepository $workflowCloseRepo)
    {
        $this->workflowCloseRepository = $workflowCloseRepo;
    }

    /**
     * Display a listing of the WorkflowClose.
     *
     * @param WorkflowCloseDataTable $workflowCloseDataTable
     * @return Response
     */
    public function index(WorkflowCloseDataTable $workflowCloseDataTable)
    {
        return $workflowCloseDataTable->render('workflows.workflow_closes.index');
    }

    /**
     * Show the form for creating a new WorkflowClose.
     *
     * @return Response
     */
    public function create()
    {
        return view('workflows.workflow_closes.create');
    }

    /**
     * Store a newly created WorkflowClose in storage.
     *
     * @param CreateWorkflowCloseRequest $request
     *
     * @return Response
     */
    public function store(CreateWorkflowCloseRequest $request)
    {
        $input = $request->all();

        $workflowClose = $this->workflowCloseRepository->create($input);

        Flash::success('Workflow Close saved successfully.');

        return redirect(route('workflows.workflowCloses.index'));
    }

    /**
     * Display the specified WorkflowClose.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $workflowClose = $this->workflowCloseRepository->findWithoutFail($id);

        if (empty($workflowClose)) {
            Flash::error('Workflow Close not found');

            return redirect(route('workflows.workflowCloses.index'));
        }

        return view('workflows.workflow_closes.show')->with('workflowClose', $workflowClose);
    }

    /**
     * Show the form for editing the specified WorkflowClose.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $workflowClose = $this->workflowCloseRepository->findWithoutFail($id);

        if (empty($workflowClose)) {
            Flash::error('Workflow Close not found');

            return redirect(route('workflows.workflowCloses.index'));
        }

        return view('workflows.workflow_closes.edit')->with('workflowClose', $workflowClose);
    }

    /**
     * Update the specified WorkflowClose in storage.
     *
     * @param  int              $id
     * @param UpdateWorkflowCloseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWorkflowCloseRequest $request)
    {
        $workflowClose = $this->workflowCloseRepository->findWithoutFail($id);

        if (empty($workflowClose)) {
            Flash::error('Workflow Close not found');

            return redirect(route('workflows.workflowCloses.index'));
        }

        $workflowClose = $this->workflowCloseRepository->update($request->all(), $id);

        Flash::success('Workflow Close updated successfully.');

        return redirect(route('workflows.workflowCloses.index'));
    }

    /**
     * Remove the specified WorkflowClose from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $workflowClose = $this->workflowCloseRepository->findWithoutFail($id);

        if (empty($workflowClose)) {
            Flash::error('Workflow Close not found');

            return redirect(route('workflows.workflowCloses.index'));
        }

        $this->workflowCloseRepository->delete($id);

        Flash::success('Workflow Close deleted successfully.');

        return redirect(route('workflows.workflowCloses.index'));
    }
}
