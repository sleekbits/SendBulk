<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;use Illuminate\Mail\Mailable;
class CampaignMail extends Mailable
{ use Queueable; public function __construct(public string $subjectLine, public string $html){}
  public function build(): self { return $this->subject($this->subjectLine)->html($this->html); }
}
