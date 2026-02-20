<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    @php
        $theme = $theme ?? 'movies';
        $products = $products ?? [];
    @endphp
    <title>Products - {{ ucfirst($theme) }} Theme</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-light">
<div class="container py-5">
    <h1 class="mb-4 text-center">Product List ({{ ucfirst($theme) }} Theme)</h1>

    {{-- Theme selector – currently only "movies" --}}
    <div class="mb-4 text-center">
        <a href="{{ route('products.theme', 'movies', false) }}" class="btn btn-primary">
            Movies Theme
        </a>
    </div>

    @if (count($products) === 0)
        <p class="text-center">No products available for this theme.</p>
    @else
        <div class="row g-4">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product['title'] }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                {{ $product['category'] }}
                            </h6>
                            <p class="card-text">
                                {{ $product['description'] }}
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span class="fw-bold">${{ number_format($product['price'], 2) }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
</body>
</html>