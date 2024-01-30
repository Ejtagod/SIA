<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet" >
    <link href="/css/Navbar.css" rel="stylesheet" >
    <script defer src="/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="Navbar.html"><img src="/pics/Logo.png" alt="logo"
                    style="height: 10vh; width: auto;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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

    <section id="cart-container" class="ctn">
        <table width="100%">
            <thead>
                <tr>
                    <td> </td>
                    <td>Product Name</td>
                    <td>    </td>
                    <td>    </td>
                    <td>Unit Price</td>
                    <td>Quantity</td>
                    <td>Amount</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                <!-- Inside each table row -->
                <tr class="product-row">
                    <td><input type="checkbox"></td>
                    <td class="product-info">
                        <div class="d-flex align-items-center">
                            <img src="pics/tumbs.jpg" alt="Product Image" class="img-fluid me-2" style="max-width: 50%;">
                            <h5>Tumbler</h5>
                        </div>
                    </td>
                    <td class="variation-dropdown">
                        <!-- Add a dropdown for variations without the box -->
                        <div class="dropdown">
                            <button class="btn btn-link text-dark dropdown-toggle" type="button" id="dropdownVariations" data-bs-toggle="dropdown" aria-expanded="false">
                                Variations:
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownVariations">
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectVariation('Blue')">Blue</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectVariation('Red')">Red</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectVariation('Green')">Green</a></li>
                                <!-- Add more variations as needed -->
                            </ul>
                        </div>
                    </td>
                    <td class="selected-variation">Selected Variation: -</td>
                    <td class="unit-price">
                        <h5>₱50.00</h5>
                    </td>
                    <td class="quantity-controls">
                        <button class="decrement-btn">-</button>
                        <input class="quantity-input" type="number" value="1" min="1">
                        <button class="increment-btn">+</button>
                    </td>
                    <td class="amount">
                        <h5>₱50.00</h5>
                    </td>
                    <td>
                        <h5 class="deleteBtn">Delete</h5>
                    </td>
                    <!-- Add more elements as needed -->
                </tr>


                <tr class="product-row">
                    <td><input type="checkbox"></td>
                    <td class="product-info">
                        <div class="d-flex align-items-center">
                            <img src="pics/tumbs.jpg" alt="Product Image" class="img-fluid me-2" style="max-width: 50%;">
                            <h5>Tumbler</h5>
                        </div>
                    </td>
                    <td class="variation-dropdown">
                        <!-- Add a dropdown for variations without the box -->
                        <div class="dropdown">
                            <button class="btn btn-link text-dark dropdown-toggle" type="button" id="dropdownVariations" data-bs-toggle="dropdown" aria-expanded="false">
                                Variations:
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownVariations">
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectVariation('Blue')">Blue</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectVariation('Red')">Red</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectVariation('Green')">Green</a></li>
                                <!-- Add more variations as needed -->
                            </ul>
                        </div>
                    </td>
                    <td class="selected-variation">Selected Variation: -</td>
                    <td class="unit-price">
                        <h5>₱50.00</h5>
                    </td>
                    <td class="quantity-controls">
                        <button class="decrement-btn">-</button>
                        <input class="quantity-input" type="number" value="1" min="1">
                        <button class="increment-btn">+</button>
                    </td>
                    <td class="amount">
                        <h5>₱50.00</h5>
                    </td>
                    <td>
                        <h5 class="deleteBtn">Delete</h5>
                    </td>
                    <!-- Add more elements as needed -->
                </tr>

                <tr class="product-row">
                    <td><input type="checkbox"></td>
                    <td class="product-info">
                        <div class="d-flex align-items-center">
                            <img src="pics/tumbs.jpg" alt="Product Image" class="img-fluid me-2" style="max-width: 50%;">
                            <h5>Tumbler</h5>
                        </div>
                    </td>
                    <td class="variation-dropdown">
                        <!-- Add a dropdown for variations without the box -->
                        <div class="dropdown">
                            <button class="btn btn-link text-dark dropdown-toggle" type="button" id="dropdownVariations" data-bs-toggle="dropdown" aria-expanded="false">
                                Variations:
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownVariations">
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectVariation('Blue')">Blue</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectVariation('Red')">Red</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectVariation('Green')">Green</a></li>
                                <!-- Add more variations as needed -->
                            </ul>
                        </div>
                    </td>
                    <td class="selected-variation">Selected Variation: -</td>
                    <td class="unit-price">
                        <h5>₱50.00</h5>
                    </td>
                    <td class="quantity-controls">
                        <button class="decrement-btn">-</button>
                        <input class="quantity-input" type="number" value="1" min="1">
                        <button class="increment-btn">+</button>
                    </td>
                    <td class="amount">
                        <h5>₱50.00</h5>
                    </td>
                    <td>
                        <h5 class="deleteBtn">Delete</h5>
                    </td>
                    <!-- Add more elements as needed -->
                </tr>

                <tr class="product-row">
                    <td><input type="checkbox"></td>
                    <td class="product-info">
                        <div class="d-flex align-items-center">
                            <img src="pics/tumbs.jpg" alt="Product Image" class="img-fluid me-2" style="max-width: 50%;">
                            <h5>Tumbler</h5>
                        </div>
                    </td>
                    <td class="variation-dropdown">
                        <!-- Add a dropdown for variations without the box -->
                        <div class="dropdown">
                            <button class="btn btn-link text-dark dropdown-toggle" type="button" id="dropdownVariations" data-bs-toggle="dropdown" aria-expanded="false">
                                Variations:
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownVariations">
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectVariation('Blue')">Blue</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectVariation('Red')">Red</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectVariation('Green')">Green</a></li>
                                <!-- Add more variations as needed -->
                            </ul>
                        </div>
                    </td>
                    <td class="selected-variation">Selected Variation: -</td>
                    <td class="unit-price">
                        <h5>₱50.00</h5>
                    </td>
                    <td class="quantity-controls">
                        <button class="decrement-btn">-</button>
                        <input class="quantity-input" type="number" value="1" min="1">
                        <button class="increment-btn">+</button>
                    </td>
                    <td class="amount">
                        <h5>₱50.00</h5>
                    </td>
                    <td>
                        <h5 class="deleteBtn">Delete</h5>
                    </td>
                    <!-- Add more elements as needed -->
                </tr>

                <tr class="product-row">
                    <td><input type="checkbox"></td>
                    <td class="product-info">
                        <div class="d-flex align-items-center">
                            <img src="pics/tumbs.jpg" alt="Product Image" class="img-fluid me-2" style="max-width: 50%;">
                            <h5>Tumbler</h5>
                        </div>
                    </td>
                    <td class="variation-dropdown">
                        <!-- Add a dropdown for variations without the box -->
                        <div class="dropdown">
                            <button class="btn btn-link text-dark dropdown-toggle" type="button" id="dropdownVariations" data-bs-toggle="dropdown" aria-expanded="false">
                                Variations:
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownVariations">
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectVariation('Blue')">Blue</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectVariation('Red')">Red</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectVariation('Green')">Green</a></li>
                                <!-- Add more variations as needed -->
                            </ul>
                        </div>
                    </td>
                    <td class="selected-variation">Selected Variation: -</td>
                    <td class="unit-price">
                        <h5>₱50.00</h5>
                    </td>
                    <td class="quantity-controls">
                        <button class="decrement-btn">-</button>
                        <input class="quantity-input" type="number" value="1" min="1">
                        <button class="increment-btn">+</button>
                    </td>
                    <td class="amount">
                        <h5>₱50.00</h5>
                    </td>
                    <td>
                        <h5 class="deleteBtn">Delete</h5>
                    </td>
                    <!-- Add more elements as needed -->
                </tr>

                <tr class="product-row">
                    <td><input type="checkbox"></td>
                    <td class="product-info">
                        <div class="d-flex align-items-center">
                            <img src="pics/tumbs.jpg" alt="Product Image" class="img-fluid me-2" style="max-width: 50%;">
                            <h5>Tumbler</h5>
                        </div>
                    </td>
                    <td class="variation-dropdown">
                        <!-- Add a dropdown for variations without the box -->
                        <div class="dropdown">
                            <button class="btn btn-link text-dark dropdown-toggle" type="button" id="dropdownVariations" data-bs-toggle="dropdown" aria-expanded="false">
                                Variations:
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownVariations">
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectVariation('Blue')">Blue</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectVariation('Red')">Red</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectVariation('Green')">Green</a></li>
                                <!-- Add more variations as needed -->
                            </ul>
                        </div>
                    </td>
                    <td class="selected-variation">Selected Variation: -</td>
                    <td class="unit-price">
                        <h5>₱50.00</h5>
                    </td>
                    <td class="quantity-controls">
                        <button class="decrement-btn">-</button>
                        <input class="quantity-input" type="number" value="1" min="1">
                        <button class="increment-btn">+</button>
                    </td>
                    <td class="amount">
                        <h5>₱50.00</h5>
                    </td>
                    <td>
                        <h5 class="deleteBtn">Delete</h5>
                    </td>
                    <!-- Add more elements as needed -->
                </tr>


            </tbody>
        </table>
    </section>

    <section class="cart-bottom">
        <div>
            <input type="checkbox" id="selectAllCheckbox" onchange="selectAllProducts()">
            <h1>Select All</h1>
        </div>
        <div class="total-section">
            <p id="overall-total">Total: ₱0.00</p>
            <a href="Checkout.blade.php" class="checkout-btn"><button>Checkout</button></a>
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
        document.addEventListener('DOMContentLoaded', function () {
            // Get all the quantity inputs, unit prices, and amount cells
            var quantityInputs = document.querySelectorAll('.quantity-input');
            var unitPrices = document.querySelectorAll('.unit-price');
            var amount = document.querySelectorAll('.amount');
            var deleteButtons = document.querySelectorAll('.deleteBtn');
            var incrementButtons = document.querySelectorAll('.increment-btn');
            var decrementButtons = document.querySelectorAll('.decrement-btn');
            var dropdownButton = document.querySelector('.dropdown-toggle');
            var overallAmountElement = document.getElementById('overall-total'); // Changed ID
            const selectAllCheckbox = document.getElementById('selectAllCheckbox');
            const itemCheckboxes = document.querySelectorAll('#cart-container tbody input[type="checkbox"]');

            selectAllCheckbox.addEventListener('change', () => {
                const isChecked = selectAllCheckbox.checked;
                itemCheckboxes.forEach(checkbox => {
                    checkbox.checked = isChecked;
                });
            });
             // Add an input event listener to each quantity input
    quantityInputs.forEach(function (input, index) {
        input.addEventListener('input', function () {
            // Get the new quantity value
            var quantity = parseInt(this.value, 10);

            // Get the unit price from the corresponding unit price cell
            var unitPrice = parseFloat(unitPrices[index].textContent.replace('₱', ''));

            // Calculate the new amount
            var Amount = quantity * unitPrice;

            // Update the amount cell with the new amount
            amount[index].innerHTML = '<h5>₱' + Amount.toFixed(2) + '</h5>';

            // Update the overall total
            updateTotalAmount();
        });
    });

            incrementButtons.forEach(function (button, index) {
                button.addEventListener('click', function () {
                    // Increment the corresponding quantity input value
                    quantityInputs[index].value = parseInt(quantityInputs[index].value, 10) + 1;

                    // Trigger the input event to recalculate the amount
                    quantityInputs[index].dispatchEvent(new Event('input'));
                });
            });

            // Add click event listeners to decrease buttons
            decrementButtons.forEach(function (button, index) {
                button.addEventListener('click', function () {
                    // Decrement the corresponding quantity input value, ensuring it doesn't go below 1
                    quantityInputs[index].value = Math.max(parseInt(quantityInputs[index].value, 10) - 1, 1);

                    // Trigger the input event to recalculate the amount
                    quantityInputs[index].dispatchEvent(new Event('input'));
                });
            });

            // Add a click event listener to each delete button
            deleteButtons.forEach(function (button, index) {
            button.addEventListener('click', function () {
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


            function updateTotalAmount(deletedAmount) {
                var currentTotal = parseFloat(overallAmountElement.textContent.replace('Total: ₱', ''));

                // Subtract the deleted amount from the current total
                var newTotal = currentTotal - deletedAmount;

                overallAmountElement.textContent = 'Total: ₱' + newTotal.toFixed(2);
            }
            });


            function selectVariation(variation) {
            // Set the selected variation as the text content of the dropdown button
            dropdownButton.textContent = 'Variations: ' + variation;

            // Update other elements in all rows based on the selected variation
            var rows = document.querySelectorAll('.product-row');
            rows.forEach(function (row) {
                updateRowElements(row, variation);
            });
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

                checkboxes.forEach(function (checkbox) {
                    checkbox.checked = document.getElementById('selectAllCheckbox').checked;
                    updateTotal();
                });
            }
 function updateTotal() {
    var total = 0;
    var checkboxes = document.querySelectorAll('.product-row input[type="checkbox"]:checked');

    checkboxes.forEach(function (checkbox) {
        var row = checkbox.closest('.product-row');
        var priceText = row.querySelector('.unit-price h5').textContent;

        // Extract numeric values from the price text using a more robust method
        var priceMatches = priceText.match(/[+-]?\d+(\.\d+)?/g);

        if (priceMatches && priceMatches.length > 0) {
            var price = parseFloat(priceMatches[0]);
            var quantityInput = row.querySelector('.quantity-input');
            var quantity = parseInt(quantityInput.value, 10) || 0;

            // Check if both price and quantity are valid numbers
            if (!isNaN(price) && !isNaN(quantity)) {
                total += price * quantity;
            }

            // Add an event listener to update the total when quantity changes
            quantityInput.addEventListener('input', updateTotal);
        }
    });

    // Update the overall total with the calculated value
    var overallAmountElement = document.getElementById('overall-total');
    if (!isNaN(total)) {
        overallAmountElement.textContent = 'Total: ₱' + total.toFixed(2);
    } else {
        overallAmountElement.textContent = 'Total: ₱0.00';
    }
}

// Call the updateTotal function initially
updateTotal();


        // Attach onchange event to each product checkbox and quantity input
        var productCheckboxes = document.querySelectorAll('.product-row input[type="checkbox"]');
        productCheckboxes.forEach(function (checkbox) {
            checkbox.addEventListener('change', function () {
                updateTotal();
            }); 
        });

        var quantityInputs = document.querySelectorAll('.product-row .quantity-input');
        quantityInputs.forEach(function (input) {
            input.addEventListener('input', function () {
                updateTotal();
            });
        });



    </script>

</body>

</html>
