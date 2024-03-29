<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;

/**
 * Class ReservationService.
 */
class ReservationService{

    public static function sendEmail($request){

        $input = $request->all();

        $data = [
            'name' => $input['name'],
            'email' => $input['email'],
            'from' => $input['from'],
            'to' => $input['to'],
            'description' => $input['description'],
        ];

        Mail::send('email', $data, static function ($message) use ($data) {
            $message->from('info@hyttslogistics.com', 'Hytts Logistics');
            $message->to('reservations@hyttslogistics.com', 'Hytts Logistics');
            $message->replyTo('info@hyttslogistics.com', 'Hytts Logistics');
            $message->subject('Reservations | '.$data['name']);
        });
    }

}
