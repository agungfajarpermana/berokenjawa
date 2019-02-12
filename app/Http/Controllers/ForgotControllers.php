<?php

namespace App\Http\Controllers;

use App\Http\Requests\ErrorFormForgot;
use App\Http\Requests\ErrorFormReset;
use App\Events\CreateEmailReset;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Model\ResetPassword;
use App\User;

class ForgotControllers extends Controller
{
    public function index()
    {
        return view('forgot');
    }

    public function forgotsubmit(ErrorFormForgot $request)
    {
        if(!$request->ajax()) dd('Woow, Hayo mau ngapain!');
        
        $user = User::where('email', $request->email)->first();
        if($user){
            $checkLink = $this->createReset($user->email);
            
            if($checkLink == true){
                $reset = ResetPassword::where('email', $user->email)->first();
                $user = ['email'=>$user->email,'token'=>$reset->token];
                event(new CreateEmailReset($user));
            }else{
                return response()->json(['status'=>false,'msg'=>'Link telah terikirim, silahkan check email anda!.']);
            }
            return;
        }else{
            return response()->json(['status'=>false,'msg'=>'Email tidak terdaftar!.']);
        }
    }

    private function createReset($email)
    {
        $check = ResetPassword::where('email',$email)->first();
        if(!$check){
            ResetPassword::create([
                'email' => $email,
                'token' => Str::random(60)
            ]);
            return true;
        }else{
            return false;
        }
    }

    public function resetpass($email,$token)
    {
        $reset = ResetPassword::where('email',$email)->first();
        if($reset){
            if($reset->email == $email && $reset->token == $token){
                ResetPassword::where('email', $email)->delete();
                return view('reset',['email'=>$email]);
            }else{
                return redirect('/');
            }
        }else{
            return redirect('/');
        }
    }

    public function resetsubmit(ErrorFormReset $request)
    {
        if(!$request->ajax()) dd('Woow, Hayo mau ngapain!');
        User::where('email', $request->email)->update([
            'password' => bcrypt($request->password)
        ]);
    }
}
