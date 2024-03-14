<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactFormMailable;

class FrontController extends Controller
{
    public function index()
    {
        return view('/index');
    }

    public function about_us()
    {
        return view('/about-us');
    }

    public function why_going_solar()
    {
        return view('/why-going-solar');
    }

    public function contact_form(Request $request)
    {
        $data = $request->all();

        // $checkboxAgree = $request->input('checkboxAgree') == "on" ? 1 : 0;
        try {
            
            $response = Http::withHeaders([
                'Authorization' => 'Bearer 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',
                'Content-Type' => 'application/json',
            ])
            ->post('https://api.sendgrid.com/v3/mail/send', [
                'personalizations' => [
                    [
                        'to' => [
                            [
                                'email' => 'delafuentesgo@gmail.com',
                                'name' => 'El Bocha',
                            ],
                        ],
                        'subject' => 'Volt Financial',
                    ],
                ],
                'content' => [
                    [
                        'type' => 'text/html',
                        'value' => '<!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <meta http-equiv="X-UA-Compatible" content="ie=edge">
                            <title>Contact form - Volt Financial</title>
                        </head>
                        <body>
                            <h1>You have a new contact through the contact form at Volt Financial:</h1>
                            <ul>
                                <li>First name:' . $data['firstName'] . '</li>
                                <li>Last name:' . $data['lastName'] . '</li>
                                <li>Email:' . $data['email'] . '</li>
                                <li>Phone:' . $data['phone'] . '</li>
                            </ul>
                        </body>
                        </html>',
                    ],
                ],
                'from' => [
                    'email' => 'info@voltfs.com',
                    'name' => 'Volt Financial',
                ],
                'reply_to' => [
                    'email' => 'info@voltfs.com',
                    'name' => 'Volt Financial',
                ],
            ]);

            Log::debug(["response_json" => $response->json()]);
            // Mail::to('enzo100amarilla@gmail.com')->send(new contactFormMailable($data));
            // Mail::to('appointments@voltsolarenergy.com', "Volt Financial")->send(new ScheduleConsultationOwnerMailable($data));
        } catch (\Exception $e) {
            // Manejar errores de conexión u otras excepciones
            Log::debug(["message" => $e->getMessage()]);
            return redirect('index')->with('status', 500);
        }

        return redirect('/index')->with('status', 200);
    }
}
