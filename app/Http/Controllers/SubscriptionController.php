<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'email' => 'required|email|unique:subscriptions,email'
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }

        try {
            Subscription::create([
                'email' => $request->email,
            ]);
            $msg = "Thanks for subscribing us";
            return view('pages.successMsg', compact('msg'));
        } catch (\Exception $e) {
            Log::error("User can't subscribe for subscribtion. Get this error: ", $e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
