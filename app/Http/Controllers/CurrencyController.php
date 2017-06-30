<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
                {
                    $currency1    = filter_input(INPUT_POST, 'currency1');
                    $currency2    = filter_input(INPUT_POST, 'currency2');
                    $amount_input = filter_input(INPUT_POST, 'amount_input');

                    $currencies = array(
                        'USD' => 1,
                        'CAD' => 1.234100162,
                        'NGR' => 350.25,
                        'EUR' => 0.772200772,
                        'GDP' => 0.726532984
                 );

            $amount_output = ($amount_input/$currencies[$currency1])*$currencies[$currency2];

            return view('home.index')->withAmount_output($amount_output);
    }

   

   

}
