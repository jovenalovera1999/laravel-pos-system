<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">
        <div class="profile">
            <h1 class="text-light mt-3">Demo App</h1>
            <img src="#" alt="" class="img-fluid rounded-circle bg-light">
            <h1 class="text-light">User Full Name</h1>
        </div>
        <!-- .nav-menu -->
        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li><a href="#"><span>DASHBOARD</span></a></li>
                <li><a href="#"><span>ORDER</span></a></li>
                <li><a href="#"><span>PRODUCTS</span></a></li>
                <li><a href="#"><span>TRANSACTIONS</span></a></li>
                <li><a href="{{ route('userList') }}"><span>USERS</span></a></li>
            </ul>
        </nav>
    </div>
</header>
<!-- End Header -->