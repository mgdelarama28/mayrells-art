<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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
            $profile_picture_path = $request->file('profile_picture_path');
            $vars['profile_picture_path'] = Storage::disk('s3')->putFileAs(
                'profile-pictures',
                $profile_picture_path,
                $profile_picture_path->getClientOriginalName()
            );
        endif;

    	$user->update($vars);

    	return back()->with('status', 'Account successfully updated!');
    }
}
