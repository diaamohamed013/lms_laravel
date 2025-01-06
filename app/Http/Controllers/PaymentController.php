<?php

namespace App\Http\Controllers;

use App\Helper\Classes\fawaterk;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        try
        {
            $payment = new fawaterk(349,1,1);
            $payment->createCustomer(
                'احمد',
                'تواب',
                'ahlsdkjflasj@gmail.com',
                '01011401555',
                'sdjfasdfsdaf');
            return $payment->createInvoice();
        }catch (\Exception $exception)
        {
            dd($exception->getMessage());
        }
    }

    public function success(Request $request)
    {
        dd($request->all());
    }

    public function fail(Request $request)
    {
        dd($request->all());
    }

    public function pending(Request $request)
    {
        dd($request->all());
    }
}
