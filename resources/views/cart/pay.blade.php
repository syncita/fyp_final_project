<!DOCTYPE html>
<html>

<head>
    <title>Sayari</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        button {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 0 10px;
        }
    </style>
</head>

<body>
    <input type="text" id="itemId" value="{{ $item->id }}" hidden>
    <button id="payment-button">Make Payment</button>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        function showMessage(){
            alert("Download successful. Please check your mail");
        }
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_72dfd6c1372040cab76de660c18b0ced",
            "productIdentity": "{{ $item->id }}",
            "productName": "item",
            "productUrl": "http://127.0.0.1:8000/item/payemtpage/{{ $item->id }}",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
            ],
            "eventHandler": {
                onSuccess(payload) {
                    console.warn(payload);
                    // hit merchant api for initiating verfication
                    //Old Code
                    console.warn("Sayari your payload is here");
                    console.warn(payload);
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('khalti.verifyPayment') }}",
                        data: {
                            token: payload.token,
                            amount: payload.amount,
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(res) {
                            console.warn("Sayari you are here")
                            $.ajax({
                                type: "POST",
                                url: "{{ route('khalti.storePayment') }}",
                                data: {
                                    user_id: "{{ Auth::user()->id }}",
                                    product_identity: payload.product_identity,
                                    "_token": "{{ csrf_token() }}"
                                },
                                success: function(res) {
                                    console.warn('transaction successfull');
                                    showMessage();
                                },

                                error: function(res) {
                                    console.warn("Error response");
                                    console.warn(res);
                                    showMessage();
                                    window.location.href = "/dashboard";
                                    
                                }
                            });
                            
                        }
                    });
                    console.warn(payload);

                },
                onError(error) {
                    console.warn(error);
                },
                onClose() {
                    console.warn('widget is closing');
                }
            }
        };
        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function() {
            var amount = {{ $price * 100 }}
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({
                amount: amount
            });
        }
    </script>

</body>

</html>
