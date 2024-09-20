<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Mail;
use App\Mail\VisitorNotification;
use Illuminate\Support\Facades\Log;
//use Stevebauman\Location\Facades\Location;

class TrackVisitors
{
    public function handle($request, Closure $next)
    {
        // Capture visitor information
        $ip = $request->ip();
        
        // Send notification
        $this->sendNotification($ip);

        return $next($request);
    }

    protected function sendNotification($ip)
    {
        // Send the email notification
        $bcc_email = ['youngicthub@gmail.com', ''];
        $mail = Mail::bcc($bcc_email)->send(new VisitorNotification($ip));
    }
}
