<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;

use App\Traits\Enlist;

use Auth;;
use Carbon\Carbon;
use DB;
use Gate;

class AccountController extends Controller
{
    use Enlist;

    /**
     * Display a listing of the resource with paramters.
     *
     * @return \Illuminate\Http\Response
     */
    public function enlist(Request $request)
    {
        $this->model = Account::query();

        $this->populate($request);

        if($request->has('first'))
        {
            return $this->model->first();
        }

        if($request->has('paginate'))
        {
            return $this->model->paginate($request->paginate);
        }

        return $this->model->get();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
    }
}
