<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\PaymentPlatform;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function pay(Request $request)
    {
        $request->validate([

            'value'=> 'required|min:5|numeric',
            'currency' => 'required|exists:currencies,iso',
             'payment_platform' => 'required|exists:payment_platforms,id'
        ]);

        return $request->all();

    }

        public function cancel(){

            //
        }
        public function approve(){

            //
        }



}
