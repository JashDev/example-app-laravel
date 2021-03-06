<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// CRUD
class PruebaController extends Controller
{
  public function index()
  {
//      request();
//      response();
    return response([
      'message' => 'get ok'
    ], 200);
  }

  public function show($id)
  {
    return response([
      'message' => 'show ok',
      'id'      => $id
    ], 200);
  }

  public function store()
  {
    return response([
      'message' => 'post ok'
    ], 200);
  }

  public function update($id)
  {
    return response([
      'message' => 'put ok corregido despues de no darsecuetna',
      'id'      => $id
    ], 200);
  }

  public function destroy($id)
  {
    return response([
      'message' => 'delete ok',
      'id'      => $id
    ], 200);
  }
}
