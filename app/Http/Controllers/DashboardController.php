<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Content;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahStaff = User::where('role', 'staff')->count();
        $jumlahContent = Content::count();
        $jumlahContact = Contact::count();
        return view('dashboard', compact('jumlahStaff', 'jumlahContent', 'jumlahContact'));
    }
}
