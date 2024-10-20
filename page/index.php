<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Gallery Cafe |Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="short icon" href="image/short_icon.png">
</head>
<body>

    <section id="Home">

        <nav>

            <div class="logo">
                <a href="index.php"><img src="../image/logo20.png"></a>
            </div>

            <ul>
                <li><a href="index.php" class="action">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="reservation1.php">Book Tabale</a></li>
                
            </ul>

            <div class="login">
                <a href="login.php">Login</a>
            </div>

            <div class="Admin">
                <a href="admin.php">Admin</a>
            </div>


        </nav>

        <div class="main anim">

            <div class="main_text">

                <h1>Get Fresh<span> Food</span><br>in a Easy Way</h1>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Laborum, minus magnam nobis quam impedit nemo quaerat ex 
                    necessitatibus ipsum totam voluptatum, fugit cupiditate 
                    provident, quasi perspiciatis blanditiis illo nesciunt quae. 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Accusantium odio tenetur laudantium corrupti impedit 
                    quidem dolore beatae, iure labore magni repellendus 
                    inventore, eaque obcaecati commodi ipsa numquam. Accusamus, 
                    molestiae veritatis.
                </p>

                <a href="#" class="btn" onclick="redirectToOrderPage()"><i class="fa-solid fa-burger"></i>Order Now</a>

