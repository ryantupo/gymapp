<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\User_extended_detail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;


class UsersController extends Controller
{
    public function index(Request $request)
    {
        // Check if user is logged in
        if (Auth::check()) {
            // Get user details
            $user = Auth::user();

            $user_details = User_extended_detail::firstWhere(['user_id' => $user['id']]);

            $createdAt = Carbon::parse($user['created_at']);
            $daysSinceCreation = $createdAt->diffInDays();

            $data = [
                'user' => $user,
                'user_details' => $user_details,
                'days_using_app' => $daysSinceCreation
            ];

            // Pass user data to view
            return view('dashboard')->with('data', $data);
        } else {
            // Redirect to login page
            return redirect('/login');
        }
    }
}
