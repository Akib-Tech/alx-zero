<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    Protected function Validator(array $data){
            return Validator::make($data, [
                "nameorEmail" => ['required','string','email','unique:users'],
                "password" => ['required','string','min:8']
            ])
    }

    Public function register(array $data){
     
        $user = User::create(
            [  
                "nameorEmail" => ['required','string','email','unique:users'],
                "password" => ['required','string','min:8']
            ]
        );
 
        return "User registered successfully";
    }

    Public function loginuser(){
        return "Hello world";
    }
}
