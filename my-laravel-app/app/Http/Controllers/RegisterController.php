<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

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
        auth()->login($person);
        return redirect('/');

        // echo $person;

        // return view('register');
    }
}
