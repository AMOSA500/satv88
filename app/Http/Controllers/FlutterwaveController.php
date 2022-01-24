<?php

namespace App\Http\Controllers;

use toastr;
use App\Models\Invoice;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use KingFlamez\Rave\Facades\Rave as Flutterwave;
use Session;

class FlutterwaveController extends Controller
{
    /**
     * Initialize Rave payment process
     * @return void
     */

   
    public function initialize(Request $request)
    {
        // Store Invoice Number at first pay click
        Session::forget('unpaidInvoiceNo');
        $unpaidInvoiceNo = \App\Models\Invoice::getUnpaidInvoiceNo(Auth()->user()->id);
        Session::put('unpaidInvoiceNo',$unpaidInvoiceNo);
        //This generates a payment reference
        $reference = Flutterwave::generateReference();

        // Enter the details of the payment
        $invoice_value = \App\Models\Invoice::subTotal(Auth()->user()->id);
        
        $data = [
            'payment_options' => 'card,banktransfer',
            'amount' => $invoice_value,
            'email' => $request->input("email"),
            'tx_ref' => $reference,
            'currency' => "USD",
            'redirect_url' => route('callback'),
            'customer' => [
                'email' => $request->input("email"),
                "phone_number" => $request->input("phone"),
                "name" => $request->input("name")
            ],

            "customizations" => [
                "title" => 'WorldCast HDTV',
                "description" => "WorldCast High Definition Television"
            ]
        ];

        $payment = Flutterwave::initializePayment($data);


        if ($payment['status'] !== 'success') {
            // notify something went wrong
            toastr()->error('Transaction Failed','Something went wrong. Kindly try again');
            return redirect()->route('account_subscription','invoice');
        }

        return redirect($payment['data']['link']);
    }

    /**
     * Obtain Rave callback information
     * @return void
     */
    public function callback()
    {
        
        $status = request()->status;

        //if payment is successful
        if ($status ==  'successful') {
        
        $transactionID = Flutterwave::getTransactionIDFromCallback();
        $data = Flutterwave::verifyTransaction($transactionID);

        //Store Payment
        $pay = new Payment();
        $pay->tx_ref = $data['data']['tx_ref'];
        $pay->name = $data['data']['customer']['name'];
        $pay->phone = $data['data']['customer']['phone_number'];
        $pay->email = $data['data']['customer']['email'];
        $pay->ip = $data['data']['ip'];
        $pay->payment_type = $data['data']['payment_type'];
        $pay->status = $data['data']['status'];
        $pay->charged_amount = $data['data']['charged_amount'];
        $pay->app_fee = $data['data']['app_fee'];
        $pay->amount_settled = $data['data']['amount_settled'];
        $saved = $pay->save();
       if($saved){
            //Update Invoice
            $id = Auth()->user()->id;
            //Get Session of InvoiceNo
            $unpaidInvoiceNo = Session::get('unpaidInvoiceNo');
           foreach ($unpaidInvoiceNo as $value) {
            Invoice::where('user_id',$id)->where('invoice_no',$value->invoice_no)->update([
                'payment_ref' => $data['data']['tx_ref'],
                'package_status' => true,
            ]);
           }
       }
        
        toastr()->success('#'.$transactionID.' - Transaction successful','Your payment has been received. Thank you for your patronage');
        return redirect()->route('account_subscription','history');;
        }
        elseif ($status ==  'cancelled'){
            //Put desired action/code after transaction has been cancelled here
            toastr()->error('You cancelled the transaction');
            return redirect()->route('account_subscription','invoice');
        }
        else{
            //Put desired action/code after transaction has failed here
            toastr()->error('Your payment was declined');
            return redirect()->route('account_subscription','invoice');
        }
        // Get the transaction from your DB using the transaction reference (txref)
        // Check if you have previously given value for the transaction. If you have, redirect to your successpage else, continue
        // Confirm that the currency on your db transaction is equal to the returned currency
        // Confirm that the db transaction amount is equal to the returned amount
        // Update the db transaction record (including parameters that didn't exist before the transaction is completed. for audit purpose)
        // Give value for the transaction
        // Update the transaction to note that you have given value for the transaction
        // You can also redirect to your success page from here

    }
}