<div class="side-bar">
    <ul>
        <li>
            <a href="{{ route('product.search') }}">Search</a>
        </li>
        <li>
<<<<<<< HEAD
            Browse
=======
            <a href="{{ route('browse') }}">Browse</a>
>>>>>>> f46fd55 (Re-made product page, added search page, added responsive displaying of stored products in database, fixed bugs)
        </li>
    </ul>
</div>

<script>
    let open = false;

    const btn = document.getElementById("left");
    const sidebar = document.querySelector(".side-bar");

    btn.addEventListener("click", function() {
        event.preventDefault();
        if (!open) {
            open = true
            sidebar.classList.add('side-bar-slide-in')
            sidebar.classList.remove('side-bar-slide-out')
        } else {
            open = false
            sidebar.classList.add('side-bar-slide-out')
            sidebar.classList.remove('side-bar-slide-in')
        }


    })
</script>
