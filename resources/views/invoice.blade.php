<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                    <h2>Invoice</h2>
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
                        <tr>
                            <td>Status:</td>
                            <td><span class="badge rounded-pill text-bg-success">{{ $orders->status }}</span></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

</body>

</html>
