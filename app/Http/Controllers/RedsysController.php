<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ssheduardo\Redsys\Facades\Redsys;


class RedsysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //  return view('/redsys')->with('post','$amount');
        try {
            $key = 'sq7HjrUOBfKmC576ILgskD5srU870gJ7';

            Redsys::setAmount($_POST['amount']);
            Redsys::setOrder(time());
            Redsys::setMerchantcode('348605437'); //Reemplazar por el código que proporciona el banco
            Redsys::setCurrency('978');
            Redsys::setTransactiontype('0');
            Redsys::setTerminal('1');
            Redsys::setMethod('T'); //Solo pago con tarjeta, no mostramos iupay
            Redsys::setNotification(config('http://localhost')); //Url de notificacion
            Redsys::setUrlOk(config('http://localhost/ok.php')); //Url OK
            Redsys::setUrlKo(config('http://localhost/ko.php')); //Url KO
            Redsys::setVersion('HMAC_SHA256_V1');
            Redsys::setTradeName('Bol Barcelona');
            Redsys::setTitular('Sylvain Cazali');
            Redsys::setProductDescription('Compras varias');
            Redsys::setEnviroment('test'); //Entorno test
            Redsys::setAttributesSubmit('btn_submit', 'btn_id', 'send', 'display:none; color:#ff00c1');


            $signature = Redsys::generateMerchantSignature($key);
            Redsys::setMerchantSignature($signature);
            $form = Redsys::executeRedirection();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
