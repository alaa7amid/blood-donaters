<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Donate;
use App\Models\Requsting;
use Illuminate\Http\Request;

class RequstingsController extends Controller
{
    public function Donaterequstings(){
        $requests = Donate::all();
        return view('backend.requstings.donateRequstings',compact('requests'));
    }
    
    public function showDonate($id)
    {
        // جلب بيانات التبرع بناءً على الـ id
        $donationRequest = Donate::find($id);
        
        // إذا لم يتم العثور على السجل، يمكن عرض رسالة خطأ أو إعادة توجيه
        if (!$donationRequest) {
            return redirect()->route('requstings')->with('error', 'Donation request not found');
        }
    
        // إعادة عرض تفاصيل التبرع
        return view('backend.requstings.DonateShow', compact('donationRequest'));
    }





    public function requstings(){
        $requests = Requsting::all();
        return view('backend.requstings.bloodRequstings',compact('requests'));
    }
    
    public function showRequstings($id)
    {  
        // جلب بيانات التبرع بناءً على الـ id
        $bloodRequest = Requsting::find($id);
        
        // إذا لم يتم العثور على السجل، يمكن عرض رسالة خطأ أو إعادة توجيه
        if (!$bloodRequest) {
            return redirect()->route('requstings')->with('error', 'Donation request not found');
        }
    
        // إعادة عرض تفاصيل التبرع
        return view('backend.requstings.bloodShow', compact('bloodRequest'));
    }
    
    
    
    
}
