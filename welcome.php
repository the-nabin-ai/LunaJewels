<?php

session_start();
require_once "config.php";

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luna Jewels: Something from another world</title>
    <script src="popupjs.js"></script>
</head>
<link rel="stylesheet" href="style.css">
<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

<body>
    <header>
        <a href="#" class="logo"><img src="img/logo.png" alt="logo"></a>
        <ul>
            <li><a href="index.html" id="active">Home</a></li>
            <li><a href="aboutus.html">AboutUs</a></li>
            <li><a href="contact.html">ContactUs</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </header>
    <section>
        <img src="img/stars.png" id="stars">
        <img src="img/moon.png" id="moon">
        <img src="img/mountains_behind.png" id="mountains_behind">
        <h3 id="text"><?php echo "Welcome " . $_SESSION['username'] ?>! </h3>
        <a href="#about" id="btn">Explore</a>
        <img src="img/mountains_front.png" id="mountains_front">
    </section>
    <div id="about">
        <h1>What do we offer?</h1>
        <p class="tagline"> Gift the cosmos to your beloved; for in our celestial atelier, we weave tales of love,
            making every piece a testament to the cosmic dance of hearts. Discover the allure that transcends time;
            for in our celestial haven, we offer not just jewelry, but fragments of love's radiant symphony. <br> Fulfill the promise of giving the moon to your beloved ones.</p>
        <div class="main">

        <?php 
            $select_product = mysqli_query($conn, "SELECT * FROM products");
            if(mysqli_num_rows($select_product)>0){
                while($fetch_product = mysqli_fetch_assoc($select_product)){
                    ?>
                    <form action="" method="post">
                        <img src="<?php echo $fetch_product['image']; ?>" alt="" srcset="">
                    </form>
                    <?php

                }
            }
        ?>
            <!-- <form action="" method="post">
                <div class="card">

                    <div class="image">
                        <img src="https://www.spacemeteorite.com/cdn/shop/products/LUNA101_1413x1413.jpg?v=1660931104">
                    </div>
                    <div class="title">
                        <h4>
                        Authentic Moon Dust Crescent Series Necklace (From Lunar Meteorite NWA 5000) </h4>
                    </div>
                    <div class="des">
                        <p>Rs23,200.00</p>
                        <button class="submission" type="submit">Add to Cart</button> 
                        <button type="submit">Add to Cart</button>
                    </div>
                </div>


                <div class="card">

                    <div class="image">
                        <img src="https://www.spacemeteorite.com/cdn/shop/products/CRESROCK01_1413x1413.jpg?v=1660930848">
                    </div>
                    <div class="title">
                        <h4>
                            Authentic Moon Rock Crescent Series Necklace (From Lunar Meteorite NWA 11788) </h4>
                    </div>
                    <div class="des">
                        <p>Rs23,200.00</p>
                        <button type="submit">Add to Cart</button>
                    </div>
                </div>


                <div class="card">

                    <div class="image">
                        <img src="https://www.spacemeteorite.com/cdn/shop/files/Calaxy-01_1649x1649.jpg?v=1700596673">
                    </div>
                    <div class="title">
                        <h4>
                            Authentic Moon Rock Galaxy Series Necklace (From Lunar Meteorite NWA 11788) </h4>
                    </div>
                    <div class="des">
                        <p>Rs23,200.00</p>
                        <button type="submit">Add to Cart</button>
                    </div>
                </div>


                <div class="card">

                    <div class="image">
                        <img src="https://www.spacemeteorite.com/cdn/shop/products/lunaB01_1413x1413.jpg?v=1660931190">
                    </div>
                    <div class="title">
                        <h4>
                            Authentic Moon Dust Bracelet (From Lunar Meteorite NWA 5000) </h4>
                    </div>
                    <div class="des">
                        <p>Rs19,100.00</p>
                        <button type="submit">Add to Cart</button>
                    </div>
                </div>


                <div class="card">

                    <div class="image">
                        <img src="https://www.spacemeteorite.com/cdn/shop/files/MoongLightE-01_1997x1997.jpg?v=1702244289">
                    </div>
                    <div class="title">
                        <h4>
                            Authentic Moon Rock Moonlight Series Earrings (From Lunar Meteorite NWA 11788)</h4>
                    </div>
                    <div class="des">
                        <p>Rs20,500.00</p>
                        <button type="submit">Add to Cart</button>
                    </div>
                </div>

                <div class="card">

                    <div class="image">
                        <img src="https://www.spacemeteorite.com/cdn/shop/products/SMALLe01_1413x1413.jpg?v=1661362948">
                    </div>
                    <div class="title">
                        <h4>
                            Authentic Moon Rock Crescent Earrings (From Lunar Meteorite NWA 11788) </h4>
                    </div>
                    <div class="des">
                        <p>Rs19,100.00</p>
                        <button type="submit">Add to Cart</button>
                    </div>
                </div>

                <div class="card">

                    <div class="image">
                        <img src="https://www.spacemeteorite.com/cdn/shop/files/Moonrings-04_1649x1649.jpg?v=1700716527">
                    </div>
                    <div class="title">
                        <h4>
                            Authentic Lunar Crescent Series Ring (From Lunar Meteorite NWA 11788) </h4>
                    </div>
                    <div class="des">
                        <p>Rs19,100.00</p>
                        <button type="submit">Add to Cart</button>

                    </div>
                </div>


                <div class="card">

                    <div class="image">
                        <img src="https://www.spacemeteorite.com/cdn/shop/products/Infinity01_1997x1997.jpg?v=1660931042">
                    </div>
                    <div class="title">
                        <h4>
                            Authentic Moon Fragments/ Dust Infinity Earrings (From Lunar Meteorite NWA 11788) </h4>
                    </div>
                    <div class="des">
                        <p>Rs19,100.00</p>
                        <button type="submit">Add to Cart</button>
                    </div>
                </div>
            </form> -->
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Luna Jewels. All rights reserved.</p>
    </footer>
    <!-- <div id="popupContainer" class="popup-container">
    <div id="popup" class="popup">
        <span class="popup-close" onclick="closePopup()">&times;</span>
        <h2>Product Details</h2>
        <p><strong>Product:</strong> Authentic Moon Dust Crescent Series Necklace (From Lunar Meteorite NWA 5000)</p>
        <p><strong>Price:</strong> Rs23,200.00</p>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" class="quantity-input" value="1">
        <p id="totalCost"><strong>Total Cost:</strong> Rs23,200.00</p>
        <button onclick="addToCart()">Add to Cart</button>
    </div>
</div> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script defer src="app.js"></script>
</body>

</html>