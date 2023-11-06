<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Person;

class MainController extends Controller
{
    public function index(Request $request) {
        return view('main');
    }

    public function change_params(Request $request)
    {
        // Получить данные из запроса
        $name = $request->input('name');
        $passport = $request->input('passport');
        $email = $request->input('email');
        $about = $request->input('about');

        // Проверить уникальность email, исключая текущего пользователя
        $existingPerson = Person::where('email', $email)
            ->where('id', '!=', Auth::user()->id)
            ->first();

        if ($existingPerson) {
            return response()->json(['error' => 'Email already exists.'], 400);
        }

        // Найти запись пользователя, который вошел в систему
        $user = Auth::user();

        // Обновить данные этого пользователя
        $user->name = $name;
        $user->passport = $passport;
        $user->email = $email;
        $user->about = $about;
        $user->save();

        // Обновить данные аутентифицированного пользователя
        Auth::setUser($user);

        return response()->json(['success' => 'Data has been successfully updated.'], 200);
    }
}