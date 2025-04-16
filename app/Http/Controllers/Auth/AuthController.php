<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\MyAuth\MyAuthRequest;
use App\Http\Resources\MyAuth\MyAuthResource;
use Illuminate\Http\Request;
use App\Services\MyAuth\MyAuthService;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $myAuthService;

    public function __construct(MyAuthService $myAuthService)
    {
        $this->myAuthService = $myAuthService;
    }

    public function login(Request $request)
    {
        $user= $this->myAuthService->login($request->only('email' , 'password'));
        if($user){
            Auth::login($user);
            return match($user->role){
                    'super'=>redirect()->route('dashboard'),
            };
        }else{
            return back()->withErrors([
                'email' => 'Login yoki parol noto‘g‘ri.',
            ]);
        }
    }
}
