<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index()
    {
        return view('Contact');
    }


    public function sendEmail(Request $request)
    {

        $request->validate([
            'email'   => 'required|email',
            'message' => 'required|min:5',
        ]);


        $data = [
            'senderEmail' => $request->email,
            'bodyMessage' => $request->message,
        ];


        try {
            Mail::send([], [], function ($message) use ($data) {
                $message->to('admin.id@ducati.com') 
                        ->subject('New Digital Inquiry: ' . $data['senderEmail'])
                        ->html("
                            <div style='font-family: sans-serif; line-height: 1.6;'>
                                <h2 style='color: #CC0000;'>New Inquiry Received</h2>
                                <p><strong>From:</strong> {$data['senderEmail']}</p>
                                <p><strong>Message:</strong></p>
                                <div style='background: #f4f4f4; padding: 15px; border-radius: 5px;'>
                                    " . nl2br(e($data['bodyMessage'])) . "
                                </div>
                                <br>
                                <hr>
                                <p style='font-size: 10px; color: #888;'>Sent via Ducati Support Official Channel</p>
                            </div>
                        ");
            });


            return back()->with('success', 'YOUR MESSAGE HAS BEEN SENT SUCCESSFULLY.');
            
        } catch (\Exception $e) {

            return back()->with('error', 'Something went wrong. Please try again later.');
        }
    }
}