<?php
namespace App\Http\Controllers;
class SettingsController extends Controller
{
    public function smtp(){ return view('settings.smtp'); }
    public function system(){ return view('settings.system'); }
    public function updateSmtp(){ return back()->with('success','SMTP settings saved.'); }
    public function updateSystem(){ return back()->with('success','System settings saved.'); }
}
