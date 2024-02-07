<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script defer src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/Navbar.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="/pics/Logo.png" alt="logo" style="height: 10vh; width: auto;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a class="btn btn-outline-light" href="ShoppingCart.html">
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

    <form id="checkout-form" action="" method="post">
        @csrf
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
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
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
    </form>

    <section class="address-bottom">

        <div>
            <h5> <b>Name:</b> </h5>
            <h5> <b>Adress:</b> </h5>
            <h5> <b>Contact:</b> </h5>
        </div>
        <div class="pickers">
            <div class="mb-3">
                <label for="pick-up-date" class="form-label"><b>Pick-up Date:</b></label>
                <input type="date" class="form-control" id="pick-up-date">
            </div>
            <div class="mt-3 mb-3">
                <label for="pick-up-time" class="form-label"><b>Pick-up Time Slot:</b></label>
                <select class="form-select" id="pick-up-time">
                    <option value="10:00 AM - 11:00 AM">10:00 AM - 11:00 AM</option>
                    <option value="11:00 AM - 12:00 NN">11:00 AM - 12:00 NN</option>
                    <option value="12:00 NN - 1:00 PM">12:00 NN - 1:00 PM</option>
                    <option value="1:00 PM - 2:00 PM">1:00 PM - 2:00 PM</option>
                    <option value="2:00 PM - 3:00 PM">2:00 PM - 3:00 PM</option>
                    <option value="3:00 PM - 4:00 PM">3:00 PM - 4:00 PM</option>
                    <option value="4:00 PM - 5:00 PM">4:00 PM - 5:00 PM</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // ... Existing JavaScript ...

            // Add an event listener to the form for dynamic updates
            var checkoutForm = document.querySelector('#checkout-form');
            if (checkoutForm) {
                checkoutForm.addEventListener('submit', function() {
                    // Add any additional logic here if needed

                    // Submit the form
                    this.submit();
                });
            }
        });
    </script>
</body>

</html>