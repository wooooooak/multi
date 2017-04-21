<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SocialContoller;

class SocialController extends Controller
{

      public function __construct()
    {
      $this->middleware('guest');
    }

    public function execute(Request $request, $provider)
    {
      if(! $request->has('code')){
        return $this->redirectToProvider($provider);
      }

      return $this->handleProviderCallback($provider);
    }


    public function redirectToProvider($provider)
    {
      return \Socialite::driver($provider)->redirect();
    }


    //소셜 로그인을 위한 콜백 URL은 제3자 서비스에서 되돌아올 때만 유효합니다.
    //로그인을 할때 소셜로그인 설정을 myapp2.dev:8000으로 했으므로
    //myapp2.dev 로 접속해야만 가능하다!!
    public function handleProviderCallback($provider)
    {

      $user = \Socialite::driver($provider)->user();
      //dd($user);

      try {
    $user = (\App\User::whereEmail($user->getEmail())->first())
        ?: \App\User::create([
        'name' => $user->getName()?:'unknown',
        'email' => $user->getEmail(),
        'activated' =>1,
        ]);
    } catch (\Exception $e) {
    \Log::debug($e);
    throw $e;
    }

      auth()->login($user);
      flash( auth()->user()->name . "님 환영합니다.");

      return redirect('/');
    }
}
