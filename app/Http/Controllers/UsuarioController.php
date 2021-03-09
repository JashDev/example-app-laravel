<?php

namespace App\Http\Controllers;

use App\Models\Usuarios\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $usuarios = Usuario::where('usuario', 'LIKE', "%us%")
      ->where('password', '=', '12312')
      ->where('id', 3)
      ->get();

//    $query = "SELECT * FROM usuarios where usuario LIKE "%us% AND password = '12312' AND id = 3";
//
//    $usuarios = DB::select($query);

    return response([
      'usuarios' => $usuarios
    ], 200);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store()
  {
    $bodyRequest = request()->post();

//    [
//      'id' => 1,
//      'usuario' => 'asdfasd',
//      'password' => 'asdfasdf'
//    ]

//    $id = $bodyRequest['id'];
//    $usuario = $bodyRequest['usuario'];
//    $password = $bodyRequest['password'];

    $u = new Usuario($bodyRequest);
//    $u->id = 99;
//    $u->id = $id;
//    $u->usuario = $usuario;
//    $u->password = $password;

    $u->save();

//    $query = "INSERT INTO usuarios(id, usuario, password) VALUES(?, ?, ?)";
////
//    $ex = DB::insert($query, [
//      $id,
//      $usuario,
//      $password
//    ]);
////
//    if (!$ex) {
//      return response([
//        'message' => 'Error al crear',
//      ], 400);
//    }

    return response([
      'message' => 'Creado',
      'u'       => $u
//      'id'       => $id,
//      'usuario'  => $usuario,
//      'password' => $password,
//      'ex'       => $ex
    ], 200);
  }

  /**
   * Display the specified resource.
   *
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $usuario = Usuario::select([
      'usuario',
      'id'
    ])
      ->where('id', $id)
      ->first();

//    $query = "SELECT usuario, id FROM usuarios WHERE id = ?";
//
//    $usuario = DB::selectOne($query, [$id]);

    if (!$usuario) {
      return response([
        'message' => 'El usuario no pudo ser encontrado'
      ], 400);
    }

    return response([
      'usuario' => $usuario
    ], 200);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $usuario = Usuario::find($id);

    if (!$usuario) {
      return response([
        'message' => 'El usuario no pudo ser encontrado'
      ], 400);
    }

    $usuario->usuario = 'nuevo usuario';
    $usuario->password = 'bbbbbb';

    $usuario->save();
    return response([
      'usuario' => $usuario
    ], 200);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $usuario = Usuario::find($id);
    if (!$usuario) {
      return response([
        'message' => 'El usuario no pudo ser encontrado'
      ], 400);
    }
    $usuario->delete();

    return response([
      'usuario' => $usuario
    ], 200);
  }
}
