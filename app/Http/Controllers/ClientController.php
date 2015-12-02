<?php

namespace TesteLaravel\Http\Controllers;

use Illuminate\Http\Request;

use TesteLaravel\Http\Requests;
use TesteLaravel\Http\Controllers\Controller;
use TesteLaravel\Repositories\ClientRepository;
use TesteLaravel\Repositories\ClientRepositoryEloquent;
use TesteLaravel\Services\ClientServices;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * @var ClientRepository
     */
    private $repository;

    /**
     * @var ClientServices
     */

    private $services;

    public function __construct(ClientRepository $repository , ClientServices $services)
    {
        $this->repository = $repository;
        $this->services = $services;

    }


    public function index()
    {
      return $this->repository->all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->services->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return $this->repository->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