<script>
function redirectToOrderPage() {
    window.location.href = 'menu.php'; // Replace 'menu.php' with your actual order page URL
}
</script>

            </div>

            <div class="main_image">
                <img src="../image/main_img.png">
            </div>

        </div>

    </section>


    <div class="about">

        <div class="about_main">

            <div class="about_image">
                <img src="../image/about.png">
            </div>

            <div class="about_text">

                <h1><span>About</span>Us</h1>
                <h3>why food choose us?</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Itaque recusandae dolore tempora fugiat quisquam illum, 
                    veniam adipisci iusto consequuntur porro explicabo 
                    repudiandae nam quis beatae obcaecati. Magnam provident 
                    fuga aspernatur. Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit. Cum minus facilis placeat sint repellendus 
                    dolorum nostrum, corrupti magni ducimus, et neque nihil enim. 
                    Tempore quia rerum placeat laboriosam, sit quasi!
                </p>

                <div class="about_services">

                    <div class="s_1">
                        <i class="fa-solid fa-truck-fast"></i>
                        <a href="#">Fast Delivery</a>
                    </div>

                    <div class="s_1">
                        <i class="fa-brands fa-amazon-pay"></i>
                        <a href="#">Easy Payment</a>
                    </div>

                    <div class="s_1">
                        <i class="fa-solid fa-headset"></i>
                        <a href="#">24 x 7 Services</a>
                    </div>

                </div>

                <a href="#" class="about_btn">
                    <i class="fa-solid fa-burger"></i>Order Now
                </a>

            </div>

        </div>

    </div>


   

    <div class="banner">

        <h1>Special Offer</h1>

        <div class="banner_center">
            <h2>50%<br><span>Off</span></h2>
        </div>

        <a href="#" class="banner_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

    </div>




    

    <div class="gallery">

        <h1>Popular<span>Gallery</span></h1>

        <div class="gallery_box">

            <div class="gallery_image">
                <img src="../image/gallery_1.jpg">
            </div>

            <div class="gallery_image">
                <img src="../image/gallery_2.jpg">
            </div>

            <div class="gallery_image">
                <img src="../image/gallery_3.webp">
            </div>

        </div>

    </div>



   
    <div class="offer">

        <div class="offer_box">

            <div class="offer_card_1">

                <div class="offer_img">
                    <img src="../image/offer_1.jpg">
                </div>

                <div class="offer_tag">

                    <h2>Triplae Food</h2>
                    <h1>40%</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Itaque quibusdam quas distinctio sit? Corrupti 
                        necessitatibus modi nobis?
                    </p>
                    <a href="#" class="offer_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

                </div>

            </div>

            <div class="offer_card_2">

                <div class="offer_img">
                    <img src="../image/offer_2.png">
                </div>

                <div class="offer_tag">

                    <h2>Buy 2 pizza and get a <br>free Drink</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Itaque quibusdam quas distinctio sit? Corrupti 
                        necessitatibus modi nobis?
                    </p>
                    <a href="#" class="offer_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

                </div>

            </div>

        </div>

    </div>




   

    <div class="team">

        <h1>Our<span>Team</span></h1>

        <div class="team_line_1"></div>
        <div class="team_line_2"></div>

        <div class="team_box">

            <div class="team_card">

                <div class="team_img">
                    <img src="../image/team_1.jpg">
                </div>

                <div class="team_tag">

                    <h2>John Deo</h2>
                    <p class="job">Cook</p>
                    <p class="info">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Accusantium cupiditate deserunt odio in fugiat dolore! 
                        Veniam sit quod iusto quas eligendi. Natus numquam 
                        aspernatur alias illo voluptates dolorem, id ad.
                    </p>

                </div>

            </div>

            <div class="team_card">

                <div class="team_img">
                    <img src="../image/team_2.jpg">
                </div>

                <div class="team_tag">

                    <h2>John Deo</h2>
                    <p class="job">Cook</p>
                    <p class="info">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Accusantium cupiditate deserunt odio in fugiat dolore! 
                        Veniam sit quod iusto quas eligendi. Natus numquam 
                        aspernatur alias illo voluptates dolorem, id ad.
                    </p>

                </div>

            </div>

            <div class="team_card">

                <div class="team_img">
                    <img src="../image/team_3.jpg">
                </div>

                <div class="team_tag">

                    <h2>John Deo</h2>
                    <p class="job">Cook</p>
                    <p class="info">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Accusantium cupiditate deserunt odio in fugiat dolore! 
                        Veniam sit quod iusto quas eligendi. Natus numquam 
                        aspernatur alias illo voluptates dolorem, id ad.
                    </p>

                </div>

            </div>

            <div class="team_card">

                <div class="team_img">
                    <img src="../image/team_4.jpg">
                </div>

                <div class="team_tag">

                    <h2>John Deo</h2>
                    <p class="job">Cook</p>
                    <p class="info">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Accusantium cupiditate deserunt odio in fugiat dolore! 
                        Veniam sit quod iusto quas eligendi. Natus numquam 
                        aspernatur alias illo voluptates dolorem, id ad.
                    </p>

                </div>

            </div>

        </div>

    </div>




   

    <div class="blog">

        <h1>Our<span>Blog</span></h1>

        <div class="blog_box">

            <div class="blog_card">

                <div class="blog_img">
                    <img src="../image/blog_1.jpeg">
                </div>

                <div class="blog_tag">

                    <div class="blog_date">
                        <p>18 May 2022<i class="fa-solid fa-calendar-days"></i></p>
                    </div>

                    <h3 class="blog_heading">
                        Do Not Leave toko before Eating this remen
                    </h3>

                    <p class="blog_text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Eos rerum commodi fugiat eum assumenda vel cumque eaque 
                        totam doloribus.
                    </p>

                    <hr>

                    <div class="view_and_like">

                        <div class="view">
                            <p>15.3K Views</p>
                            <p class="b_comm">786 comments</p>
                        </div>

                        <div class="like">
                            <p>3K</p>
                            <i class="fa-regular fa-heart"></i>
                        </div>

                    </div>

                </div>

            </div>

            <div class="blog_card">

                <div class="blog_img">
                    <img src="../image/blog_2.jpg">
                </div>

                <div class="blog_tag">

                    <div class="blog_date">
                        <p>18 May 2022<i class="fa-solid fa-calendar-days"></i></p>
                    </div>

                    <h3 class="blog_heading">
                        Do Not Leave toko before Eating this remen
                    </h3>

                    <p class="blog_text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Eos rerum commodi fugiat eum assumenda vel cumque eaque 
                        totam doloribus.
                    </p>

                    <hr>

                    <div class="view_and_like">

                        <div class="view">
                            <p>15.3K Views</p>
                            <p class="b_comm">786 comments</p>
                        </div>

                        <div class="like">
                            <p>3K</p>
                            <i class="fa-regular fa-heart"></i>
                        </div>

                    </div>

                </div>

            </div>

            <div class="blog_card">

                <div class="blog_img">
                    <img src="../image/blog_3.jpg">
                </div>

                <div class="blog_tag">

                    <div class="blog_date">
                        <p>18 May 2022<i class="fa-solid fa-calendar-days"></i></p>
                    </div>

                    <h3 class="blog_heading">
                        Do Not Leave toko before Eating this remen
                    </h3>

                    <p class="blog_text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Eos rerum commodi fugiat eum assumenda vel cumque eaque 
                        totam doloribus.
                    </p>

                    <hr>

                    <div class="view_and_like">

                        <div class="view">
                            <p>15.3K Views</p>
                            <p class="b_comm">786 comments</p>
                        </div>

                        <div class="like">
                            <p>3K</p>
                            <i class="fa-regular fa-heart"></i>
                        </div>

                    </div>

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
                <p>Order</p>

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

    </footer>



    
</body>
</html>