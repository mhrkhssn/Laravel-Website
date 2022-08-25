<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Socialite;
use Auth;
use Exception;
use App\Models\User;

class GoogleSocialiteController extends Controller
{

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();

            $finduser = User::where('social_id', $user->id)->first();


            if ($finduser) {

                Auth::login($finduser);

                return redirect()->intended(RouteServiceProvider::HOME);

            } else {


                $finduseremail = User::where('email', $user->email)->first();

                if (!$finduseremail) {
                    $newUser = User::create([
                        'name' => $user->name,
                        'email' => $user->email,
                        'social_id' => $user->id,
                        'social_type' => 'google',
                        'password' => encrypt('my-google')
                    ]);
                    Auth::login($newUser);
                } else {
                    $finduseremail->social_id = $user->id;
                    $finduseremail->social_type = 'google';
                    $finduseremail->save();
                    Auth::login($finduseremail);
                }

                return redirect()->intended(RouteServiceProvider::HOME);

            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
