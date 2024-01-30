<?php

namespace App\Http\Controllers;

use App\Models\assistantcontact;
use App\Http\Requests\StoreassistantcontactRequest;
use App\Http\Requests\UpdateassistantcontactRequest;

class AssistantcontactController extends Controller
{

    public function index()
    {
        // Mengambil semua data dari tabel assistantcontacts
        $assistantcontacts = assistantcontact::all();

        return view('contact', compact('assistantcontacts'));
    }
}
