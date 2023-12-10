<?php 
require("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    </link>
    <link rel="stylesheet"
                href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
            <link rel="stylesheet"
                href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo_ul">
                <a href="/"><img src="img/AL ZAIKA.png" alt=""></a>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#bookrev">BOOK A TABLE</a></li>
                    <li><a href="#del">FOOD TRACK</a></li>
                    <li><a href="#menu">MENU <i class="bi bi-book"></i></a></li>
                </ul>
            </div>
            <div class="contact_select">
                <div class="searchboxx">
                    <table class="elemsearch">
                        <tr>
                            <td>
                                <input type="text" placeholder="Near by Restaurants.." class="search">
                            </td>
                            <td>
                                <a href=""><i class="fa-solid fa-magnifying-glass fa"></i> </a>
                            </td>
                        </tr>
                    </table>
                </div>
                <button class="loginbtn btnLogin-popup">LOGIN</button>
                <i class="fa-sharp fa-solid fa-cart-shopping"></i>
            </div>
        </nav>
        <div class="loginpage">
            <div class="page">
                <span class="icon-close">
                    <i class="fa-solid fa-xmark"></i>
                </span>
                <div class="form-box login">
                    <h2>LOGIN</h2>
                    <form method="POST" action="login_register.php" >
                        <div class="input-box">
                            <span class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                            <input type="email" required name="email_username">
                            <label>EMAIL</label>
                        </div>
                        <div class="input-box">
                            <span class="icon">

                                <i class="fa-solid fa-lock"></i>
                            </span>
                            <input type="password" required name="password">
                            <label>PASSWORD</label>
                        </div>
                        <div class="remember-forget">
                            <label><input type="checkbox">REMEMBER ME</label>
                            <a href="#">Forget Password?</a>
                        </div>
                        <button type="submit" class="btn" name="login">LOGIN</button>
                        <div class="login-register">
                            <p>Don't Have an account?<a href="#" class="register-link">Register</a></p>
                        </div>
                    </form>
                </div>
                <div class="form-box register">
                    <h2>REGISTRATION</h2>
                    <form  method="POST" action="login_register.php">
                        <div class="input-box">
                            <span class="icon">
                                <i class="fa-solid fa-user"></i>
                            </span>
                            <input type="text" required name="username" >
                            <label>USERNAME</label>
                        </div>
                        <div class="input-box">
                            <span class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                            <input type="email" required name="email" >
                            <label>EMAIL</label>
                        </div>
                        <div class="input-box">
                            <span class="icon">

                                <i class="fa-solid fa-lock"></i>
                            </span>
                            <input type="password" required name="password" >
                            <label>PASSWORD</label>
                        </div>
                        <div class="remember-forget">
                            <label><input type="checkbox">I agree to the terms and conditions</label>

                        </div>
                        <button type="submit" class="btn" name="register" >REGISTER</button>
                        <div class="login-register">
                            <p>Already Have an account?<a href="#" class="login-link">LOGIN</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Section Start  -->
        <section>
            <div class="content">
                <h5>NEW</h5>
                <h1 class="title">THE ITALIAN<br> BURGER</h1>
                <div class="spicy_icon">
                    <img src="img/icon_1.png" alt="">
                    <img src="img/icon_1.png" alt="">
                    <img src="img/icon_1.png" alt="">
                    <img src="img/icon_2.png" alt="">
                    <img src="img/icon_2.png" alt="">
                </div>
                <p>Culinary Delights, Crafted with Passion
                    Experience the Symphony of Flavors</p>
                <h6>INGREDIENTS</h6>
                <div class="ing_icon">
                    <img src="img/icon_3.png" alt="">
                    <img src="img/icon_4.png" alt="">
                    <img src="img/icon_5.png" alt="">
                    <img src="img/icon_6.png" alt="">
                    <img src="img/icon_7.png" alt="">
                    <h6>+3</h6>
                </div>
                <div class="order_rate">
                    <a href="">ORDER NOW</a>
                    <h2 class="price">349 <sup><del>399</del></sup></h2>
                </div>
                <div class="food_slider">
                    <img src="img/Burger-1.png" alt="" class="pagi_img">
                    <img src="img/fries-20360.png" alt="" class="pagi_img">
                    <img src="img/traditional-fresh-japanese-sushi-rolls-removebg-preview.png" alt="" class="pagi_img">
                    <img src="img/WhatsApp_Image_2023-11-25_at_2.13.23_PM-removebg-preview.png" alt="" class="pagi_img">
                    <img src="img/delicious-pizza-indoors-removebg-preview.png" alt="" class="pagi_img">
                    <img src="img/[removal.ai]_81fdbac7-6b7c-46c6-9f25-c3a87f84655a-close-up-view-delicious-dumplings.png"
                        alt="" class="pagi_img">
                    <img src="img/Burger-7.png" alt="" class="pagi_img">
                </div>
            </div>
            <div class="img_bx">
                <div class="images">
                    <img class="main_imgs" src="img/Burger-1.png" alt="">
                    <img class="main_imgs" src="img/fries-20360.png" alt="">
                    <img class="main_imgs" src="img/traditional-fresh-japanese-sushi-rolls-removebg-preview.png" alt="">
                    <img class="main_imgs" src="img/WhatsApp_Image_2023-11-25_at_2.13.23_PM-removebg-preview.png"
                        alt="">
                    <img class="main_imgs" src="img/delicious-pizza-indoors-removebg-preview.png" alt="">
                    <img class="main_imgs"
                        src="img/[removal.ai]_81fdbac7-6b7c-46c6-9f25-c3a87f84655a-close-up-view-delicious-dumplings.png"
                        alt="">
                    <img class="main_imgs" src="img/Burger-7.png" alt="">
                </div>
                <div class="slide_btns">
                    <i class="bi bi-chevron-left"></i>
                    <i class="bi bi-chevron-right"></i>
                </div>
                <div class="burger_badge">
                    <div class="badge_card">
                        <h6>Calorie</h6>
                        <p>Kcal</p>
                        <h5 id="calorie">7845</h5>
                    </div>
                    <div class="badge_card">
                        <h6>Fat</h6>
                        <p>g</p>
                        <h5 id="fat">83</h5>
                    </div>
                    <div class="badge_card">
                        <h6>Protien</h6>
                        <p>g</p>
                        <h5 id="protien">75</h5>
                    </div>
                </div>
            </div>
        </section>
         <button class="chatbot-toggler">
                <span class="material-symbols-rounded">mode_comment</span>
                <span class="material-symbols-outlined">close</span>
            </button>
            <div class="chatbot">
                <header>
                    <h2>Chatbot</h2>
                    <span class="close-btn material-symbols-outlined">close</span>
                </header>
                <ul class="chatbox">
                    <li class="chat incoming">
                        <span class="material-symbols-outlined">smart_toy</span>
                        <p>Hi there 👋<br>How can I help you today?</p>
                    </li>
                </ul>
                <div class="chat-input">
                    <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
                    <span id="send-btn" class="material-symbols-rounded">send</span>
                </div>
            </div>

        

       
           
        <div id="del">
            <div class="cont">
                <h1>REALY <br> FAAAAAAAAAST <br> DELIVERY</h1>
                
            </div>
            <img src="img/pngwing.com.png" alt="">

            <div class="locat">
                <h1>FETCH YOUR LOCATION</h1>
                <div id="map"></div>
                <!-- <iframe
                    
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13010.931967349557!2d77.50739465143063!3d28.461003713667242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cc1d5cec6db2b%3A0x565df5a0cea80aa4!2sPari%20Chowk%2C%20Greater%20Noida%2C%20Uttar%20Pradesh%20201310%2C%20India!5e1!3m2!1sen!2sde!4v1701069110741!5m2!1sen!2sde"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe> -->
            </div>
        </div>


    </header>
    <div class="card_bx">
            <div class="cards_bx1">
                <div class="card card1">
                    <div class="content">
                        <h2>
                            ANY DAY
                            <br>
                            OFFERS
                        </h2>
                        <p>
                            NEW PHENOMENON
                            <br>
                            BURGER TASTE
                        </p>
                        <h4>12.90 TL</h4>
                        <div class="dots">
                            <h2></h2>
                            <h2></h2>
                            <h2></h2>
                            <h2></h2>
                        </div>
                    </div>
                    <img src="img/card1.png" alt="food" loading="lazy">
                </div>
                <div class="card card2 ">
                    <div class="content">
                        <h2>
                            OTHER
                            <br>
                            FLAVORS
                        </h2>
                        <p>
                            SAVE ROOM.
                            <br>
                            WE MADE COOKIES
                        </p>
                        <h4>3.90 TL</h4>
                        <div class="dots">
                            <h2></h2>
                            <h2></h2>
                            <h2></h2>
                        </div>
                    </div>
                    <img src="img/card2.png" alt="food" loading="lazy">
                </div>
                <div class="card card3 ">
                    <div class="content">
                        <h2>
                            FIND A 
                            <br>
                            STORE
                            <br>
                            NEAR YOU
                        </h2>
                        <div class="dots">
                            <h2></h2>
                            <h2></h2>
                            <h2></h2>
                        </div>
                    </div>
                    <img src="img/card3.png" alt="food" loading="lazy">
                </div>
                <div class="card card4  card_b">
                    <div class="content">
                        <h2>
                            CRISPY AND
                            <br>
                            FRESHLY MADE
                            <br>
                            BURGER
                        </h2>
                        <a href="#">100% NATURAL VEGITABLES</a>
                    </div>
                    <img src="img/card4.png" alt="food" loading="lazy">
                </div>
                <div class="card card5  card_b">
                    <div class="content">
                        <h2>
                            DO YOU WANT
                            <br>
                            TO BE AHOPE
                        </h2>
                        <a href="#">SEE MORE</a>
                    </div>
                    <img src="img/card5.png" alt="food" loading="lazy">
                </div>
            </div>
        </div>  
        <div class="ingr">
        <div class="main-text">
            <h2>Ingredients</h2>
            <p>Only the Best for You</p>
        </div>

        <div class="container-box">
            <div class="c-mainbox">
                <div class="container-img">
                    <img src="img/b1.png" alt="box1">
                </div>
                <div class="container-text">
                    <p>Delicate Dough</p>
                </div>
            </div>

            <div class="c-mainbox">
                <div class="container-img">
                    <img src="img/b2.png" alt="box2">
                </div>
                <div class="container-text">
                    <p>Fresh Tomatoes</p>
                </div>
            </div>

            <div class="c-mainbox">
                <div class="container-img">
                    <img src="img/b3.png" alt="box3">
                </div>
                <div class="container-text">
                    <p>Alpine Cheese</p>
                </div>
            </div>

            <div class="c-mainbox">
                <div class="container-img">
                    <img src="img/b4.png" alt="box4">
                </div>
                <div class="container-text">
                    <p>Italian Sausage</p>
                </div>
            </div>
        </div>
    </div>

    <div class="food_chart">
        <div class="food_bx">
            <div class="cont">
                <h1>SAND- <br>WICHES</h1>
                <p>is a patty<br>
                     of fresh potatoes grilled and placed between two halves of a bun. </p>
                <p>Slices of raw onion, lettuce, bacon, mayonnaise, and other ingredients add flavor</p>
                <button>VIEW MENU</button>
            </div>
            <img src="img/food_box_1_img.png" alt="">
        </div>
        <div class="food_bx">
            <div class="cont">
                <h1>HOUSE <br> BURGER</h1>
                <p>The best burgers offer a combination </p>
                <p>of tastes and textures sweet, sour, salt  with a bit of crunch.</p>
                <button>VIEW MENU</button>
            </div>
            <img src="img/food_box_2_img.png" alt="">
        </div>
        <div class="food_bx">
            <div class="cont">
                <h1>FRESH <br>SALADS</h1>
                <p>A salad that is fresh, nutrient-rich, and flavorful is a great way to enjoy a healthy and delicious meal.
                     To make a fresh salad, it's important to choose high-quality and in-season ingredients that are bursting with vibrant colors and texture
                    </p>
                
                <button>VIEW MENU</button>
            </div>
            <img src="img/food_box_3_img.png" alt="">
        </div>
    </div>
    <div class="food_chart food_chart2">
        <div class="food_bx">
            <div class="cont">
                <h1>FOR ALL<br>KIDS</h1>
                <p>It is the perfect balance of sweetness,<br> beef taste, salt and light flavoring </p>
                <button>VIEW MENU</button>
            </div>
            <img src="img/food_box_4_img.png" alt="">
        </div>
        <div class="food_bx">
            <div class="cont">
                <h1>TASTY <br> BURGER</h1>
                <p>Tasty and delicious for your sweet<br> cravings</p>
                <button>VIEW MENU</button>
            </div>
            <img src="img/food_box_2_img.png" alt="">
        </div>
        <div class="food_bx">
            <div class="cont">
                <h1>AND <br>MUCH <br> MUCH <br>MORE...</h1>
                <button><i class="bi bi-chevron-right"></i></button>
            </div>
        </div>
    </div>
  
    <section class="menu" id="menu">
        <div class="main-text">
            <h2>Ingredients</h2>
            <p>We have selected for You<br> the most exquisite tastes around the world</p>
        </div>

        <div class="menu-content">
            <div class="row">
                <img src="img/paasta.jpg" alt="main-product1">
                <div class="menu-text">
                    <div class="menu-left">
                        <h4>Paasta</h4>
                    </div>
                    <div class="menu-right">
                        <h5>265/-</h5>
                    </div>
                </div>
                <p>Tasty pasta prepare with fresh vegetables.</p>
                <div class="star">
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"><i class='bx bxs-star'></i></a>
                </div>
            </div>
            <div class="row">
                <img src="img/newbiryani.jpg" alt="main-product1">
                <div class="menu-text">
                    <div class="menu-left">
                        <h4>Biryani</h4>
                    </div>
                    <div class="menu-right">
                        <h5>300/-</h5>
                    </div>
                </div>
                <p>Well-cooked, flavoursome, succulent, delicious.  </p>
                <div class="star">
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"><i class='bx bxs-star'></i></a>
                </div>
            </div>
            <div class="row">
                <img src="img/ramen.jpg" alt="main-product1">
                <div class="menu-text">
                    <div class="menu-left">
                        <h4>Ramen</h4>
                    </div>
                    <div class="menu-right">
                        <h5>320/-</h5>
                    </div>
                </div>
                <p>"Ramen: The art of turning soup into an adventure."</p>
                <div class="star">
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"><i class='bx bxs-star'></i></a>
                </div>
            </div>
            <div class="row">
                <img src="img/ttopki.jpg" alt="main-product2">
                <div class="menu-text">
                    <div class="menu-left">
                        <h4>Tteokbokki</h4>
                    </div>
                    <div class="menu-right">
                        <h5>320/-</h5>
                    </div>
                </div>
                <p>It's a chewy,spicy, pillowy rice cake .</p>
                <div class="star">
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"><i class='bx bxs-star'></i></a>
                </div>
            </div>

            <div class="row">
                <img src="img/thali.jpg" alt="main-product3">
                <div class="menu-text">
                    <div class="menu-left">
                        <h4>Thali</h4>
                    </div>
                    <div class="menu-right">
                        <h5>420/-</h5>
                    </div>
                </div>
                <p>A perefct combination of different food .</p>
                <div class="star">
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"><i class='bx bxs-star'></i></a>
                </div>
            </div>

            <div class="row">
                <img src="img/pizza.jpg" alt="main-product4">
                <div class="menu-text">
                    <div class="menu-left">
                        <h4>Pizza</h4>
                    </div>
                    <div class="menu-right">
                        <h5>250/-</h5>
                    </div>
                </div>
                <p>It's hot, and succulent at the same time</p>
                <div class="star">
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"><i class='bx bxs-star'></i></a>
                </div>
            </div>
        </div>

    </section>

    <div id="bookrev">
        <section class="banner">
            <h2>BOOK YOUR TABLE NOW</h2>
            <div class="card-container">
                <div class="card-img">
                    <!-- image here -->
                </div>

                <div class="card-content">
                    <h3>Reservation</h3>
                    <form>
                        <div class="form-row">
                            <select name="days">
                                <option value="day-select">Select Day</option>
                                <option value="sunday">Sunday</option>
                                <option value="monday">Monday</option>
                                <option value="tuesday">Tuesday</option>
                                <option value="wednesday">Wednesday</option>
                                <option value="thursday">Thursday</option>
                                <option value="friday">Friday</option>
                                <option value="saturday">Saturday</option>
                            </select>

                            <select name="hours">
                                <option value="hour-select">Select Hour</option>
                                <option value="10">10: 00</option>
                                <option value="10">12: 00</option>
                                <option value="10">14: 00</option>
                                <option value="10">16: 00</option>
                                <option value="10">18: 00</option>
                                <option value="10">20: 00</option>
                                <option value="10">22: 00</option>
                            </select>
                        </div>

                        <div class="form-row">
                            <input type="text" placeholder="Full Name">
                            <input type="text" placeholder="Phone Number">
                        </div>

                        <div class="form-row">
                            <input type="number" placeholder="How Many Persons?" min="1">
                            <input type="submit" value="BOOK TABLE">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <div class="main_bx">
        <h1>BEST QUALITY <br> INGREDIENTS</h1>
        <img src="img/food main.png" alt="">
        <p>We have selected best organic ingredients for you.</p>
        <button>VIEW MENU</button>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/the_al_zaika/"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- <div class="loader-container">
        <img src="/img/Food Loader - GIF Animation.gif" alt="#">
    </div>  -->
    <script src="script.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <script src="app.js"></script>
    <script src="chatbot.js"></script>
    <script src="map.js"></script>
</body>

</html>