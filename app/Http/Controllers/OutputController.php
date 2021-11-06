<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFarmRequest;
use App\Model\Device;
use App\Model\Output;
use App\Model\Userfarm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OutputController extends Controller
{
    public function index(){
        $outputs= Output::get();
        return view('project.outputs.control', compact('outputs'));

    }

    public function indexTimer(){
        $outputs= Output::get();
        return view('project.outputs.scedule', compact('outputs'));

    }




    public function update($id, Request $request)
    {

            //validation

            //update DB


            $output = Output::find($id);


            DB::beginTransaction();


            if (!$request->has('state'))
                $request->request->add(['state' => 0]);
            else
                $request->request->add(['state' => 1]);

            $output->update($request->except('_token', 'id'));

            $output->save();

            DB::commit();
            return redirect()->route('admin.outputs')->with(['success' => 'تم ألتحديث بنجاح']);






    }




}
