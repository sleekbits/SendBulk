<?php
namespace App\Http\Controllers;
use App\Jobs\ProcessCampaignJob;
class CampaignController extends BaseCrudController
{
    protected string $view = 'campaigns';
    public function send(int $campaign){ ProcessCampaignJob::dispatch($campaign); return back()->with('success','Campaign queued.'); }
    public function pause(int $campaign){ return back()->with('success',"Campaign #{$campaign} paused."); }
    public function resume(int $campaign){ return back()->with('success',"Campaign #{$campaign} resumed."); }
}
