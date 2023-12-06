<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://camo.githubusercontent.com/2922491d8a3b1c2196d806693d5575cc78e39781e507079b823f9333699ff0c3/687474703a2f2f7777772e74616e64656d6872636f6e73756c74616e74732e636f6d2f77702d636f6e74656e742f75706c6f6164732f323031382f30342f6c61726176656c2d7675652e706e67" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<h4>Objetivo do Projeto</h4>

Integração do laravel com VueJS, uma demonstracao simples alimentando o frontend com os dados vindo do Laravel + Banco de dados (Mysql).

<h4>Definindo - Controller Usuario</h4>

<p>app/Http/Controllers/UsuarioController<p>

<code>

namespace App\Http\Controllers;
use App\Models\Usuario;
</code>
<code>
class UsuarioController extends Controller
{
public function index()
{
$users = Usuario::all();
return view('home', ['users' => $users]);

    }

}
</code>

<p>
