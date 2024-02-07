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
            <a class="navbar-brand" href="Navbar.html"><img src="/pics/Logo.png" alt="logo" style="height: 10vh; width: auto;"></a>
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
                        <a class="btn btn-outline-light" href="#">
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
                    <i class="bi bi-basket2-fill " style="font-size: 5rem;"></i>
                </div>
                <div class="col">
                    <h1>| Shopping Cart</h1>
                </div>
                <hr class="my-4">
            </div>
        </div>
    </section>

    <form id="cart-form" action="{{ route('checkout') }}" method="get">
        <section id="cart-container" class="ctn">
            <table width="100%">
                <thead>
                    <tr>
                        <td> </td>
                        <td>Product Name</td>
                        <td> </td>
                        <td> </td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Sub-Total</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                @php
                    $total = 0;
                @endphp
                <tbody>
                    <!-- Inside each table row -->
                    @foreach($products as $product)
                    <tr class="product-row">
                        <td><input type="checkbox" id="select_{{ $product->product_id }}" name="selected[{{ $product->product_id }}]"></td>
                        <td class="product-info">
                            <div class="d-flex align-items-center">
                                <img src="/pics/tumbs.jpg" alt="Product Image" class="img-fluid me-2" style="max-width: 50%;">
                                <h5>{{$product->product['product_name']}}</h5>
                            </div>
                        </td>
                        <td class="variation-dropdown">
                            <!-- Add a dropdown for variations without the box -->
                            <div class="dropdown">
                                <button class="btn btn-link text-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Variations:
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownVariations">
                                    <li><a class="dropdown-item" href="#" onclick="selectVariation(this, 'Blue')">Blue</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="selectVariation(this, 'Red')">Red</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="selectVariation(this, 'Green')">Green</a></li>
                                    <!-- Add more variations as needed -->
                                </ul>
                            </div>
                        </td>
                        <td class="selected-variation">Selected Variation: -</td>
                        <td class="unit-price">
                            <h5>₱{{$product->product['price']}}</h5>
                        </td>
                        <td class="quantity-controls">
                            <h5>{{$product['quantity']}}</h5>
                        </td>
                        <td class="amount">
                            <h5 id="amount_{{ $product->product_id }}">₱{{ $product->product->price * $product->quantity }}</h5>
                        </td>
                        <td>
                            <h5 class="deleteBtn">Delete</h5>
                        </td>
                        <!-- Add more elements as needed -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

        <section class="cart-bottom">
            <div>
                <input type="checkbox" id="selectAllCheckbox" onchange="selectAllProducts()">
                <label for="selectAllCheckbox" style="font-size: large; font-weight: bold; margin-left: 20px">Select All</label>
            </div>
            <div class="total-section">
                <p id="overall-total">Total ₱: 0.00</p>
                <button type="submit" class="checkout-btn">Checkout</button>
                <a href="{{route('product')}}" class="continueshopping-btn"><button>Continue Shopping</button></a>
            </div>
        </section>
    </form>

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
        // Get all checkbox elements with the class 'myCheckbox'
        let total_price = 0;
        let overall_total = document.getElementById('overall-total');
        const selectAll = document.getElementById('selectAllCheckbox');
        const checkboxes = document.querySelectorAll('[id^="select_"]');

        // Loop through each checkbox and attach event listener
        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function(event) {
                // Check if the checkbox is checked
                if (event.target.checked) {
                    const lastChar = checkbox.id.charAt(checkbox.id.length - 1);
                    const amount = parseInt(document.getElementById('amount_'+lastChar).textContent.slice(1));
                    total_price += amount;
                } else {
                    const lastChar = checkbox.id.charAt(checkbox.id.length - 1);
                    const amount = parseInt(document.getElementById('amount_'+lastChar).textContent.slice(1));
                    total_price -= amount;
                }
                overall_total.textContent = 'Total ₱: ' + parseFloat(total_price).toFixed(2);
            });
        });

        selectAll.addEventListener('change', function(event) {
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = !!event.target.checked;
                checkbox.dispatchEvent(new Event('change'));
            })
        });
    </script>

</body>

</html>
