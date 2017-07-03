<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Table;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  // public function __construct()
  // {
  //     $this->middleware('auth');
  // }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    if (Auth::check()):
      $tables = Auth::user()->tables()->orderBy('name', 'asc')->get();
    else:
      $tables = "NAHH";
    endif;

    return view('tables-saved', [
      'tables' => $tables,
      'hasTables' => Table::hasTables(),
    ]);
  }

  public function update(Request $request){
    if(Auth::check()):
      $name = $request->input('name');
      $button = $request->input('button');
      $status = $request->input('status');

      for($i = 0; $i < count($name); $i++):
        $found = false;

        foreach(Auth::user()->tables()->get() as $table):
          if($table->name == $name[$i]):
            $found = true;
          endif;
        endforeach;

        if($found):
          Auth::user()->tables()->where('name',$name[$i])->first()->update([
            'name' => $name[$i],
            'button' => $button[$i],
            'status' => $status[$i],
          ]);
        else:
          Auth::user()->tables()->create([
            'name' => $name[$i],
            'button' => $button[$i],
            'status' => $status[$i],
          ]);
        endif;

        // $table = Auth::user()->tables()->where('name',$name[$i])->firstOrFail(1);
        // if(!$table):
        //   Auth::user()->tables()->create([
        //     'name' => $name[$i],
        //     'button' => $button[$i],
        //     'status' => $status[$i],
        //   ]);
        // else:
        //   $table->update([
        //     'name' => $name[$i],
        //     'button' => $button[$i],
        //     'status' => $status[$i],
        //   ]);
        // endif;


      endfor;
    endif;

    // return $request->answer;
    $data = [
      'success' => true,
    ];
    return response()->json($data, 200);

    // return redirect('/');
    // return Auth::user()->tables()->get();
  }
}
