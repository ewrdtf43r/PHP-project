<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use Illuminate\Support\Facades\Response;

class RegisterController extends Controller
{
    public function index(Request $request) {
        // Создайте новую запись
        // $person = new Person;
        // $person->name = 'Laprizz'; // Замените на реальное имя
        // $person->email = 'ewrdtf43r@gmail.com'; // Замените на реальный email
        // $person->password = bcrypt('QSCesz13579'); // Замените на реальный пароль
        // $person->passport = '1245'; // Замените на реальный номер паспорта

        // // Сохраните запись в базе данных
        // $person->save();

        $person = Person::where('name', 'Laprizz')->first();
        $personName = $person->name;
        // auth()->login($person);
        // return redirect('/');

        // echo $person;

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

        // Возвращаем пароль в виде JSON
        return Response::json(['password' => $generatedPassword]);
    }
}
