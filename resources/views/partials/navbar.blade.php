<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
    <div class="container-fluid bg-light bg-gradient">
        <span style="font-weight: bold">
            <a class="navbar-brand" href="#">
                <img src="/images/PizzaIcon.png" alt="" width="40" height="35" class="d-inline-block align-text-top">
                <span class="pizza">Pizza Pizza</span>
            </a>
        </span>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Menu") ? 'active' : '' }}"" href="/menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Order") ? 'active' : '' }}"" href="/order">Order Now</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "About") ? 'active' : '' }}"" href="/about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Login") ? 'active' : '' }}"" href="/login">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>