<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFarmRequest;
use App\Model\Device;
use App\Model\Output;
use App\Model\Timer;
use App\Model\Userfarm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TimerController extends Controller
{
    public function index(){
        $data=[];
        $data['timers']= Timer::get();
        $data['outputs']= Output::get();
        return view('project.timers.scedule', $data);

    }

    public function create()
    {
        $data = [];
        $data['outputs'] = Output::get();
        return view('project.timers.createScedule', $data);
    }





    public function store(Request $request)
    {


        DB::beginTransaction();

        //validation




        $timer = Timer::create($request->except('_token'));

        $timer->save();
        DB::commit();

        return redirect()->route('admin.timers')->with(['success' => 'تم ألاضافة بنجاح']);



    }




    public function destroy($id)
    {
        try {
            //get specific categories and its translations
            $timer = Timer::find($id);

            if (!$timer)
                return redirect()->route('admin.timers')->with(['error' => 'هذا المستخدم غير موجود ']);

            $timer->delete();

            return redirect()->route('admin.timers')->with(['success' => 'تم  الحذف بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.timers')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

}
