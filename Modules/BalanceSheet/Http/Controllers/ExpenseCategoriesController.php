<?php

namespace App\Http\Controllers\Balancesheet;

use App\DataTables\Balancesheet\ExpenseCategoriesDataTable;
use App\Http\Requests\Balancesheet;
use App\Http\Requests\Balancesheet\CreateExpenseCategoriesRequest;
use App\Http\Requests\Balancesheet\UpdateExpenseCategoriesRequest;
use App\Repositories\Balancesheet\ExpenseCategoriesRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ExpenseCategoriesController extends AppBaseController
{
    /** @var  ExpenseCategoriesRepository */
    private $expenseCategoriesRepository;

    public function __construct(ExpenseCategoriesRepository $expenseCategoriesRepo)
    {
        $this->expenseCategoriesRepository = $expenseCategoriesRepo;
    }

    /**
     * Display a listing of the ExpenseCategories.
     *
     * @param ExpenseCategoriesDataTable $expenseCategoriesDataTable
     * @return Response
     */
    public function index(ExpenseCategoriesDataTable $expenseCategoriesDataTable)
    {
        return $expenseCategoriesDataTable->render('balancesheet.expense_categories.index');
    }

    /**
     * Show the form for creating a new ExpenseCategories.
     *
     * @return Response
     */
    public function create()
    {
        return view('balancesheet.expense_categories.create');
    }

    /**
     * Store a newly created ExpenseCategories in storage.
     *
     * @param CreateExpenseCategoriesRequest $request
     *
     * @return Response
     */
    public function store(CreateExpenseCategoriesRequest $request)
    {
        $input = $request->all();

        $expenseCategories = $this->expenseCategoriesRepository->create($input);

        Flash::success('Expense Categories saved successfully.');

        return redirect(route('balancesheet.expenseCategories.index'));
    }

    /**
     * Display the specified ExpenseCategories.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $expenseCategories = $this->expenseCategoriesRepository->findWithoutFail($id);

        if (empty($expenseCategories)) {
            Flash::error('Expense Categories not found');

            return redirect(route('balancesheet.expenseCategories.index'));
        }

        return view('balancesheet.expense_categories.show')->with('expenseCategories', $expenseCategories);
    }

    /**
     * Show the form for editing the specified ExpenseCategories.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $expenseCategories = $this->expenseCategoriesRepository->findWithoutFail($id);

        if (empty($expenseCategories)) {
            Flash::error('Expense Categories not found');

            return redirect(route('balancesheet.expenseCategories.index'));
        }

        return view('balancesheet.expense_categories.edit')->with('expenseCategories', $expenseCategories);
    }

    /**
     * Update the specified ExpenseCategories in storage.
     *
     * @param  int              $id
     * @param UpdateExpenseCategoriesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExpenseCategoriesRequest $request)
    {
        $expenseCategories = $this->expenseCategoriesRepository->findWithoutFail($id);

        if (empty($expenseCategories)) {
            Flash::error('Expense Categories not found');

            return redirect(route('balancesheet.expenseCategories.index'));
        }

        $expenseCategories = $this->expenseCategoriesRepository->update($request->all(), $id);

        Flash::success('Expense Categories updated successfully.');

        return redirect(route('balancesheet.expenseCategories.index'));
    }

    /**
     * Remove the specified ExpenseCategories from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $expenseCategories = $this->expenseCategoriesRepository->findWithoutFail($id);

        if (empty($expenseCategories)) {
            Flash::error('Expense Categories not found');

            return redirect(route('balancesheet.expenseCategories.index'));
        }

        $this->expenseCategoriesRepository->delete($id);

        Flash::success('Expense Categories deleted successfully.');

        return redirect(route('balancesheet.expenseCategories.index'));
    }
}
