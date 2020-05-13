<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sensor;
use App\value;
class SensorController extends Controller
{
    public function index()
    {
        $sensors = sensor::orderBy('id', 'desc')->get();
        return view('sensors',['sensors'=>$sensors]);
    }
    public function psw(Request $request){
        $validate = $this->validate($request,[
            'value' => ['required']
        ]);
            $id = $request->input('id');
            $value = $request->input('value');
            $data = value::where('id', $id)->first();

            $data->value = $value;

            $data->save();

            return response()->json([
                'state' => 'success',
                'code' => '200'
            ]);

        }
    {
        $sensors = value::orderBy('id', 'desc')->get();
        return view('sensors',['sensors'=>$sensors]);
    }
}
