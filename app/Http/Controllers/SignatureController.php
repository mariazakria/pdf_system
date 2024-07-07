<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signature;
use Illuminate\Support\Facades\Auth;

class SignatureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('signature.create');
    }

   public function store(Request $request)
    {
        // Validate incoming requests if needed
        $request->validate([
            'signature' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Example validation for an image upload
        ]);

        // Handle file upload if applicable
        if ($request->hasFile('signature')) {
            // Get file name with extension
            $fileNameWithExt = $request->file('signature')->getClientOriginalName();
            
            // Get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            
            // Get just extension
            $extension = $request->file('signature')->getClientOriginalExtension();
            
            // Filename to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            
            // Upload Image
            $path = $request->file('signature')->storeAs('public/signatures', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        // Other logic to save the file path to database or perform other operations

        // Return a response or redirect
        return redirect('/')->with('success', 'Signature uploaded successfully.');
    }
}
