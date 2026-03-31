<?php
namespace App\Notifications;
use Illuminate\Bus\Queueable;use Illuminate\Notifications\Notification;
class CampaignFinishedNotification extends Notification { use Queueable; public function via(object $n): array { return ['database']; } public function toArray(object $n): array { return ['message'=>'Campaign completed']; } }
