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
            $message->from('reservations@hyttslogistics.com', 'Hytts Logistics');
            $message->to($data['email'], $data['name']);
            $message->replyTo('testemail@xeddtechnology.com', 'Square1 Dev Assignment');
            $message->subject('Reservations | '.$data['name']);
        });
    }

}
