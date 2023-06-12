<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $githubUser = Socialite::driver('github')->user();

        $user = User::updateOrCreate([
        'github_id' => $githubUser->id,
        ], [
        'username'=>$githubUser->nickname,
        'email' => $githubUser->email,
        'github_token' => $githubUser->token,
        ]);

        Auth::login($user);

        return redirect('/');
        }
    }


