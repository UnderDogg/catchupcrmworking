<?php

namespace Modules\Products\Http\Controllers;

use Modules\Products\DataTables\Products\ProductsDataTable;
use App\Http\Requests\Products;
use App\Http\Requests\Products\CreateProductsRequest;
use App\Http\Requests\Products\UpdateProductsRequest;
use App\Repositories\Products\ProductsRepository;
use Flash;
use Modules\Core\Http\Controllers\AppBaseController;
use Response;

class ProductsController extends AppBaseController
{
    /** @var  ProductsRepository */
    private $productsRepository;

    public function __construct(ProductsRepository $productsRepo)
    {
        $this->productsRepository = $productsRepo;
    }

    /**
     * Display a listing of the Products.
     *
     * @param ProductsDataTable $productsDataTable
     * @return Response
     */
    public function index(ProductsDataTable $productsDataTable)
    {
        return $productsDataTable->render('products.products.index');
    }

    /**
     * Show the form for creating a new Products.
     *
     * @return Response
     */
    public function create()
    {
        return view('products::create');
    }

    /**
     * Store a newly created Products in storage.
     *
     * @param CreateProductsRequest $request
     *
     * @return Response
     */
    public function store(CreateProductsRequest $request)
    {
        $input = $request->all();

        $products = $this->productsRepository->create($input);

        Flash::success('Products saved successfully.');

        return redirect(route('products.products.index'));
    }

    /**
     * Display the specified Products.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $products = $this->productsRepository->findWithoutFail($id);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.products.index'));
        }

        return view('products::show')->with('products', $products);
    }

    /**
     * Show the form for editing the specified Products.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $products = $this->productsRepository->findWithoutFail($id);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.products.index'));
        }

        return view('products::edit')->with('products', $products);
    }

    /**
     * Update the specified Products in storage.
     *
     * @param  int              $id
     * @param UpdateProductsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductsRequest $request)
    {
        $products = $this->productsRepository->findWithoutFail($id);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.products.index'));
        }

        $products = $this->productsRepository->update($request->all(), $id);

        Flash::success('Products updated successfully.');

        return redirect(route('products.products.index'));
    }

    /**
     * Remove the specified Products from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $products = $this->productsRepository->findWithoutFail($id);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.products.index'));
        }

        $this->productsRepository->delete($id);

        Flash::success('Products deleted successfully.');

        return redirect(route('products.products.index'));
    }
}
