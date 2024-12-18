<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Non-Fictional Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            margin-top: 60px;
            background-color: #f8f9fa;
        }

        .navbar-nav .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu {
            margin-top: 0;
        }

        .book-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin: 20px;
        }

        .book-item {
            display: flex;
            flex-direction: column;
            justify-content: start;
            align-items: center;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            padding: 15px;
            width: 250px;
            transition: transform 0.2s;
        }

        .book-item:hover {
            transform: scale(1.05);
        }

        .book-image {
            max-width: 100%;
            height: auto;
            object-fit: contain;
            margin-bottom: 10px;
        }

        .book-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .book-price {
            color: green;
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .button-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
            width: 100%;
        }

        .quantity {
            width: 40px;
            text-align: center;
        }

        .btn-full {
            width: 100%;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Bookify</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="./index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="genresDropdown" role="button">
                            Genres
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="genresDropdown">
                            <li><a class="dropdown-item" href="./fictional.html">Fictional Books</a></li>
                            <li><a class="dropdown-item" href="./non-fictional.html">Non-Fictional Books</a></li>
                            <li><a class="dropdown-item" href="./childrenbooks.html">Children Book World</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./mycart.html">My Cart</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Book List -->
    <div class="book-list" id="bookList">
        <!-- Book Items -->
        <div class="book-item" data-title="The Kid Who Came From Space" data-price="10.99">
            <div class="book-title">The Kid Who Came From Space</div>
            <img src="./cb1.png" alt="The Kid Who Came From Space" class="book-image">
            <div class="book-price">$10.99</div>
            <div class="button-group">
                <button class="btn btn-secondary btn-full" onclick="addToCart('The Kid who came from space',10.99,'./cb1.png','qty1')">Add to Cart</button>
                <button class="btn btn-primary btn-full">Buy Now</button>
                <div class="d-flex align-items-center">
                    <button class="btn btn-light" onclick="updateQuantity('qty1', -1)">-</button>
                    <input type="number" id="qty1" class="quantity" value="1" min="1" readonly>
                    <button class="btn btn-light" onclick="updateQuantity('qty1', 1)">+</button>
                </div>
            </div>
        </div>

        <div class="book-item" data-title="Bollywood Burglary" data-price="12.99">
            <div class="book-title">Bollywood Burglary (Geronimo Stilton #65)</div>
            <img src="./cb2.png" alt="Bollywood Burglary" class="book-image">
            <div class="book-price">$12.99</div>
            <div class="button-group">
                <button class="btn btn-secondary btn-full" onclick="addToCart('The Geronimo Stilton',12.99,'./cb3.png','qty3')">Add to Cart</button>
                <button class="btn btn-primary btn-full">Buy Now</button>
                <div class="d-flex align-items-center">
                    <button class="btn btn-light" onclick="updateQuantity('qty2', -1)">-</button>
                    <input type="number" id="qty2" class="quantity" value="1" min="1" readonly>
                    <button class="btn btn-light" onclick="updateQuantity('qty2', 1)">+</button>
                </div>
            </div>
        </div>
        <div class="book-item" data-title="Bollywood Burglary" data-price="20.99">
            <div class="book-title">Goosebumps-The haunted School</div>
            <img src="./cb3.png" alt="Bollywood Burglary" class="book-image">
            <div class="book-price">$20.99</div>
            <div class="button-group">
                <button class="btn btn-secondary btn-full" onclick="addToCart('Goosebumps-The Haunted School',20.99,'./cb3.png','qty3')">Add to Cart</button>
                <button class="btn btn-primary btn-full">Buy Now</button>
                <div class="d-flex align-items-center">
                    <button class="btn btn-light" onclick="updateQuantity('qty3', -1)">-</button>
                    <input type="number" id="qty3" class="quantity" value="1" min="1" readonly>
                    <button class="btn btn-light" onclick="updateQuantity('qty3', 1)">+</button>
                </div>
            </div>
        </div>
        <div class="book-item" data-title="Bollywood Burglary" data-price="50.99">
            <div class="book-title">Geronimo Stilton - The Haunted Castle</div>
            <img src="./cb4.png" alt="Bollywood Burglary" class="book-image">
            <div class="book-price">$20.99</div>
            <div class="button-group">
                <button class="btn btn-secondary btn-full" onclick="addToCart('Geronimo Stilton - The Haunted Castle',20.99,'./cb4.png','qty4')">Add to Cart</button>
                <button class="btn btn-primary btn-full">Buy Now</button>
                <div class="d-flex align-items-center">
                    <button class="btn btn-light" onclick="updateQuantity('qty4', -1)">-</button>
                    <input type="number" id="qty4" class="quantity" value="1" min="1" readonly>
                    <button class="btn btn-light" onclick="updateQuantity('qty4', 1)">+</button>
                </div>
            </div>
        </div>
        <div class="book-item" data-title="Bollywood Burglary" data-price="50.99">
            <div class="book-title">The diary of a Wimpy Kid</div>
            <img src="./cb5.png" alt="Bollywood Burglary" class="book-image">
            <div class="book-price">$20.99</div>
            <div class="button-group">
                <button class="btn btn-secondary btn-full" onclick="addToCart('The diary of Wimpy Kid',20.99,'./cb5.png','qty5')">Add to Cart</button>
                <button class="btn btn-primary btn-full">Buy Now</button>
                <div class="d-flex align-items-center">
                    <button class="btn btn-light" onclick="updateQuantity('qty5', -1)">-</button>
                    <input type="number" id="qty4" class="quantity" value="1" min="1" readonly>
                    <button class="btn btn-light" onclick="updateQuantity('qty5', 1)">+</button>
                </div>
            </div>
        </div>
        <div class="book-item" data-title="Bollywood Burglary" data-price="50.99">
            <div class="book-title">Pinocchio</div>
            <img src="./cb6.png" alt="Bollywood Burglary" class="book-image">
            <div class="book-price">$30.99</div>
            <div class="button-group">
                <button class="btn btn-secondary btn-full" onclick="addToCart('Pinocchio',10.99,'./cb6.png','qty6')">Add to Cart</button>
                <button class="btn btn-primary btn-full">Buy Now</button>
                <div class="d-flex align-items-center">
                    <button class="btn btn-light" onclick="updateQuantity('qty6', -1)">-</button>
                    <input type="number" id="qty6" class="quantity" value="1" min="1" readonly>
                    <button class="btn btn-light" onclick="updateQuantity('qty6', 1)">+</button>
                </div>
            </div>
        </div>
        <div class="book-item" data-title="Bollywood Burglary" data-price="50.99">
            <div class="book-title">Animal Tales from Panchatantra</div>
            <img src="./cb7.png" alt="Bollywood Burglary" class="book-image">
            <div class="book-price">$30.99</div>
            <div class="button-group">
                <button class="btn btn-secondary btn-full" onclick="addToCart('Animal Tales from Panchatantra',30.99,'./cb7.png','qty7')">Add to Cart</button>
                <button class="btn btn-primary btn-full">Buy Now</button>
                <div class="d-flex align-items-center">
                    <button class="btn btn-light" onclick="updateQuantity('qty7', -1)">-</button>
                    <input type="number" id="qty7" class="quantity" value="1" min="1" readonly>
                    <button class="btn btn-light" onclick="updateQuantity('qty7', 1)">+</button>
                </div>
            </div>
        </div>
        <div class="book-item" data-title="Bollywood Burglary" data-price="50.99">
            <div class="book-title">The Hansel and The Gretel</div>
            <img src="./cb8.png" alt="Bollywood Burglary" class="book-image">
            <div class="book-price">$30.99</div>
            <div class="button-group">
                <button class="btn btn-secondary btn-full" onclick="addToCart('The Hansel and The Gretel',30.99,'./cb8.png','qty8')">Add to Cart</button>
                <button class="btn btn-primary btn-full">Buy Now</button>
                <div class="d-flex align-items-center">
                    <button class="btn btn-light" onclick="updateQuantity('qty8', -1)">-</button>
                    <input type="number" id="qty8" class="quantity" value="1" min="1" readonly>
                    <button class="btn btn-light" onclick="updateQuantity('qty8', 1)">+</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Add to Cart Function
        function addToCart(title, price, image, qtyId) {
            const quantity = parseInt(document.getElementById(qtyId).value);
            const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
            
            // Check if item already exists in cart
            const existingItemIndex = cartItems.findIndex(item => item.title === title);
            if (existingItemIndex !== -1) {
                cartItems[existingItemIndex].quantity += quantity;
            } else {
                cartItems.push({ title, price, image, quantity });
            }
            
            localStorage.setItem('cartItems', JSON.stringify(cartItems));
            window.location.href = './mycart.html'; // Redirect to the cart page
        }

        // Update Quantity Function
        function updateQuantity(qtyId, change) {
            const qtyInput = document.getElementById(qtyId);
            let currentQty = parseInt(qtyInput.value);
            currentQty += change;
            if (currentQty < 1) currentQty = 1; // Prevent quantity from going below 1
            qtyInput.value = currentQty;
        }
    </script>

</body>

</html>
