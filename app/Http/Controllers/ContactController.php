<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        $staff = [
            [
                'name' => 'Jordan',
                'image' => '/images/staff-1.jpg',
                'position' => 'Manager',
                'desc' => 'lorem lorem lorem lorem lorem lorem lorem lorem'
                
            ],
            [
                'name' => 'Mike',
                'image' => '/images/staff-4.jpg',
                'position' => 'Asst Manager',
                'desc' => 'lorem lorem lorem lorem lorem lorem lorem lorem'
            ],
            [
                'name' => 'Pedro',
                'image' => '/images/staff-5.jpg',
                'position' => 'Volunteer',
                'desc' => 'lorem lorem lorem lorem lorem lorem lorem lorem'
            ],

        ];
        return view('home',[
            'staff' => $staff,
        ]);
    }
    public function sendEmail(Request $request)
    {
        $name = $request->input('Name');
        $email = $request->input('Email');
        $message = $request->input('Message');

        $data = [
            'name'=> $name,
            'email' => $email,
            'message' => $message
        ];

        Mail::to('olakunlesanda1@gmail.com')
        ->send(new ContactMail($data));

        return redirect('/')->with('msg','email sent');
    }
}
