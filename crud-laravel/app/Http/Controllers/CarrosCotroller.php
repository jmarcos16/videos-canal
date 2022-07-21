<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class CarrosCotroller extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function dashboard()
  {

    $carros = Carro::all();

    return view('carros.dashboard', array(
      'carros' => $carros
    ));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view("carros.create");
  }


  public function store(Request $request)
  {
    $data = $request->all();

    try {
      $carros = Carro::create([
        'modelo' => $data['modelo'],
        'marca' => $data['marca'],
        'ano' => $data['date']
      ]);

      return redirect()->route('carros.dashboard');
    } catch (\Throwable $th) {
      dd("Erro");
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $carro = Carro::findOrFail($id);

    return view("carros.edit", array(
      'carro' => $carro
    ));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $data = $request->all();
    $carros = Carro::find($id)->update([
      'modelo' => $data['modelo'],
      'marca' => $data['marca'],
      'ano' => $data['date']
    ]);

    return redirect()->route('carros.dashboard');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $carro = Carro::destroy($id);

    return redirect()->route('carros.dashboard');
  }
}
