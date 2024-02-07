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
                        <a class="nav-link active" aria-current="page" href="Navbar.html">HOME</a>
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

    <form id="cart-form" action="" method="post">
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
                <tbody>
                    <!-- Inside each table row -->
                    @php 
                        $total = 0;
                    @endphp
                    @if(session('ShoppingCart'))
                    @foreach(session('ShoppingCart') as $product_id => $product)
                        @php
                            $sub_total = $product['price'] * $product['quantity'];
                            $total += $sub_total;
                        @endphp

                    <tr class="product-row">
                        <td><input type="checkbox"></td>
                        <td class="product-info">
                            <div class="d-flex align-items-center">
                                <img src="/pics/tumbs.jpg" alt="Product Image" class="img-fluid me-2" style="max-width: 50%;">
                                <h5>{{$product['product_name']}}</h5>
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
                            <h5>₱{{$product['price']}}</h5>
                            <input readonly hidden value="₱{{$product['price']}}">
                        </td>
                        <td class="quantity-controls">
                            <h5>{{$product['quantity']}}</h5>
                        </td>
                        <td class="amount">
                            <h5>₱{{$sub_total}}</h5>
                        </td>
                        <td>
                            <h5 class="deleteBtn">Delete</h5>
                        </td>
                        <!-- Add more elements as needed -->
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </section>
    </form>

    <section class="cart-bottom">
        <div>
            <input type="checkbox" id="selectAllCheckbox" onchange="selectAllProducts()">
            <h1>Select All</h1>
        </div>
        <div class="total-section">
            <p id="overall-total">Total ₱:{{ $total}}</p>
            <!-- <a href="/Checkout" class="checkout-btn"><button>Checkout</button></a> -->
            <button type="submit" class="checkout-btn" >Checkout</button>
            <a href="{{route('product')}}" class="continueshopping-btn"><button>Continue Shopping</button></a>
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
        

            // Add a click event listener to each delete button
            deleteButtons.forEach(function(button, index) {
                button.addEventListener('click', function() {
                    // Get the parent row of the clicked button
                    var row = this.closest('tr');

                    // Check if the checkbox in the row is checked
                    var checkbox = itemCheckboxes[index];
                    if (checkbox.checked) {
                        // Get the amount of the deleted row
                        var deletedAmount = parseFloat(amount[index].textContent.replace('₱', ''));

                        // Remove the entire row from the table
                        row.remove();

                        // Update the overall total after deletion
                        updateTotalAmount(deletedAmount);
                    }
                });
            });


        function selectVariation(element, variation) {
            // Get the parent row of the clicked dropdown item
            var row = element.closest('.product-row');

            // Update the selected variation for this row only
            var selectedVariationElement = row.querySelector('.selected-variation');
            if (selectedVariationElement) {
                selectedVariationElement.textContent = 'Selected Variation: ' + variation;
            }
        }



        function updateRowElements(row, variation) {
            // Get the elements within the row and update their content
            row.querySelector('.selected-variation').textContent = 'Selected Variation: ' + variation;
            row.querySelector('.price').textContent = 'Price: ₱50.00'; // Update with the actual price for the variation
            // Add more elements to update as needed
        }

        function selectAllProducts() {
            var checkboxes = document.querySelectorAll('.product-row input[type="checkbox"]');
            var total = 0;

            checkboxes.forEach(function(checkbox) {
                checkbox.checked = document.getElementById('selectAllCheckbox').checked;
                updateTotal();
            });
        }


        // Attach onchange event to each product checkbox and quantity input
        var productCheckboxes = document.querySelectorAll('.product-row input[type="checkbox"]');
        productCheckboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                updateTotal();
            });
        });

        var quantityInputs = document.querySelectorAll('.product-row .quantity-input');
        quantityInputs.forEach(function(input) {
            input.addEventListener('input', function() {
                updateTotal();
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            // ... Existing JavaScript ...

            // Add an event listener to the form for dynamic updates
            var cartForm = document.querySelector('#cart-form');
            if (cartForm) {
                cartForm.addEventListener('submit', function() {
                    // Add any additional logic here if needed

                    // Submit the form
                    this.submit();
                });
            }
        });
    </script>

</body>

</html>