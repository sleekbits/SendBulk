<?php
namespace App\Http\Controllers;
class SystemController extends Controller
{
    public function health(){ return view('system.health'); }
    public function imports(){ return view('system.imports'); }
}
