<div class="side-bar">
    <ul>
        <li>
            Search
        </li>
        <li>
            Browse
        </li>
    </ul>
</div>

<script>
    const btn = document.getElementById("left")
    const sidebar = document.querySelector(".side-bar")

    btn.addEventListener("click", function() {
        event.prevent
        sidebar.classList.add('.side-bar-slide-in')
    })
</script>
