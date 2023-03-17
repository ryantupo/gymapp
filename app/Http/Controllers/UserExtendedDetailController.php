<?php

namespace App\Http\Controllers;

use App\Models\User_extended_detail;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserExtendedDetailController extends Controller
{
    public function index(Request $request)
    {
        // Check if user is logged in
        if (Auth::check()) {
            // Get user details
            $user = Auth::user();

            $user_details = User_extended_detail::firstWhere(['user_id' => $user['id']]);

            // Pass user data to view
            return view('dashboard')->with('user_details', $user_details);
        } else {
            // Redirect to login page
            return redirect('/login');
        }
    }
}
