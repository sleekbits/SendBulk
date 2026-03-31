<?php
namespace App\Http\Controllers;
class ContactController extends BaseCrudController
{
    protected string $view = 'contacts';
    public function import(){ return back()->with('success','Contacts import queued.'); }
    public function export(string $type){ return back()->with('success',"Contacts exported: {$type}"); }
}
