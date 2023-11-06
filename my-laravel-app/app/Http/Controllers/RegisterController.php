<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use Illuminate\Support\Facades\Response;

class RegisterController extends Controller
{
    public function index(Request $request) {
        return view('register');
    }

    public function generatePassword(Request $request) {

        // Генерация пароля
        $charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $passwordLength = 8;
        $generatedPassword = '';
        for ($i = 0; $i < $passwordLength; $i++) {
            $randomIndex = rand(0, strlen($charset) - 1);
            $generatedPassword .= $charset[$randomIndex];
        }
    
        // Проверка, существует ли пользователь с таким email
        $existingUser = Person::where('email', $request->email)->first();
    
        if ($existingUser) {
            return response()->json(['error' => 'User with this email already exists'], 409);
        }
        
        // Создание нового пользователя с использованием массового присвоения
        $newUser = Person::create([
            'name' => $request->input('username'),
            'email' => $request->input('email'),
            'passport' => $request->input('passport'),
            'password' => bcrypt($generatedPassword),
        ]);
    
        // Возвращаем пароль в виде JSON
        return response()->json(['password' => $generatedPassword]);
    }    
}
