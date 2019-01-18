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
//        $form = '';
        try {
            $key = config(' redsys.key ');
//            Redsys::setAmount(rand(10, 600));
//            Redsys::setOrder(time());
//            Redsys::setMerchantcode('999008881'); // Replace with the code provided by the Redsys bank :
//
//
//            Redsys::setLanguage('002');
//
//            Redsys::setCurrency('978');
//            Redsys::setTransactiontype('0');
//            Redsys::setTerminal('1');
//            Redsys::setMethod('T'); //Solo pago con tarjeta, no mostramos iupay
//            Redsys::setNotification(config('redsys.url_notification')); //Url de notificacion
//            Redsys::setUrlOk(config('redsys.url_ok')); //Url OK
//            Redsys::setUrlKo(config('redsys.url_ko')); //Url KO
//            Redsys::setVersion('HMAC_SHA256_V1');
//            Redsys::setTradeName('Tienda S.L');
//            Redsys::setTitular('Pedro Risco');
//            Redsys::setProductDescription('Compras varias');
//            Redsys::setEnviroment('test'); //Entorno test

//            $amount = 50;
//            $des = 'Compra de entradas';
//            $order = time();
//            $key = config('redsys.key');
//            $merchantcode = '999008881';
//            $terminal = config('redsys.terminal');
//            $enviroment = config('redsys.enviroment');
//            $urlOk = url(config('redsys.url_ok'));
//            $urlKo = url(config('redsys.url_ko'));
//            $urlNotification = url(config('redsys.url_notification'));
//            $tradeName = 'Tienda S.L';
//            $titular = 'Pedro Risco';
//            $description = $des ? $des : config('redsys.description');
//            Redsys::setAmount($amount);
//            Redsys::setOrder($order);
//            Redsys::setMerchantcode($merchantcode);
//            Redsys::setCurrency('978');
//            Redsys::setTransactiontype('0');
//            Redsys::setTerminal($terminal);
//            Redsys::setMethod('T');
//            Redsys::setNotification(config('redsys.url_notification'));
//            Redsys::setUrlOk(config('redsys.url_ok'));
//            Redsys::setUrlKo(config('redsys.url_ko'));
//            Redsys::setVersion('HMAC_SHA256_V1');
//            Redsys::setTradeName($tradeName);
//            Redsys::setTitular($titular);
//            Redsys::setProductDescription($description);
//            Redsys::setEnviroment($enviroment);
//
//            $signature = Redsys::generateMerchantSignature($key);
//            Redsys::setMerchantSignature($signature);

            Redsys::setAmount(rand(10, 600));
            Redsys::setOrder(time());
            Redsys::setMerchantcode('999008881'); //Reemplazar por el código que proporciona el banco
            Redsys::setCurrency('978');
            Redsys::setTransactiontype('0');
            Redsys::setTerminal('1');
            Redsys::setMethod('C'); //Solo pago con tarjeta, no mostramos iupay
            Redsys::setNotification('http://localhost/noti.php'); //Url de notificacion
            Redsys::setUrlOk('http://localhost/ok.php'); //Url OK
            Redsys::setUrlKo('http://localhost/ko.php'); //Url KO
            Redsys::setVersion('HMAC_SHA256_V1');
            Redsys::setTradeName('Tienda S.L');
            Redsys::setTitular('Pedro Risco');

            Redsys::setPan('4548812049400004'); //Número de la tarjeta
            Redsys::setExpiryDate('2012'); //AAMM (año y mes)
            Redsys::setCVV2('123'); //CVV2 de la tarjeta

            Redsys::setEnvironment('test'); //Entorno test

            $signature = Redsys::generateMerchantSignature($key);
            Redsys::setMerchantSignature($signature);

//            $signature = Redsys::generateMerchantSignature($key);
//            Redsys::setMerchantSignature($signature);

//            $form = Redsys::createForm();
            Redsys::setAttributesSubmit('btn_submit', 'btn_id', 'Enviar', 'display:none');

            return Redsys::executeRedirection();
            dd($form);
            return $form;
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
