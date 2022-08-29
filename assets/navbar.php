<nav class="navbar navbar-expand-lg navbar-light" id="navigation">
    <div class="container">
        <a class="navbar-brand" href="<?= $root ?>">
            <div class="allNavCategory">
                <i class="fas fa-th-large"></i><span>All Categories</span><i class="fas fa-chevron-down"></i>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $root ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $root ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $root ?>">Best Sales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $root ?>">promotions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $root ?>">blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Contact</a>
                </li>
            </ul>
        </div>
        <ul class="float-end d-flex list-unstyled m-0 p-0" id="giftCartListing">
            <li class="callMe">
                <a href="tel:1234567890" class='text-decoration-none'>
                    <i class="fas fa-headphones"></i>
                    <span>(123) 4567-890</span>
                </a>
            </li>
            <li class="giftCart">
                <a href="" class='text-decoration-none'>
                    <i class="fas fa-gift"></i>
                    <span>gift cards</span>
                </a>
            </li>
        </ul>
  </div>
</nav>