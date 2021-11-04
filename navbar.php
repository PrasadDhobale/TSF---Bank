<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/bank.png" alt="Bank Logo" width="50" heigt="50">&emsp;TSF Bank
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Customers</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#trans_money">Transfer Money</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#trans_history">Transaction History</a>
                </li>
            </ul>
            <form action="search_customer.php" method="post" class="d-flex">
                <input class="form-control me-5" name="search" type="search" placeholder="Search Customer" aria-label="Search" required>
                <button class="btn btn-outline-light" name="search_btn" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>