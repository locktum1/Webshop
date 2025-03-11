<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
=======
>>>>>>> f46fd55 (Re-made product page, added search page, added responsive displaying of stored products in database, fixed bugs)
    <title>Webshop</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body id="search">
    <div class="bg">
        <header>
            <x-header></x-header>
        </header>
        <x-side-bar></x-side-bar>
        <main>
<<<<<<< HEAD
            <input type="text" placeholder="Search">
            <div class="productContainer">
                <x-product route="{{ route('product') }}" src="{{ asset('assets/Luffy-Mousepad.png') }}" name="Luffy Mouse Pad" price="£19.99"></x-product>
                <x-product route="{{ route('product') }}" src="{{ asset('assets/Zoro2-Mousepad.png') }}" name="Zoro Mouse Pad" price="£24.99"></x-product>
                <x-product route="{{ route('product') }}" src="{{ asset('assets/DemonSlayer-Mousepad.png') }}" name="Demon Slayer Mouse Pad" price="£19.99"></x-product>
                <x-product route="{{ route('product') }}" src="{{ asset('assets/Luffy-Mousepad.png') }}" name="Luffy Mouse Pad" price="£19.99"></x-product>
                <x-product route="{{ route('product') }}" src="{{ asset('assets/DemonSlayer-Mousepad.png') }}" name="Demon Slayer Mouse Pad" price="£19.99"></x-product>
                <x-product route="{{ route('product') }}" src="{{ asset('assets/Luffy-Mousepad.png') }}" name="Luffy Mouse Pad" price="£19.99"></x-product>
                <x-product route="{{ route('product') }}" src="{{ asset('assets/Zoro2-Mousepad.png') }}" name="Zoro Mouse Pad" price="£24.99"></x-product>
                <x-product route="{{ route('product') }}" src="{{ asset('assets/DemonSlayer-Mousepad.png') }}" name="Demon Slayer Mouse Pad" price="£19.99"></x-product>
                <x-product route="{{ route('product') }}" src="{{ asset('assets/Luffy-Mousepad.png') }}" name="Luffy Mouse Pad" price="£19.99"></x-product>
                <x-product route="{{ route('product') }}" src="{{ asset('assets/Luffy-Mousepad.png') }}" name="Luffy Mouse Pad" price="£19.99"></x-product>
                <x-product route="{{ route('product') }}" src="{{ asset('assets/Zoro2-Mousepad.png') }}" name="Zoro Mouse Pad" price="£24.99"></x-product>
                <x-product route="{{ route('product') }}" src="{{ asset('assets/DemonSlayer-Mousepad.png') }}" name="Demon Slayer Mouse Pad" price="£19.99"></x-product>
                <x-product route="{{ route('product') }}" src="{{ asset('assets/Luffy-Mousepad.png') }}" name="Luffy Mouse Pad" price="£19.99"></x-product>
                <x-product route="{{ route('product') }}" src="{{ asset('assets/DemonSlayer-Mousepad.png') }}" name="Demon Slayer Mouse Pad" price="£19.99"></x-product>
                <x-product route="{{ route('product') }}" src="{{ asset('assets/Luffy-Mousepad.png') }}" name="Luffy Mouse Pad" price="£19.99"></x-product>
                <x-product route="{{ route('product') }}" src="{{ asset('assets/Zoro2-Mousepad.png') }}" name="Zoro Mouse Pad" price="£24.99"></x-product>
                <x-product route="{{ route('product') }}" src="{{ asset('assets/DemonSlayer-Mousepad.png') }}" name="Demon Slayer Mouse Pad" price="£19.99"></x-product>
                <x-product route="{{ route('product') }}" src="{{ asset('assets/Luffy-Mousepad.png') }}" name="Luffy Mouse Pad" price="£19.99"></x-product>
=======
            <form method="GET" action="{{ route('product.search') }}">
                <input type="text" name="search" id="search-input" placeholder="Search" value="{{ request()->query('search') }}" onkeydown="if(event.key === 'Enter'){this.form.submit();}">
            </form>

            <div class="productContainer">
                @if ($products->isEmpty())
                    <h1 class="no-Results">No results found.</h1>
                @else
                @foreach($products as $product)
                    <x-product route="{{ route('product') }}" src='{{ asset("assets/{$product->img}") }}' name="{{ $product->name }}" price="{{ $product->price }}"></x-product>
                @endforeach
                @endif
>>>>>>> f46fd55 (Re-made product page, added search page, added responsive displaying of stored products in database, fixed bugs)
            </div>
            <div class="pagination">
                @if ($products->onFirstPage())
                        <div class="disabled">
                            <span class="prev-btn"><</span>
                        </div>
                    @else
                        <div>
                            <a href="{{ $products->previousPageUrl() }}" class="prev-btn"><</a>
                        </div>
                    @endif

                    @foreach ($products->links()->elements[0] as $page => $url)
                        @if ($page == $products->currentPage())
                            <div class="active">
                                <span>{{ $page }}</span>
                            </div>
                        @else
                            <div>
                                <a href="{{ $url }}" class="page-btn">{{ $page }}</a>
                            </div>
                        @endif
                    @endforeach

                    @if ($products->hasMorePages())
                        <div>
                            <a href="{{ $products->nextPageUrl() }}" class="next-btn">></a>
                        </div>
                    @else
                        <div class="disabled">
                            <span class="next-btn">></span>
                        </div>
                    @endif
            </div>
        </main>
        <footer>By Elliot</footer>
    </div>
</body>
</html>


