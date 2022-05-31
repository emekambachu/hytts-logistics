<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Services\ReservationService;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function submit(ReservationRequest $request){

        try {
            ReservationService::sendEmail($request);
            return response()->json([
                'success' => true,
                'message' => 'Reservation successfully sent, we will call you to complete your reservation.',
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);

        }
    }
}
