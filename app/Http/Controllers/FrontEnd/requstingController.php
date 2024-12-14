<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use App\Models\Requsting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class requstingController extends Controller
{
    // requsting page
    public function requestingPage(){
        $hospitals = Hospital::all();
        return view('frontend.requesting',compact('hospitals'));
    }
  
    //store requsting information
    public function storeRequest(Request $request){
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
        Requsting::create($requestData);
        return redirect()->route('seccessPage'); 

    }
}
 