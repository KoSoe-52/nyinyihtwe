<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use App\Models\F1c;
use App\Models\F2c;
use App\Models\F3c;
use App\Models\F4c;
use App\Models\F6c;
use App\Models\Km;
use App\Models\Modelzadashar;
use App\Models\Modelzadashi;
use App\Models\Sastartmodelstructure;
use App\Models\Structure;
use App\Models\User;
class WorkspaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $f1c = F1c::all();
        $f1cTable = F1c::query();
        $f2cTable = F2c::query();
        $f3cTable = F3c::query();
        $f4cTable = F4c::query();
        $f6cTable = F6c::query();
        $countArray = array();
        if(!empty($request->get("code_structure")))
        {
            $countArray[]=$f1cTable->where("Кодструктуры","=",$request->get("code_structure")); 
            $f2cTable->where("Кодструктуры","=",$request->get("code_structure")); 
            $f3cTable->where("Кодструктуры","=",$request->get("code_structure")); 
            $f4cTable->where("Кодструктуры","=",$request->get("code_structure")); 
            $f6cTable->where("Кодструктуры","=",$request->get("code_structure"));
        }
        if(count($countArray) > 0)
        {
            $f1cTables = $f1cTable->get();
            $f2cTables = $f2cTable->get();
            $f3cTables = $f3cTable->get();
            $f4cTables = $f4cTable->get();
            $f6cTables = $f6cTable->get();
        }else
        {
            //hello
            $f1cTables = [];
            $f2cTables = [];
            $f3cTables = [];
            $f4cTables = [];
            $f6cTables = [];

        }
        //return $f1cTables;
        return view("workspace.index",compact("f1c","f1cTables","f2cTables","f3cTables","f4cTables","f6cTables"));
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
