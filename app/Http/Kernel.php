<?php
namespace App\Http;
use Illuminate\Foundation\Http\Kernel as HttpKernel;
class Kernel extends HttpKernel
{ protected $routeMiddleware = ['track.activity' => \App\Http\Middleware\TrackActivity::class]; }
