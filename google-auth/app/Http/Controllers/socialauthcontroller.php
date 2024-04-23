<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Laravel\Socialite\Facades\Socialite;


class socialauthcontroller extends Controller
{
    public function googlelogin()
    {
        return Socialite::driver('google')->with(['prompt' => 'select_account'])->redirect();
    }
    public function googleHandle()
    {
        try 
        {

            $user = Socialite::driver('google')->user();


            $findUser = User::where('email', $user->email)->first();

            if(!$findUser)
            {
                
                $newUser = new User();
                $newUser->oauth_provider = 'google';
                $newUser->oauth_uid = $user->id;
                $newUser->first_name = $user->name; 
                $newUser->email = $user->email;
                $newUser->last_name = $user->familyName ?? '';
                $newUser->gender = $user->gender;
                $newUser->locale = $user->locale;
                $newUser->picture = $user->avatar; 
               
                $newUser->save();

                
                session()->put('id', $newUser->id);
                session()->put('first_name', $newUser->first_name);
                session()->put('oauth_provider', 'google');
                session()->put('email', $newUser->email);
                session()->put('picture', $newUser->avatar);

                return view('index');
            }
            else
            {
              
                session()->put('id', $findUser->id);
                session()->put('first_name', $findUser->first_name);
                session()->put('oauth_provider', 'google');
                session()->put('email', $findUser->email);
                session()->put('picture', $findUser->picture);

                return view('index');
            }
        } 
        catch (Exception $e) 
        {
            dd($e->getMessage());
        } 
    }

    public function logout()
    {
        session()->forget(['id', 'first_name', 'oauth_provider', 'email', 'picture']);

        return view('login');
    }

}
