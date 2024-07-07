<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function generatePDF(Request $request)
    {
        // Validate request data
        $data = $request->validate([
            'created' => 'required|date',
            'by' => 'required|string',
            'status' => 'required|string',
            'transaction_id' => 'required|string',
            'electronic_signature_id' => 'required|string',
            'signed_date' => 'required|date',
            'user_logged_in' => 'required|string',
            'ip_address' => 'required|string',
        ]);

        // Load view with data
        $pdf = PDF::loadView('pdf.generated', $data);

        // Generate PDF file
        return $pdf->download('generated-pdf.pdf');
    }
}
