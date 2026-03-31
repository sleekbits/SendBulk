<?php
namespace App\Http\Controllers;
class ReportController extends Controller
{
    public function index(){ return view('reports.index'); }
    public function export(string $format){ return back()->with('success',"Report exported: {$format}"); }
}
