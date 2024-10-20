<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="cart.css">
    <link rel="short icon" href="image/short_icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    

    <nav>

        <div class="logo">
            <a href="index.html">
                <img src="../image/logo20.png">
            </a>
        </div>

        <ul>
            <li><a href="index.php" class="action">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="blog.php">Blog</a></li>
        </ul>

        <div class="login">
            <a href="login.php">Login</a>
        </div>

    </nav>
    

    <div class="banner_bg">
        <h1>Our<span>Menu</span></h1>
    </div>

    <div class="filter-container">
        <input type="text" id="searchBar" placeholder="Search menu...">
        <select id="categoryFilter">
            <option value="all">All</option>
            <option value="sri-lankan">SriLankan</option>
            <option value="chinese">Chinese</option>
            <option value="italian">Italian</option>
        </select>
    </div>
    

    <div class="menu">

        <div class="menu_box anim">

            <div class="menu_card" data-category="sri-lankan">

                <div class="menu_img">
                    <img src="../image/menu_1.jpg">
                </div>

                <div class="menu_text">

                    <h2>Buger</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">Rs500.00</p>

                    <button class="menu_btn add-to-cart" data-item="Burger" data-price="500.00">Add to Cart</button>

                </div>

            </div>

            <div class="menu_card"data-category="sri-lankan">

                <div class="menu_img">
                    <img src="../image/menu_2.jpg">
                </div>

                <div class="menu_text">

                    <h2>Drink</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">Rs300.00</p>

                    <button class="menu_btn add-to-cart" data-item="Drink" data-price="300.00">Add to Cart</button>

                </div>

            </div>

            <div class="menu_card"data-category="sri-lankan">

                <div class="menu_img">
                    <img src="../image/menu_3.png">
                </div>

                <div class="menu_text">

                    <h2>Pizza</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">RS2000.00</p>

                    <button class="menu_btn add-to-cart" data-item="Pizza" data-price="2000.00">Add to Cart</button>

                </div>

            </div>

            <div class="menu_card"data-category="italian">

                <div class="menu_img">
                    <img src="../image/menu_4.jpg">
                </div>

                <div class="menu_text">

                    <h2>Onion Ring</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">Rs500.00</p>

                    <button class="menu_btn add-to-cart" data-item="Onion Ring" data-price="500.00">Add to Cart</button>
                </div>

            </div>

            <div class="menu_card"data-category="sri-lankan">

                <div class="menu_img">
                    <img src="../image/menu_5.webp">
                </div>

                <div class="menu_text">

                    <h2>Biryani</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">Rs1900.00</p>

                    <button class="menu_btn add-to-cart" data-item="Biryani" data-price="1900.00">Add to Cart</button>

                </div>

            </div>

            <div class="menu_card"data-category="sri-lankan">

                <div class="menu_img">
                    <img src="../image/menu_6.jpg">
                </div>

                <div class="menu_text">

                    <h2>Potato Chips</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">Rs500.00</p>

                    <button class="menu_btn add-to-cart" data-item="Potato Chips" data-price="500.00">Add to Cart</button>

                </div>

            </div>

            <div class="menu_card"data-category="italian">

                <div class="menu_img">
                    <img src="../image/menu_7.webp">
                </div>

                <div class="menu_text">

                    <h2>Lasagna</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">Rs1700.00</p>

                    <button class="menu_btn add-to-cart" data-item="Lasagna" data-price="1700.00">Add to Cart</button>


                </div>

            </div>

            <div class="menu_card"data-category="sri-lankan">

                <div class="menu_img">
                    <img src="../image/menu_8.jpg">
                </div>

                <div class="menu_text">

                    <h2>Ice-Cream</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">Rs300.00</p>

                    <button class="menu_btn add-to-cart" data-item="Ice-Cream" data-price="300.00">Add to Cart</button>


                </div>

            </div>

            <div class="menu_card"data-category="sri-lankan">

                <div class="menu_img">
                    <img src="../image/menu_9.jpg">
                </div>

                <div class="menu_text">

                    <h2>Chocolate</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">Rs700.00</p>

                    <button class="menu_btn add-to-cart" data-item="Chocolate" data-price="700.00">Add to Cart</button>


                </div>

            </div>

            <div class="menu_card"data-category="italian">

                <div class="menu_img">
                    <img src="../image/menu_10.jpg">
                </div>

                <div class="menu_text">

                    <h2>Pasta</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">Rs2000.00</p>

                    <button class="menu_btn add-to-cart" data-item="Pasta" data-price="2000.00">Add to Cart</button>

                </div>

            </div>

            <div class="menu_card"data-category="sri-lankan">

                <div class="menu_img">
                    <img src="../image/menu_11.jpg">
                </div>

                <div class="menu_text">

                    <h2>Starbucks</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">Rs1500.00</p>

                    <button class="menu_btn add-to-cart" data-item="Starbucks" data-price="1500.00">Add to Cart</button>

                </div>

            </div>
            
            <div class="menu_card"data-category="sri-lankan">

                <div class="menu_img">
                    <img src="../image/menu_12.jpg">
                </div>

                <div class="menu_text">

                    <h2>Hot Dog</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">Rs900.00</p>

                    <button class="menu_btn add-to-cart" data-item="Hot Dog" data-price="900.00">Add to Cart</button>

                </div>

            </div>

            <div class="menu_card"data-category="sri-lankan">

                <div class="menu_img">
                    <img src="../image/menu_13.jpg">
                </div>

                <div class="menu_text">

                    <h2>Sandwich</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">Rs500.00</p>

                    <button class="menu_btn add-to-cart" data-item="Sandwich" data-price="500.00">Add to Cart</button>
                </div>

            </div>

            <div class="menu_card"data-category="sri-lankan">

                <div class="menu_img">
                    <img src="../image/menu_14.jpg">
                </div>

                <div class="menu_text">

                    <h2>Muffin</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">Rs400.00</p>

                    <button class="menu_btn add-to-cart" data-item="Muffin" data-price="400.00">Add to Cart</button>

                </div>

            </div>

            <div class="menu_card"data-category="sri-lankan">

                <div class="menu_img">
                    <img src="../image/menu_15.jpg">
                </div>

                <div class="menu_text">

                    <h2>Sausage</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">Rs1400.00</p>

                    <button class="menu_btn add-to-cart" data-item="Sausage" data-price="1400.00">Add to Cart</button>

                </div>

            </div>

            <div class="menu_card"data-category="sri-lankan">

                <div class="menu_img">
                    <img src="../image/menu_16.jpg">
                </div>

                <div class="menu_text">

                    <h2>Cake</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">Rs1100.00</p>

                    <button class="menu_btn add-to-cart" data-item="Cake" data-price="1100.00">Add to Cart</button>

                </div>

            </div>

            <div class="menu_card"data-category="italian">

                <div class="menu_img">
                    <img src="../image/menu_17.jpg">
                </div>

                <div class="menu_text">

                    <h2>Burrito</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">Rs700.00</p>

                    <button class="menu_btn add-to-cart" data-item="Burrito" data-price="700.00">Add to Cart</button>

                </div>

            </div>

            <div class="menu_card"data-category="italian">

                <div class="menu_img">
                    <img src="../image/menu_18.webp">
                </div>

                <div class="menu_text">

                    <h2>Bacon</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">Rs1200.00</p>

                    <button class="menu_btn add-to-cart" data-item="Bacon" data-price="1200.00">Add to Cart</button>

                </div>

            </div>

            <div class="menu_card"data-category="sri-lankan">

                <div class="menu_img">
                    <img src="../image/menu_19.jpg">
                </div>

                <div class="menu_text">

                    <h2>Donuts</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">Rs400.00</p>

                    <button class="menu_btn add-to-cart" data-item="Donuts" data-price="400.00">Add to Cart</button>

                </div>

            </div>

            <div class="menu_card"data-category="sri-lankan">

                <div class="menu_img">
                    <img src="../image/menu_20.jpg">
                </div>

                <div class="menu_text">

                    <h2>Noodle</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">Rs1000.00</p>

                    <button class="menu_btn add-to-cart" data-item="Noodle" data-price="1000.00">Add to Cart</button>

                </div>

            </div>

            <div class="menu_card"data-category="sri-lankan">

                <div class="menu_img">
                    <img src="../image/menu_21.jpg">
                </div>

                <div class="menu_text">

                    <h2>Pancake</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">Rs900.00</p>

                    <button class="menu_btn add-to-cart" data-item="Pancake" data-price="900.00">Add to Cart</button>

                </div>

            </div>

            <div class="menu_card"data-category="italian">

                <div class="menu_img">
                    <img src="../image/menu_22.jpg">
                </div>

                <div class="menu_text">

                    <h2>Pretzel</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">Rs600.00</p>

                    <button class="menu_btn add-to-cart" data-item="Pretzel" data-price="600.00">Add to Cart</button>

                </div>

            </div>

            <div class="menu_card"data-category="italian">

                <div class="menu_img">
                    <img src="../image/menu_23.jpg">
                </div>

                <div class="menu_text">

                    <h2>Taco</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">Rs1000.00</p>

                    <button class="menu_btn add-to-cart" data-item="Taco" data-price="1000.00">Add to Cart</button>

                </div>

            </div>

            <div class="menu_card"data-category="sri-lankan">

                <div class="menu_img">
                    <img src="../image/menu_24.jpg">
                </div>

                <div class="menu_text">

                    <h2>Kottu</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">Rs1000.00</p>

                    <button class="menu_btn add-to-cart" data-item="Kottu" data-price="1000.00">Add to Cart</button>

                </div>

            </div>

        </div>

    </div>




    

    <footer>

        <div class="footer_main">

            <div class="footer_tag">
                <h2>Location</h2>
                <p>Sri Lankan Place</p>
                <p>Colombo</p>
                <p>Galle</p>
                <p>Matara</p>
                <p>Horton Place</p>
            </div>

            <div class="footer_tag">
                <h2>Quick Link</h2>
                <p>Home</p>
                <p>About</p>
                <p>Menu</p>
                <p>Gallery</p>
                <p>Blog</p>
            </div>

            <div class="footer_tag">
                <h2>Contact</h2>
                <p>Tel: +94 11 2686043</p>                
                <p>praveenbimsara123@gmail.com</p>
                <p> gallerycafe@paradiseroad.lk</p>
            </div>

            <div class="footer_tag">
                <h2>Our Services</h2>
                <p>Fast Delivery</p>
                <p>Easy Payments</p>
                <p>Open - 8 AM - 12 Midnight</p>
            </div>

            <div class="footer_tag">
                <h2>Follows</h2>
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>

        </div>

        <p class="end">Design by<span><i class="fa-solid fa-face-grin"></i> Praveen Bimsara</span></p>
 <!-- Floating Cart -->
 <div class="floating-cart">
        <h3>Cart</h3>
        <div id="cartItems"></div>
        <div class="cart-summary">
            <p>Total: <span id="cartTotal">RS0.00</span></p>
            <button id="checkoutBtn">Checkout</button>
        </div>
    </footer>
    </div>
    <script src="test.js"></script>
    <script src="menu.js"></script>
</body>
</html>