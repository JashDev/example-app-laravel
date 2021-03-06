<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $query = "SELECT * FROM usuarios";

    $usuarios = DB::select($query);

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
    $id = $bodyRequest['id'];
    $usuario = $bodyRequest['usuario'];
    $password = $bodyRequest['password'];

    $query = "INSERT INTO usuarios(id, usuario, password) VALUES(?, ?, ?)";
//
    $ex = DB::insert($query, [
      $id,
      $usuario,
      $password
    ]);
//
    if (!$ex) {
      return response([
        'message' => 'Error al crear',
      ], 400);
    }

    return response([
      'message'  => 'Creado',
      'id'       => $id,
      'usuario'  => $usuario,
      'password' => $password,
      'ex'       => $ex
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
    $query = "SELECT * FROM usuarios WHERE id = ?";

    $usuario = DB::selectOne($query, [$id]);

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
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
