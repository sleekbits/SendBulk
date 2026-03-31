<?php
namespace App\Jobs;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
class ProcessCampaignJob implements ShouldQueue
{
    use Queueable;
    public function __construct(public int $campaignId){}
    public function handle(): void {}
}
