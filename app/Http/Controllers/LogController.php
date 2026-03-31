<?php
namespace App\Http\Controllers;
class LogController extends Controller
{
    public function activity(){ return view('logs.activity'); }
    public function email(){ return view('logs.email'); }
    public function failedJobs(){ return view('logs.failed-jobs'); }
}
