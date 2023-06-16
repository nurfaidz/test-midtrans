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
                    <h2>Detail</h2>
                </div>
                <img src="{{ asset($shop->image) }}" class="card-img-top" alt="img-shop">
                <div class="card-body">
                    <h5 class="card-title">{{ $shop->name }}</h5>
                    <p class="card-text">{{ $shop->price }}</p>
                    <form action="{{ route('shop.update', $shop->shop_id) }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="total_price">Total Price:</label>
                            <input type="text" class="form-control" name="total_price" id="total_price"
                                value="{{ $shop->price }}" readonly>
                        </div>
                        <button type="submit" class="btn btn-primary">Check Out</button>
                    </form>
                </div>
            </div>
        </div>

    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</body>

</html>
