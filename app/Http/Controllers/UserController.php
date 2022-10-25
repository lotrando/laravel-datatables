<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {

            $data = User::with('department');

            return DataTables::eloquent($data)
                ->addColumn('department', function (User $user) {
                    return $user->department->department_name;
                })
                ->addColumn('action', function ($data) {
                    $buttons = '
                        <center><div class="btn-group" role="group">
                            <button type="button" title="Upravit" name="edit" id="' . $data->id . '" class="edit btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></button>
                            <button type="button" title="Odstranit" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                        </div></center>
                        ';
                    return $buttons;
                })
                ->toJson();
        }

        return view('users');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
