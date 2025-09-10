<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Importa el modelo de usuario
use Illuminate\Support\Facades\Hash; // Importa la fachada de Hash


Route::get('/', function () {
    return view('welcome');
});

// Ruta para la vista de registro
Route::get('/register', function () {
    return view('auth.register'); // Asume que tienes una vista en 'resources/views/auth/register.blade.php'
})->name('register');

// Ruta para procesar el formulario de registro
Route::post('/register', function (Request $request) {
    // Valida los datos del formulario
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);
    
    // Crea un nuevo usuario y hashea la contraseña
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password), // ¡Esto es clave!
    ]);
    
    // Redirige al usuario a la página de inicio de sesión o bienvenida
    return redirect('/')->with('success', '¡Registro exitoso! Ya puedes iniciar sesión.');
});

Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');
    
    if (Auth::attempt($credentials)) {
        return redirect('/dashboard');
    }
    
    return back()->with('error', 'Credenciales incorrectas');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
});