<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>

    <title>Test Fullstack Engineer | Nur Faidzin</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />

    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">

    <!-- BEGIN CONTENT BODY -->
    <section>
        <div class="content-body m-5">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    <h2>Check Out Detail</h2>
                </div>
                <img src="{{ asset($shop->image) }}" class="card-img-top" alt="img-shop">
                <div class="card-body">
                    <h5 class="card-title">{{ $shop->name }}</h5>
                    <p class="card-text">{{ $shop->price }}</p>
                    <h3 class="card-title">Order Detail</h3>
                    <table>
                        <tr>
                            <td>Name:</td>
                            <td>{{ $orders->name }}</td>
                        </tr>
                        <tr>
                            <td>Total Price:</td>
                            <td>{{ $orders->total_price }}</td>
                        </tr>
                    </table>
                    <button class="btn btn-primary btn-md mt-2" id="pay-button">Pay Now</button>
                </div>
            </div>
        </div>

    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript">
        let payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    window.location.href = '/invoice/{{ $orders->order_id }}/{{ $shop->shop_id }}'
                    console.log(result);
                },
                onPending: function(result) {
                    alert("wating your payment!");
                    console.log(result);
                },
                onError: function(result) {
                    alert("payment failed!");
                    console.log(result);
                },
                onClose: function() {
                    alert('you closed the popup without finishing the payment');
                }
            })
        });
    </script>
</body>

</html>
