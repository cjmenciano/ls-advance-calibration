<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\RequestQuoteMail;
use App\Mail\ThankQuoteMail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    // Handles GET request
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function iso()
    {
        return view('iso');
    }

    public function services()
    {
        return view('services');
    }

    public function quote()
    {
        return view('quote');
    }

    public function products()
    {
        return view('products');
    }

    public function trainingprograms()
    {
        return view('trainingprograms');
    }

    public function faq()
    {
        return view('faq');
    }

    public function contact()
    {
        return view('contact');
    }

    // End of Handles GET request

    // Handles POST request

    public function handleFormQuote(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'companyName' => 'required|string|max:150',
            'companyAddress' => 'required|string|max:150',
            'phoneNumber' => 'required|numeric',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Process the data (e.g., save to database)
        // Example: Model::create($validated);

        // Send the email
        Mail::to('xcerys22@gmail.com')->send(new RequestQuoteMail($validated));
        Mail::to($validated['email'])->send(new ThankQuoteMail($validated));

        //return response()->json(['message' => 'Request sent successfully!']);
        return redirect()->back()->with('success', 'Request sent successfully!');
    }

    public function handleFormContact()
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phoneNumber' => 'required|numeric',
            'subject' => 'required|string|max:150',
            'message' => 'required|string',
        ]);

        // Process the data (e.g., save to database)
        // Example: Model::create($validated);

        return response()->json(['message' => 'Message sent successfully!']);
    }

    // End of Handles POST request
}
