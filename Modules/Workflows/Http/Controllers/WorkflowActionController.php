<?php

namespace Modules\Workflows\Http\Controllers;

use Modules\Workflows\DataTables\Workflows\WorkflowActionDataTable;
use App\Http\Requests\Workflows;
use App\Http\Requests\Workflows\CreateWorkflowActionRequest;
use App\Http\Requests\Workflows\UpdateWorkflowActionRequest;
use Modules\Workflows\Repositories\WorkflowActionRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class WorkflowActionController extends AppBaseController
{
    /** @var  WorkflowActionRepository */
    private $workflowActionRepository;

    public function __construct(WorkflowActionRepository $workflowActionRepo)
    {
        $this->workflowActionRepository = $workflowActionRepo;
    }

    /**
     * Display a listing of the WorkflowAction.
     *
     * @param WorkflowActionDataTable $workflowActionDataTable
     * @return Response
     */
    public function index(WorkflowActionDataTable $workflowActionDataTable)
    {
        return $workflowActionDataTable->render('workflows.workflow_actions.index');
    }

    /**
     * Show the form for creating a new WorkflowAction.
     *
     * @return Response
     */
    public function create()
    {
        return view('workflows.workflow_actions.create');
    }

    /**
     * Store a newly created WorkflowAction in storage.
     *
     * @param CreateWorkflowActionRequest $request
     *
     * @return Response
     */
    public function store(CreateWorkflowActionRequest $request)
    {
        $input = $request->all();

        $workflowAction = $this->workflowActionRepository->create($input);

        Flash::success('Workflow Action saved successfully.');

        return redirect(route('workflows.workflowActions.index'));
    }

    /**
     * Display the specified WorkflowAction.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $workflowAction = $this->workflowActionRepository->findWithoutFail($id);

        if (empty($workflowAction)) {
            Flash::error('Workflow Action not found');

            return redirect(route('workflows.workflowActions.index'));
        }

        return view('workflows.workflow_actions.show')->with('workflowAction', $workflowAction);
    }

    /**
     * Show the form for editing the specified WorkflowAction.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $workflowAction = $this->workflowActionRepository->findWithoutFail($id);

        if (empty($workflowAction)) {
            Flash::error('Workflow Action not found');

            return redirect(route('workflows.workflowActions.index'));
        }

        return view('workflows.workflow_actions.edit')->with('workflowAction', $workflowAction);
    }

    /**
     * Update the specified WorkflowAction in storage.
     *
     * @param  int              $id
     * @param UpdateWorkflowActionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWorkflowActionRequest $request)
    {
        $workflowAction = $this->workflowActionRepository->findWithoutFail($id);

        if (empty($workflowAction)) {
            Flash::error('Workflow Action not found');

            return redirect(route('workflows.workflowActions.index'));
        }

        $workflowAction = $this->workflowActionRepository->update($request->all(), $id);

        Flash::success('Workflow Action updated successfully.');

        return redirect(route('workflows.workflowActions.index'));
    }

    /**
     * Remove the specified WorkflowAction from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $workflowAction = $this->workflowActionRepository->findWithoutFail($id);

        if (empty($workflowAction)) {
            Flash::error('Workflow Action not found');

            return redirect(route('workflows.workflowActions.index'));
        }

        $this->workflowActionRepository->delete($id);

        Flash::success('Workflow Action deleted successfully.');

        return redirect(route('workflows.workflowActions.index'));
    }
}
