<?php
namespace App\Policies;
use App\Models\User;
class CampaignPolicy { public function manage(User $user): bool { return $user->hasAnyRole(['Super Admin','Admin','Campaign Manager']); } }
