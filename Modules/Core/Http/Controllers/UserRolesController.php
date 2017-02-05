<?php

namespace App\Http\Controllers\Core;

use App\DataTables\Core\UserRolesDataTable;
use App\Http\Requests\Core;
use App\Http\Requests\Core\CreateUserRolesRequest;
use App\Http\Requests\Core\UpdateUserRolesRequest;
use App\Repositories\Core\UserRolesRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class UserRolesController extends AppBaseController
{
    /** @var  UserRolesRepository */
    private $userRolesRepository;

    public function __construct(UserRolesRepository $userRolesRepo)
    {
        $this->userRolesRepository = $userRolesRepo;
    }

    /**
     * Display a listing of the UserRoles.
     *
     * @param UserRolesDataTable $userRolesDataTable
     * @return Response
     */
    public function index(UserRolesDataTable $userRolesDataTable)
    {
        return $userRolesDataTable->render('core.user_roles.index');
    }

    /**
     * Show the form for creating a new UserRoles.
     *
     * @return Response
     */
    public function create()
    {
        return view('core.user_roles.create');
    }

    /**
     * Store a newly created UserRoles in storage.
     *
     * @param CreateUserRolesRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRolesRequest $request)
    {
        $input = $request->all();

        $userRoles = $this->userRolesRepository->create($input);

        Flash::success('User Roles saved successfully.');

        return redirect(route('core.userRoles.index'));
    }

    /**
     * Display the specified UserRoles.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userRoles = $this->userRolesRepository->findWithoutFail($id);

        if (empty($userRoles)) {
            Flash::error('User Roles not found');

            return redirect(route('core.userRoles.index'));
        }

        return view('core.user_roles.show')->with('userRoles', $userRoles);
    }

    /**
     * Show the form for editing the specified UserRoles.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userRoles = $this->userRolesRepository->findWithoutFail($id);

        if (empty($userRoles)) {
            Flash::error('User Roles not found');

            return redirect(route('core.userRoles.index'));
        }

        return view('core.user_roles.edit')->with('userRoles', $userRoles);
    }

    /**
     * Update the specified UserRoles in storage.
     *
     * @param  int              $id
     * @param UpdateUserRolesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRolesRequest $request)
    {
        $userRoles = $this->userRolesRepository->findWithoutFail($id);

        if (empty($userRoles)) {
            Flash::error('User Roles not found');

            return redirect(route('core.userRoles.index'));
        }

        $userRoles = $this->userRolesRepository->update($request->all(), $id);

        Flash::success('User Roles updated successfully.');

        return redirect(route('core.userRoles.index'));
    }

    /**
     * Remove the specified UserRoles from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userRoles = $this->userRolesRepository->findWithoutFail($id);

        if (empty($userRoles)) {
            Flash::error('User Roles not found');

            return redirect(route('core.userRoles.index'));
        }

        $this->userRolesRepository->delete($id);

        Flash::success('User Roles deleted successfully.');

        return redirect(route('core.userRoles.index'));
    }
}
