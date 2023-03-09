<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderProduct;


class OrderController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req = $request->request;
        $body = [];
        foreach($req as $key => $row){
            $r = explode(' ', $row);
            if(count($r) > 1) {
                $unit = str_replace('x','',$r[0]);
                $body[$key] = array(
                    "id" => $r[2],
                    "unit" => $unit,
                    "product" => $r[1]. ' ' . $r[2],
                );
            }
        }

       $order = Order::create(['status' => 'processando']);

       foreach($body as $key => $data) {
            for ($i = 0; $i < $data['unit']; $i++) {
                $insert = [
                    'order_id' => $order->id,
                    'product_id' => $data['id'],
                ];
                OrderProduct::create($insert);
            }
        }

        return response()->json(
            ['message' => 'Pedido criado com sucesso!', 'code' => 201], 201
        );

    }
}
