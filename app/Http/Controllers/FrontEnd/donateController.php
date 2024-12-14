<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Donate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class donateController extends Controller
{
    //donate page
    public function donateInfo(){
        return view('frontend.donate');
    } 

    //store donate information 
    public function storeDonate(Request $request)
{
    // جلب جميع البيانات
    $requestData = $request->all();

    // إضافة user_id
    $requestData['user_id'] = Auth::user()->id;

    // التعامل مع الأمراض المزمنة
    $requestData = $request->all();
    $requestData['user_id'] = Auth::user()->id;
    if($request->has('chronic_diseases')){
        $requestData['chronic_diseases'] = implode(',',$request->input('chronic_diseases'));
    }

    $chronicDiseasesDetails = [];
    if($request->has('chronic_diseases')){
        foreach($request->input('chronic_diseases') as $diseas){
            $detaliField = strtolower(str_replace(' ','_',$diseas)) . '_details';
            $chronicDiseasesDetails[$diseas] = $request->input($detaliField,null);
        }
    }
    $requestData['chronic_diseases_details'] = json_encode($chronicDiseasesDetails);

    // التعامل مع الأنشطة الأخيرة
    if ($request->has('recent_activities') && is_array($request->input('recent_activities'))) {
        $requestData['recent_activities'] = implode(',', $request->input('recent_activities'));
    } else {
        $requestData['recent_activities'] = null;
    }

    // التعامل مع الأدوية
    if ($request->has('medications') && is_array($request->input('medications'))) {
        $requestData['medications'] = implode(',', $request->input('medications'));
    } else {
        $requestData['medications'] = null;
    }

    // إدخال البيانات في قاعدة البيانات
    Donate::create($requestData);

    // إعادة توجيه المستخدم إلى صفحة النجاح
    return redirect()->route('seccessPage');
}

    
}
