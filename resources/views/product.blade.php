<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body id="product">
    <div class="bg">
        <header>
            <x-header></x-header>
        </header>
        <div id="back-button">
            <a href="">< Back</a>
        </div>
        <main>
            <div class="product-image">
                <img src="{{ asset('assets/DemonSlayer-Mousepad.png') }}" alt="Demon slayer mousepad">
            </div>
            <div class="product-info">
                <h1>Product name</h1>
                <h2>Product description</h2>
                <h2>Product price</h2>
                <h3>TESTING IF I CAN PUSH</h3>
            </div>
        </main>
        <footer>By Elliot</footer>
    </div>
</body>
<script>
    window.addEventListener('scroll', function() {
        const element = document.querySelector('.downArrow');
        const productSections = document.querySelector('.productSection')

        if (window.scrollY > 500) {
            element.classList.add('hidden')
            element.classList.remove('show')
        } else {
            element.classList.remove('hidden')
            element.classList.add('show')
        }
    })
</script>
</html>


