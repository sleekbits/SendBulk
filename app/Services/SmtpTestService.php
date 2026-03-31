<?php
namespace App\Services;
class SmtpTestService { public function testConnection(array $settings): bool { return isset($settings['host'],$settings['port']); } }
