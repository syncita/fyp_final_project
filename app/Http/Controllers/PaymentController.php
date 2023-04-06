<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Purchase;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function verifyPayment(Request $request)
    {
        $token = $request->token;

        $args = http_build_query(array(
            'token' => $token,
            'amount'  => $request->amount
        ));

        $url = "https://khalti.com/api/v2/payment/verify/";

        # Make the call using API.
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $args);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $secret_key = "test_secret_key_ca0364abbcbf45d2a826a9d044b0131a";

        $headers = ["Authorization: Key $secret_key"];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // Response
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }




    public function storePayment(Request $request)
    {

        $purchase = new Purchase();
        $purchase->user_id = $request->user_id;
        $purchase->post_id = $request->product_identity;
        $purchase->save();

        $user = User::where("id", $request->user_id)->first();
        $book = Post::where('id', $request->product_identity)->first();
        sendEmail($user->email, $user->name, $book->title, $book->description);

        dd($request->all());
    }
}
