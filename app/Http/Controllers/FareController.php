<?php

namespace App\Http\Controllers;

use App\Models\Fare;
use App\Models\Operator;
use Illuminate\Http\Request;

class FareController extends Controller
{
    public function index()
    {
        //chamar uma view
        return view("index", ['operators' => Operator::all()]);
    }

    public function store(Request $request)
    {
        if (empty($request->fare) && empty($request->operator_id)) {
            $returnData['return'] = [
                'css' => 'danger',
                'message' => 'Todos os campos são necessários!',
            ];
            session()->put($returnData);
            session()->save();
            return redirect()->route("home");
        }

        if (empty($request->fare)) {
            $returnData['return'] = [
                'css' => 'danger',
                'message' => 'Informe o valor da tarifa a ser cadastrada',
            ];
            session()->put($returnData);
            session()->save();
            return redirect()->route("home");
        }
        if (empty($request->operator_id)) {

            $returnData['return'] = [
                'css' => 'danger',
                'message' => 'Informe o código da operadora para a tarifa',
            ];
            session()->put($returnData);
            session()->save();
            return redirect()->route("home");
        }

        Fare::insert([
            'operator_id' => $request->operator_id,
            'status' => 'Ativa',
            'value' => str_replace(",", '.', $request->fare),
        ]);

        $returnData['return'] = [
            'css' => 'success',
            'message' => 'Tarifa cadastrada com sucesso!',
        ];
        session()->put($returnData);
        session()->save();
        return redirect()->route("home");
    }
}
