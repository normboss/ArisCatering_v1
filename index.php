<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ari's Catering'</title>

    <link href="./css/index.css" media="screen" rel="stylesheet" type="text/css">


</head>

<body>
    <main>

        <!-- <nav>
            <ul>
                <li>HOME</li>
                <li>ABOUT</li>
            </ul>
        </nav> -->
        <div class="top-section">

            <header>

                <div class="left-side">

                    <div class="cookin-and-logo1">
                        <div class="box1 cookin">
                            <div class="cookin1">
                                See
                            </div>
                            <div class="cookin1">
                                What’s
                            </div>
                            <div class="cookin1">
                                Cookin’
                            </div>
                            <div class="cookin1">
                                at
                            </div>
                        </div>
                        <img class="box1 logo" src="./images/chef_black_whte_trans1.png">
                        <div class="blank">
                        </div>
                        <div class="box1 catering">
                            Ari's Catering!
                        </div>
                    </div>


                    <div class="box hollis">
                        Serving the Hollis,&nbsp;NH&nbsp;area
                    </div>
                </div>

                <div class="right-side">
                    <div class="box delicious">
                        Delicious daily entrees with fruit,&nbsp;snack & drink
                    </div>

                    <div class="box price1">
                        <span class="only">Only&nbsp;</span>
                        <span class="dollars">$12</span>
                        <span class="cents">99</span>
                        <span class="asteric">*</span>
                        <div class="pickup">
                        Picked up
                        </div>
                    </div>

                    <div class="box delivery">
                        <!-- Add $5 for delivery, or get free delivery for 3 or more same&#8209;day&nbsp;orders -->
                        *Add $5 for delivery, or free delivery for 3+ same&#8209;day orders to same&nbsp;address
                    </div>

                    <div class="box phone-number">
                        <a href="tel:802-503-2124">802-503-2124</a>
                    </div>

                    <div class="box orders">
                        Call in your order 3 days in advance, and pay with Venmo&nbsp;or&nbsp;cash
                    </div>
                </div>
            </header>
        </div>

        <div class="menu-section">

            <div class="menu-header">
                <p>MENU:</p>
                <img src="./images/resizedImage.jpg" alt="">
                <!-- <img src="./images/
                    <?php // require './resources/image-name.php' 
                    ?>" alt=""> 
                -->
                <!-- <div class="shredded-container">
                    <div class="shredded">
                        Our Shredded
                    </div>
                    <div class="shredded">
                        Beef Taco
                    </div>
                </div> -->
            </div>

            <div class="menu-item">
                <div id="monday" class="day-header">
                    <?php require './resources/monday-date.php';  ?>
                </div>
                <div class="meal-summary">
                    <?php require './resources/monday-heading.php';  ?>
                </div>
                <div class="meal-content">
                    <?php require './resources/monday-content.php';  ?>
                </div>
            </div>

            <div class="menu-item">
                <div id="tuesday" class="day-header">
                    <?php require './resources/tuesday-date.php';  ?>
                </div>
                <div class="meal-summary">
                    <?php require './resources/tuesday-heading.php';  ?>
                </div>

                <div class="meal-content">
                    <?php require './resources/tuesday-content.php';  ?>
                </div>
            </div>

            <div class="menu-item">
                <div id="wednesday" class="day-header">
                    <?php require './resources/wednesday-date.php';  ?>
                </div>
                <div class="meal-summary">
                    <?php require './resources/wednesday-heading.php';  ?>
                </div>
                <div class="meal-content">
                    <?php require './resources/wednesday-content.php';  ?>
                </div>
            </div>
            <div class="menu-item">
                <div id="thursday" class="day-header">
                    <?php require './resources/thursday-date.php';  ?>
                </div>
                <div class="meal-summary">
                    <?php require './resources/thursday-heading.php';  ?>
                </div>
                <div class="meal-content">
                    <?php require './resources/thursday-content.php';  ?>
                </div>
            </div>
            <div class="menu-item">
                <div id="friday" class="day-header">
                    <?php require './resources/friday-date.php';  ?>
                </div>
                <div class="meal-summary">
                    <?php require './resources/friday-heading.php';  ?>
                </div>
                <div class="meal-content">
                    <!-- Served up on a fresh croissant with choice of lettuce, tomato and/or onion -->
                    <?php require './resources/friday-content.php';  ?>
                </div>
            </div>
            <div class="menu-item">
                <div id="saturday" class="day-header">
                    <?php require './resources/saturday-date.php';  ?>
                </div>
                <div class="meal-summary">
                    <?php require './resources/saturday-heading.php';  ?>
                </div>
                <div class="meal-content">
                    <!-- Served up on a fresh croissant with choice of lettuce, tomato and/or onion -->
                    <?php require './resources/saturday-content.php';  ?>
                </div>
            </div>

        </div>
    </main>


    <div class="footer">
        <p class="copy1">
            All entrees of the freshest ingredients, cooked by Ari &&nbsp;packed in&nbsp;natural microwaveable containers, plus&nbsp;napkin&nbsp;&&nbsp;utensils.
        </p>
        <p class="copy2">
            Everything prepared in a kitchen where dairy, gluten, eggs, peanuts and&nbsp;other allergens&nbsp;are&nbsp;used.
        </p>
        <div class="phone-etc">
            <div class="footer-phone-number"> 802-503-2124</div>
            <!-- <div class="footer-images">
                <img src="./images/facebook-icon.png" alt="Facebook icon">
                <img src="./images/instagram-icon.png" alt="Instagram icon">
            </div> -->
        </div>

        <div class="alchemy">
            <img src="./images/copyright-icon.png">
            <p>&nbsp;2020 Alchemy Web Designs</p>
        </div>
    </div>


</body>

</html>