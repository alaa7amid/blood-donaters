<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class settingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = setting::where('user_id',Auth::user()->id)->first();
        return view('backend.setting.index',compact('setting'));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.setting.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $setting = $request->all();
        setting::create($setting);
        return redirect()->route('settings.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $setting = setting::where('user_id',Auth::user()->id)->first();
        return view('backend.setting.edit',compact('setting')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // التحقق من صحة البيانات
        $request->validate([
            'service' => 'required|string|max:255',
            'email' => 'required|email',
            'phone1' => 'required|numeric',
            'phone2' => 'nullable|numeric',
            'location' => 'required|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'tiktok' => 'nullable|string|max:255',
        ]);

        // البحث عن الإعدادات الخاصة بالمستخدم
        $setting = Setting::where('user_id', Auth::user()->id)->first();

        // إذا كان السجل موجودًا
        if ($setting) {
            // تحديث السجل بالقيم الجديدة
            $setting->update([
                'service' => $request->service, 
                'email' => $request->email, 
                'phone1' => $request->phone1, 
                'phone2' => $request->phone2, 
                'location' => $request->location, 
                'instagram' => $request->instagram, 
                'tiktok' => $request->tiktok, 
            ]);
            
            // إعادة التوجيه مع رسالة نجاح
            return redirect()->route('settings.index')->with('success', 'تم تحديث الإعدادات بنجاح!');
        }

        // في حالة عدم العثور على السجل
        return redirect()->route('settings.index')->with('error', 'الإعدادات غير موجودة.');
    }

        

        
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
