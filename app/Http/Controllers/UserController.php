<?php

namespace App\Http\Controllers;

use App\Models\User; //Para Realizar consultas a la BD a travez de Eloquent ORM (forma #3 de consultar a la BD)
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //Permite hacer consultas manualmente a la base de datos a traves de la clase DB::class (forma #1 y #2 de consultar a la BD)
use PhpParser\Node\Stmt\Return_;

class UserController extends Controller
{
    public function funListar()
    {
        //3 formas de consultar a la BD
        //#1. Para Listar haremos una consulta SQL a la base de datos usando la clase DB::class
        //$usuarios = DB::select("SELECT * FROM users");

        //#2. Esta otra forma de consultar la BD es usando Query Builder
        //$usuarios = DB::table("users")->select("name", "email")->get();

        //#3. Consultar a la BD usando Eloquent ORM
        $usuarios = User::get();

        return $usuarios;
    }

    public function funGuardar(Request $request)
    {
        $nombre = $request->name;
        $correo = $request->email;
        $password = $request->password;

        $usuario = new User();
        $usuario->name = $nombre;
        $usuario->email = $correo;
        $usuario->password = $password;
        $usuario->save();

        return ["mensaje" => "Usuario Registrado en la BD"];
    }

    public function funMostrar($id)
    {
        $usuario = User::findOrFail($id);
        return response()->json($usuario, 200);
    }

    public function funModificar(Request $request, $id)
    {
        $nombre = $request->name;
        $correo = $request->email;
        $password = $request->password;

        $usuario = User::findOrFail($id);

        $usuario->name = $nombre;
        $usuario->email = $correo;
        $usuario->password = $password;
        $usuario->update();

        return response()->json(["mensaje" => "Usuario Actualizado"], 200);
    }

    public function funEliminar($id) {
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return response()->json(["mensaje" => "usuario eliminado"], 200);
    }
}
