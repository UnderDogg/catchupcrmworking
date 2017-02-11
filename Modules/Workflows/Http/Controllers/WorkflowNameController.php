<?php

namespace Modules\Workflows\Http\Controllers;

use Modules\Workflows\DataTables\Workflows\WorkflowNameDataTable;
use App\Http\Requests\Workflows;
use App\Http\Requests\Workflows\CreateWorkflowNameRequest;
use App\Http\Requests\Workflows\UpdateWorkflowNameRequest;
use Modules\Workflows\Repositories\WorkflowNameRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class WorkflowNameController extends AppBaseController
{
    /** @var  WorkflowNameRepository */
    private $workflowNameRepository;

    public function __construct(WorkflowNameRepository $workflowNameRepo)
    {
        $this->workflowNameRepository = $workflowNameRepo;
    }

    /**
     * Display a listing of the WorkflowName.
     *
     * @param WorkflowNameDataTable $workflowNameDataTable
     * @return Response
     */
    public function index(WorkflowNameDataTable $workflowNameDataTable)
    {
        return $workflowNameDataTable->render('workflows.workflow_names.index');
    }

    /**
     * Show the form for creating a new WorkflowName.
     *
     * @return Response
     */
    public function create()
    {
        return view('workflows.workflow_names.create');
    }

    /**
     * Store a newly created WorkflowName in storage.
     *
     * @param CreateWorkflowNameRequest $request
     *
     * @return Response
     */
    public function store(CreateWorkflowNameRequest $request)
    {
        $input = $request->all();

        $workflowName = $this->workflowNameRepository->create($input);

        Flash::success('Workflow Name saved successfully.');

        return redirect(route('workflows.workflowNames.index'));
    }

    /**
     * Display the specified WorkflowName.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $workflowName = $this->workflowNameRepository->findWithoutFail($id);

        if (empty($workflowName)) {
            Flash::error('Workflow Name not found');

            return redirect(route('workflows.workflowNames.index'));
        }

        return view('workflows.workflow_names.show')->with('workflowName', $workflowName);
    }

    /**
     * Show the form for editing the specified WorkflowName.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $workflowName = $this->workflowNameRepository->findWithoutFail($id);

        if (empty($workflowName)) {
            Flash::error('Workflow Name not found');

            return redirect(route('workflows.workflowNames.index'));
        }

        return view('workflows.workflow_names.edit')->with('workflowName', $workflowName);
    }

    /**
     * Update the specified WorkflowName in storage.
     *
     * @param  int              $id
     * @param UpdateWorkflowNameRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWorkflowNameRequest $request)
    {
        $workflowName = $this->workflowNameRepository->findWithoutFail($id);

        if (empty($workflowName)) {
            Flash::error('Workflow Name not found');

            return redirect(route('workflows.workflowNames.index'));
        }

        $workflowName = $this->workflowNameRepository->update($request->all(), $id);

        Flash::success('Workflow Name updated successfully.');

        return redirect(route('workflows.workflowNames.index'));
    }

    /**
     * Remove the specified WorkflowName from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $workflowName = $this->workflowNameRepository->findWithoutFail($id);

        if (empty($workflowName)) {
            Flash::error('Workflow Name not found');

            return redirect(route('workflows.workflowNames.index'));
        }

        $this->workflowNameRepository->delete($id);

        Flash::success('Workflow Name deleted successfully.');

        return redirect(route('workflows.workflowNames.index'));
    }
}
