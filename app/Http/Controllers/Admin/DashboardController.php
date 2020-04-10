<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    	return view('admin.pages.dashboard');
    }

    public function accountSettings()
    {
    	$user = Auth::user();

        return view('admin.pages.account-settings', [
        	'user' => $user,
        ]);
    }

    public function updateAccountSettings(Request $request)
    {
    	$user = Auth::user();
    	$vars = $request->except(['_token', 'profile_picture_path']);

        if ($request->profile_picture_path):
            $vars['profile_picture_path'] = $request->profile_picture_path->store('profile-pictures', 'public');
        endif;

    	$user->update($vars);

    	return back()->with('status', 'Account successfully updated!');
    }
}
