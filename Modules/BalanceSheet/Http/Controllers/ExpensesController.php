<?php

namespace App\Http\Controllers\Balancesheet;

use Modules\BalanceSheet\DataTables\ExpensesDataTable;
use App\Http\Requests\Balancesheet;
use App\Http\Requests\Balancesheet\CreateExpensesRequest;
use App\Http\Requests\Balancesheet\UpdateExpensesRequest;
use App\Repositories\Balancesheet\ExpensesRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class ExpensesController extends AppBaseController
{
    /** @var  ExpensesRepository */
    private $expensesRepository;

    public function __construct(ExpensesRepository $expensesRepo)
    {
        $this->expensesRepository = $expensesRepo;
    }

    /**
     * Display a listing of the Expenses.
     *
     * @param ExpensesDataTable $expensesDataTable
     * @return Response
     */
    public function index(ExpensesDataTable $expensesDataTable)
    {
        return $expensesDataTable->render('balancesheet.expenses.index');
    }

    /**
     * Show the form for creating a new Expenses.
     *
     * @return Response
     */
    public function create()
    {
        return view('balancesheet.expenses.create');
    }

    /**
     * Store a newly created Expenses in storage.
     *
     * @param CreateExpensesRequest $request
     *
     * @return Response
     */
    public function store(CreateExpensesRequest $request)
    {
        $input = $request->all();

        $expenses = $this->expensesRepository->create($input);

        Flash::success('Expenses saved successfully.');

        return redirect(route('balancesheet.expenses.index'));
    }

    /**
     * Display the specified Expenses.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $expenses = $this->expensesRepository->findWithoutFail($id);

        if (empty($expenses)) {
            Flash::error('Expenses not found');

            return redirect(route('balancesheet.expenses.index'));
        }

        return view('balancesheet.expenses.show')->with('expenses', $expenses);
    }

    /**
     * Show the form for editing the specified Expenses.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $expenses = $this->expensesRepository->findWithoutFail($id);

        if (empty($expenses)) {
            Flash::error('Expenses not found');

            return redirect(route('balancesheet.expenses.index'));
        }

        return view('balancesheet.expenses.edit')->with('expenses', $expenses);
    }

    /**
     * Update the specified Expenses in storage.
     *
     * @param  int              $id
     * @param UpdateExpensesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExpensesRequest $request)
    {
        $expenses = $this->expensesRepository->findWithoutFail($id);

        if (empty($expenses)) {
            Flash::error('Expenses not found');

            return redirect(route('balancesheet.expenses.index'));
        }

        $expenses = $this->expensesRepository->update($request->all(), $id);

        Flash::success('Expenses updated successfully.');

        return redirect(route('balancesheet.expenses.index'));
    }

    /**
     * Remove the specified Expenses from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $expenses = $this->expensesRepository->findWithoutFail($id);

        if (empty($expenses)) {
            Flash::error('Expenses not found');

            return redirect(route('balancesheet.expenses.index'));
        }

        $this->expensesRepository->delete($id);

        Flash::success('Expenses deleted successfully.');

        return redirect(route('balancesheet.expenses.index'));
    }
}
