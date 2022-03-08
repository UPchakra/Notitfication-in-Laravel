<?php

namespace App\Http\Controllers;

use App\Models\Notification as ModelsNotification;
use App\Models\User;
use Illuminate\Http\Request;
use Notification as N;
use App\Notifications\OffersNotification;
class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function sendOfferNotification(){

        $userSchema = User::first();
        $offerData = [
            // 'name' => 'chakra timilsina',
            'body' => 'puspa pusparaj jhukega nahi puspa naam sunke flower damjhe kya fire hu maih',
            'thanks' => 'Thank you',
            'offerText' => 'Check out the offer',
            'offerUrl' => url('/'),
            'offer_id' => 007
        ];
        // dd($offerData);
  
        N::send($userSchema, new OffersNotification($offerData));
        dd('Task completed!');
    }
}
