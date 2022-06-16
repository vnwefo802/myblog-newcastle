<?php

namespace App\Http\Controllers;

use App\Models\Donate;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

// use App\Utils\Drive;
// use DirectoryIterator;
// use RecursiveDirectoryIterator;
// use RecursiveIteratorIterator;
// use ZipArchive;

class DonateController extends Controller
{

    public function index()
    {
        return view('donate.index');
    }

    public function donate()
    {
        $alldonate = Donate::findOrFail(1);
        return view('donate', compact('alldonate'));
    }

    public function donateCheck (Request $request) {


        $amount = $request->input('amount');

        $request->session()->put('amount', $amount);

        $json = ['status', 'success'];
        return response()->json($json);
    }

    private function calculateOrderAmount($request): int
    {
        // Replace this constant with a calculation of the order's amount
        // Calculate the order total on the server to prevent
        // people from directly manipulating the amount on the client

        $value = intval($request->session()->get('amount'));

        return $value * 10;
    }

    public function payment(Request $request)
    {
        $request->validate([
            'amount' => 'required'
        ]);


        $amount = str_replace('.', '', $request->amount);

        $request->session()->put('amount', $amount);

        return view('donate.payment', ['amount' => $request->amount]);
    }

    public function create(Request $request)
    {
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51L5rX5AqjU5JuBqtWU0ng1a61VKvokNsmlTYzunUZCHAedVuQS1RXh04Uw29qJnZQphInWmXSppIOOQDG3E3aaQI00ctMIJQOM');

        header('Content-Type: application/json');

        try {
            // retrieve JSON from POST body
            $jsonStr = file_get_contents('php://input');
            $jsonObj = json_decode($jsonStr);

            // Create a PaymentIntent with amount and currency
            $paymentIntent = \Stripe\PaymentIntent::create([
                'amount' => $this->calculateOrderAmount($request),
                'currency' => 'ngn',
                // 'automatic_payment_methods' => [
                //     'enabled' => true,
                // ],
            ]);

            $output = [
                'clientSecret' => $paymentIntent->client_secret,
            ];

            return response()->json($output);
        } catch (\Error $e) {
            http_response_code(500);
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    // public function donationForm( Request $request ){
    //     $info = [];
    //     return view( 'donation.form', $info );
    // }

    // public function donationSuccess( Request $request ){
    //     dump( "Donation Success" );
    //     dd( $request->all() );
    // }

    // public function donationCancelled( Request $request ){
    //     dump( "Donation Cancelled" );
    //     dd( $request->all() );
    // }

    // public function donationNotify( Request $request ){
    //     dump( "Donation Notify" );
    //     dd( $request->all() );
    // }
}
