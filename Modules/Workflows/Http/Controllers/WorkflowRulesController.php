<?php

namespace Modules\Workflows\Http\Controllers;

use Modules\Workflows\DataTables\Workflows\WorkflowRulesDataTable;
use App\Http\Requests\Workflows;
use App\Http\Requests\Workflows\CreateWorkflowRulesRequest;
use App\Http\Requests\Workflows\UpdateWorkflowRulesRequest;
use Modules\Workflows\Repositories\WorkflowRulesRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class WorkflowRulesController extends AppBaseController
{
    /** @var  WorkflowRulesRepository */
    private $workflowRulesRepository;

    public function __construct(WorkflowRulesRepository $workflowRulesRepo)
    {
        $this->workflowRulesRepository = $workflowRulesRepo;
    }

    /**
     * Display a listing of the WorkflowRules.
     *
     * @param WorkflowRulesDataTable $workflowRulesDataTable
     * @return Response
     */
    public function index(WorkflowRulesDataTable $workflowRulesDataTable)
    {
        return $workflowRulesDataTable->render('workflows.workflow_rules.index');
    }

    /**
     * Show the form for creating a new WorkflowRules.
     *
     * @return Response
     */
    public function create()
    {
        return view('workflows.workflow_rules.create');
    }

    /**
     * Store a newly created WorkflowRules in storage.
     *
     * @param CreateWorkflowRulesRequest $request
     *
     * @return Response
     */
    public function store(CreateWorkflowRulesRequest $request)
    {
        $input = $request->all();

        $workflowRules = $this->workflowRulesRepository->create($input);

        Flash::success('Workflow Rules saved successfully.');

        return redirect(route('workflows.workflowRules.index'));
    }

    /**
     * Display the specified WorkflowRules.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $workflowRules = $this->workflowRulesRepository->findWithoutFail($id);

        if (empty($workflowRules)) {
            Flash::error('Workflow Rules not found');

            return redirect(route('workflows.workflowRules.index'));
        }

        return view('workflows.workflow_rules.show')->with('workflowRules', $workflowRules);
    }

    /**
     * Show the form for editing the specified WorkflowRules.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $workflowRules = $this->workflowRulesRepository->findWithoutFail($id);

        if (empty($workflowRules)) {
            Flash::error('Workflow Rules not found');

            return redirect(route('workflows.workflowRules.index'));
        }

        return view('workflows.workflow_rules.edit')->with('workflowRules', $workflowRules);
    }

    /**
     * Update the specified WorkflowRules in storage.
     *
     * @param  int              $id
     * @param UpdateWorkflowRulesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWorkflowRulesRequest $request)
    {
        $workflowRules = $this->workflowRulesRepository->findWithoutFail($id);

        if (empty($workflowRules)) {
            Flash::error('Workflow Rules not found');

            return redirect(route('workflows.workflowRules.index'));
        }

        $workflowRules = $this->workflowRulesRepository->update($request->all(), $id);

        Flash::success('Workflow Rules updated successfully.');

        return redirect(route('workflows.workflowRules.index'));
    }

    /**
     * Remove the specified WorkflowRules from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $workflowRules = $this->workflowRulesRepository->findWithoutFail($id);

        if (empty($workflowRules)) {
            Flash::error('Workflow Rules not found');

            return redirect(route('workflows.workflowRules.index'));
        }

        $this->workflowRulesRepository->delete($id);

        Flash::success('Workflow Rules deleted successfully.');

        return redirect(route('workflows.workflowRules.index'));
    }
}
