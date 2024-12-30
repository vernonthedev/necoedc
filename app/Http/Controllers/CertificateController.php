<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\CategoryCertificate;

use Illuminate\Http\Request;

class CertificateController extends Controller
{

    public function index()
    {
        //
    }


    public function show(CategoryCertificate $category_certificate, Certificate $certificate)
    {
        // Ensure the certificate belongs to the given category
        if ($certificate->category_id !== $category_certificate->id) {
            abort(404, 'Certificate not found in the given category.');
        }

        return view('certificateDetails', [
            'category' => $category_certificate,
            'certificate' => $certificate,
        ]);
    }
}
