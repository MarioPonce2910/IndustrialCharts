<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sensor;
use App\value;
class SensorController extends Controller
{
    public function index()
    {
        $values = sensor::find(1)->values;
        $sensors = sensor::orderBy('id', 'desc')->get();
        return view('sensors',['sensors'=>$sensors],['values'=>$values]);
    }
    public function post(Request $request){
        $validate = $this->validate($request,[
            'value' => ['required'],
        ]);
            $id = $request->input('id');
            $value = $request->input('value');
            $date = date('Y-m-d');
            $hr = date('His');

            $data = new value;

            $data->values = $value;
            $data->sensor_id = $id;
            $data->date = $date;
            $data->hr = $hr;

            $data->save();

            return response()->json([
                'state' => 'success',
                'code' => '200'
            ]);

        }
}
