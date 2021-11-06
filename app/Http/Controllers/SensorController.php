<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFarmRequest;
use App\Model\Device;
use App\Model\Sensor;
use App\Model\Userfarm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SensorController extends Controller
{
    public function index(){
        $data=[];
        $data['sensors'] = Sensor::get();
        $data['devices'] = Device::get();
        return view('project.sensors.index', $data);

    }



    public function store(UserFarmRequest $request)
    {


        DB::beginTransaction();

        //validation

        if (!$request->has('is_active'))
            $request->request->add(['is_active' => 0]);
        else
            $request->request->add(['is_active' => 1]);



        $user = Userfarm::create($request->except('_token'));

        $user->save();
        DB::commit();

        return redirect()->route('admin.usersFarm')->with(['success' => 'تم ألاضافة بنجاح']);



    }


    public function edit($id)
    {

        //get specific categories and its translations
        $user = Userfarm::find($id);

        if (!$user)
            return redirect()->route('admin.usersFarm')->with(['error' => 'هذا المستخدم  غير موجود ']);

        return view('project.users.edit', compact('user'));

    }


    public function update($id, UserFarmRequest $request)
    {
        try {
            //validation

            //update DB


            $user = Userfarm::find($id);

            if (!$user)
                return redirect()->route('admin.usersFarm')->with(['error' => 'هذا المستخدم غير موجود']);


            DB::beginTransaction();


            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

            $user->update($request->except('_token', 'id'));

            $user->save();

            DB::commit();
            return redirect()->route('admin.usersFarm')->with(['success' => 'تم ألتحديث بنجاح']);

        } catch (\Exception $ex) {

            DB::rollback();
            return redirect()->route('admin.usersFarm')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }



}
