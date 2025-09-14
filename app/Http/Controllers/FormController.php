<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormSubmitted;

class FormController extends Controller
{
    public function showForm()
    {
        return view('responsibility-form');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'visitorName'  => 'required|string',
            'contactInfo'  => 'required|email',
            'date'         => 'required|date',
            'signature'    => 'required',
        ]);

        // Save signature as image
        $signatureData = $request->input('signature');
        $signatureData = str_replace('data:image/png;base64,', '', $signatureData);
        $signatureData = str_replace(' ', '+', $signatureData);

        $signatureFileName = 'signature_' . time() . '.png';
        $signatureFilePath = storage_path('app/public/' . $signatureFileName);
        file_put_contents($signatureFilePath, base64_decode($signatureData));

        // Generate PDF
        $pdf = \PDF::loadView('pdf.form-pdf', [
            'visitorName'    => $request->visitorName,
            'supervisorName' => $request->supervisorName,
            'contactInfo'    => $request->contactInfo,
            'date'           => $request->date,
            'signatureFile'  => $signatureFilePath, // use full path
        ]);

        $pdfFileName = 'form_' . time() . '.pdf';
        $pdfPath = storage_path('app/public/' . $pdfFileName);
        $pdf->save($pdfPath);

        // Send email with PDF attachment
        Mail::to("joelnrlson@email.com")
            ->send(new FormSubmitted($request->all(), $pdfPath));

        return back()->with('success', 'Form submitted and emailed successfully!');
    }

}
