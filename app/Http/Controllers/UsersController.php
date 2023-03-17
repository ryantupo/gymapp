<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\User_extended_detail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        // Check if user is logged in
        if (Auth::check()) {
            // Get user details
            $user = Auth::user();

            $user_details = User_extended_detail::firstWhere(['user_id' => $user['id']]);

            $data = [
                'user' => $user,
                'user_details' => $user_details
            ];

            // Pass user data to view
            return view('dashboard')->with('data', $data);
        } else {
            // Redirect to login page
            return redirect('/login');
        }
    }
}
