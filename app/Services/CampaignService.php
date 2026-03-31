<?php
namespace App\Services;
class CampaignService { public function canSend(array $campaign): bool { return in_array($campaign['status'] ?? 'draft',['draft','scheduled','paused'],true); } }
