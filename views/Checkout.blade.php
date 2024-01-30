<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script defer src="/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/css/Navbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="/pics/Logo.png" alt="logo"
                    style="height: 10vh; width: auto;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">PRODUCTS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            CONTACT
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">FAQ</a></li>
                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item" href="#">CONTACT INFORMATION</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active">ABOUT</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-but">
                        <a class="btn btn-outline-light" href="/ShoppingCart">
                            <!-- Adjusted size of the cart icon -->
                            <i class="bi bi-cart" style="font-size: 1rem;"></i>
                        </a>
                    </li>
                    <li class="nav-but">
                        <a class="btn btn-outline-light" href="#">Signup</a>
                    </li>
                    <li class="nav-but">
                        <!-- Set the background color of the "Login" button to #1277aa -->
                        <a class="btn text-white" style="background-color: #1277aa;" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="Sub-head">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-auto">
                    <i class="bi bi-cart-check-fill " style="font-size: 5rem;"></i>
                </div>
                <div class="col">
                    <h1>| Checkout</h1>
                </div>
                <hr class="my-4">
            </div>
        </div>
    </section>

    <section id="cart-container" class="ctn">
        <table width="100%">
            <thead>
                <tr>
                    <td>Product Ordered</td>
                    <td>Unit Price</td>
                    <td>Quantity</td>
                    <td>Item Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><h5>Tumbler</h5></td>
                    <td>
                        <h5>₱50.00</h5>
                    </td>
                    <td>
                        <h5>1</h5>
                    </td>
                    <td>
                        <h5>₱50.00</h5>
                    </td>
                <tr>
                    <td><h5>Tumbler(blue)</h5></td>
                    <td>
                        <h5>₱50.00</h5>
                    </td>
                    <td>
                        <h5>4</h5>
                    </td>
                    <td>
                        <h5>₱200.00</h5>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td colspan="3">
                        <br><br><br><br><br>
                        <hr style="width: 1380px;">
                        Order Total (5 Item/s):
                    </td>
                    <td>
                        <br><br><br><br><br><br>
                        ₱250.00
                    </td>

                </tr>
            </tbody>
            </table>
            </section>

            <section class="address-bottom">
                <div>
                    <h5> Name: Group 4</h5>
                    <h5> Adress: BSIT 3-2 from Polytechnic University of the Philippines</h5>
                </div>
            </section>
            <section class="payment-container">
                <div class="payment">
                	<a href="#" class="payment-btn"><button>Proceed to Payment</button></a>
            	</div>
            </section>

    <section class="footer">
        <h4>ABOUT US</h4>
        <p>We provide high quality and branded tumbler just for you. We created this website for your needs:
            <span>WAVE</span>
        </p>
        <div class="b-icon">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-tiktok"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-pinterest"></i></a>
        </div>
    </section>
</body>
</html>
