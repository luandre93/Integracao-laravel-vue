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

-   <b>app/Http/Controllers/UsuarioController.php</b>

<p>Aqui é definido camada de controle dos dados que iremos renderizar.</p>

```
namespace App\Http\Controllers;

use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        $users = Usuario::all();
        return view('home', ['users' => $users]);

    }
}
```

<h4>Sobre - Model Usuario</h4>

-   <b>app/Http/Models/Usuario.php</b>

<p>Aqui é definido quais campos iremos ler da tabela users do nosso banco de dados.</p>

```
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'username',
        'email',
        'permitted',
        'user_ad',
        'password',
        'name',
    ];
}
```

<h4>Sobre - Pasta dos Components</h4>

-   <b>app\resources\js</b>

<p>Pasta responsavel por armazenar os arquivos do frontend </p>

-   App.js - Arquivo responsavel por dar o start na renderização dos componentes.
-   Components - Pasta que representa os nossos componentes .VUE.

<h4>Sobre  - Pasta Views Blade</h4>

-   <b>app\resources\views </b>

Aonde fica armazenado os arquivos blade.php responsavel por fazer a renderização das paginas.

<h4>Sobre  - Arquivo ".env"</h4>

-   <b>.env</b>

nesse arquivos definimos em qual banco de dados iremos conectar conforme abaixo.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crud
DB_USERNAME=root
DB_PASSWORD=
```
