<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function resume()
    {
        return view('resume.index');
    }
    public function resume_download(Request $request)
    {
        $data = [];
        $pdf = PDF::setPaper('a4', 'portrait')->loadView('resume.pdf', $data);
        return $pdf->download('resume.pdf');
    }
}
