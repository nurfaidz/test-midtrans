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
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        <div class="content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="content-body m-5">
                <div class="card">
                    <div class="card-header">
                        <h2>List Product Shop</h2>
                    </div>
                    <section>
                        <div class="form-group">
                            <div class="row col-6">
                                @foreach ($shops as $shop)
                                    <div class="card-body" style="width: 18rem;">
                                        <img src="{{ asset($shop->image) }}" class="card-img-top" alt="img-shop">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $shop->name }}</h5>
                                            <p class="card-text">{{ $shop->price }}</p>
                                            <a href="{{ route('shop.show', $shop->shop_id) }}"
                                                class="btn btn-primary">Check Out</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</body>

</html>
