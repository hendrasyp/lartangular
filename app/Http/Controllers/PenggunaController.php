<?php

namespace App\Http\Controllers;

use App\Models\mPengguna;
use App\User;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class PenggunaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function getIndex()
    {
        return view('home.index');
    }

    public function anyData()
    {
        $rows = User::get();
        return Datatables::of($rows)->make(true);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('home/index');
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
     * @param  \App\Models\mPengguna  $mPengguna
     * @return \Illuminate\Http\Response
     */
    public function show(mPengguna $mPengguna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mPengguna  $mCobacoba
     * @return \Illuminate\Http\Response
     */
    public function edit(mCobacoba $mCobacoba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mPengguna  $mCobacoba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mCobacoba $mCobacoba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mPengguna  $mCobacoba
     * @return \Illuminate\Http\Response
     */
    public function destroy(mCobacoba $mCobacoba)
    {
        //
    }
}
