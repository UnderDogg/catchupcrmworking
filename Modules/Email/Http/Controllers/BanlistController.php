<?php

namespace App\Http\Controllers\Email;

use App\DataTables\Email\BanlistDataTable;
use App\Http\Requests\Email;
use App\Http\Requests\Email\CreateBanlistRequest;
use App\Http\Requests\Email\UpdateBanlistRequest;
use App\Repositories\Email\BanlistRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class BanlistController extends AppBaseController
{
    /** @var  BanlistRepository */
    private $banlistRepository;

    public function __construct(BanlistRepository $banlistRepo)
    {
        $this->banlistRepository = $banlistRepo;
    }

    /**
     * Display a listing of the Banlist.
     *
     * @param BanlistDataTable $banlistDataTable
     * @return Response
     */
    public function index(BanlistDataTable $banlistDataTable)
    {
        return $banlistDataTable->render('email.banlists.index');
    }

    /**
     * Show the form for creating a new Banlist.
     *
     * @return Response
     */
    public function create()
    {
        return view('email.banlists.create');
    }

    /**
     * Store a newly created Banlist in storage.
     *
     * @param CreateBanlistRequest $request
     *
     * @return Response
     */
    public function store(CreateBanlistRequest $request)
    {
        $input = $request->all();

        $banlist = $this->banlistRepository->create($input);

        Flash::success('Banlist saved successfully.');

        return redirect(route('email.banlists.index'));
    }

    /**
     * Display the specified Banlist.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $banlist = $this->banlistRepository->findWithoutFail($id);

        if (empty($banlist)) {
            Flash::error('Banlist not found');

            return redirect(route('email.banlists.index'));
        }

        return view('email.banlists.show')->with('banlist', $banlist);
    }

    /**
     * Show the form for editing the specified Banlist.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $banlist = $this->banlistRepository->findWithoutFail($id);

        if (empty($banlist)) {
            Flash::error('Banlist not found');

            return redirect(route('email.banlists.index'));
        }

        return view('email.banlists.edit')->with('banlist', $banlist);
    }

    /**
     * Update the specified Banlist in storage.
     *
     * @param  int              $id
     * @param UpdateBanlistRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBanlistRequest $request)
    {
        $banlist = $this->banlistRepository->findWithoutFail($id);

        if (empty($banlist)) {
            Flash::error('Banlist not found');

            return redirect(route('email.banlists.index'));
        }

        $banlist = $this->banlistRepository->update($request->all(), $id);

        Flash::success('Banlist updated successfully.');

        return redirect(route('email.banlists.index'));
    }

    /**
     * Remove the specified Banlist from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $banlist = $this->banlistRepository->findWithoutFail($id);

        if (empty($banlist)) {
            Flash::error('Banlist not found');

            return redirect(route('email.banlists.index'));
        }

        $this->banlistRepository->delete($id);

        Flash::success('Banlist deleted successfully.');

        return redirect(route('email.banlists.index'));
    }
}
