<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunch Take-out and Delivery | Ari's Catering</title>
    <meta name="description" content="Lunch Take-out and Delivery in the Hollis NH area. Daily entrees with fruit, snack and drink.">

    <link href="../../css/index-ref.css" media="screen" rel="stylesheet" type="text/css">


</head>

<body>
    <main>

        <nav>
            <ul>
                <li><a href="../../index.php">Home</a></li>
                <li>About</li>
                <li><a href="../index.php">Update</a></li>
            </ul>
        </nav>
        <div class="top-section">

            <header>

                <div class="left-side">

                    <div class="box cookin-and-logo1">
                        <div class="box cookin">
                            <div class="cookin1">
                                See
                            </div>
                            <div class="box cookin1">
                                What’s
                            </div>
                            <div class="box cookin1">
                                Cookin’
                            </div>
                            <div class="box cookin1">
                                at
                            </div>
                        </div>
                        <img class="box1 logo" src="../../images/chef_black_whte_trans1.png">
                        <div class="blank">
                        </div>
                        <div class="box catering">
                            Ari's Catering!
                        </div>
                    </div>

                    <div class="box take-out">
                    Take-out service for&nbsp;the&nbsp;Hollis,&nbsp;NH&nbsp;area
                    </div>

                    <!-- <div class="box hollis">
                        for the Hollis,&nbsp;NH&nbsp;area
                    </div> -->
                </div>

                <div class="right-side">
                    <div class="box delicious">
                        Delicious daily entrees with fruit,&nbsp;snack&nbsp;&&nbsp;drink
                    </div>

                    <div class="box price1">
                        <span class="only">Only&nbsp;</span>
                        <span class="dollars">$12</span>
                        <!-- <span class="cents">99</span> -->
                        <span class="asteric">*</span>
                        <span class="pickup">
                            Picked up
                        </span>
                    </div>

                    <div class="box delivery">
                        *Add $5 for delivery, or free delivery&nbsp;for 3+ same&#8209;day orders to&nbsp;same&nbsp;address
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
            <!-- <button onclick="doUpdate()">Update Menu</button> -->

            <div class="menu-header">
                <p>MENU:</p>
                <!-- <img src="../../images/resizedImage.jpg" alt=""> -->
                <img src="../../images/<?php require '../../resources/image-name.php'?>" alt=""> 
            </div>

            <div class="menu-item">
                <div id="monday" class="day-header">
                    <?php require '../../resources/monday-date.php';  ?>
                </div>
                <div class="meal-summary">
                    <?php require '../../resources/monday-heading.php';  ?>
                </div>
                <div class="meal-content">
                    <?php require '../../resources/monday-content.php';  ?>
                </div>
            </div>

            <div class="menu-item">
                <div id="tuesday" class="day-header">
                    <?php require '../../resources/tuesday-date.php';  ?>
                </div>
                <div class="meal-summary">
                    <?php require '../../resources/tuesday-heading.php';  ?>
                </div>

                <div class="meal-content">
                    <?php require '../../resources/tuesday-content.php';  ?>
                </div>
            </div>

            <div class="menu-item">
                <div id="wednesday" class="day-header">
                    <?php require '../../resources/wednesday-date.php';  ?>
                </div>
                <div class="meal-summary">
                    <?php require '../../resources/wednesday-heading.php';  ?>
                </div>
                <div class="meal-content">
                    <?php require '../../resources/wednesday-content.php';  ?>
                </div>
            </div>
            <div class="menu-item">
                <div id="thursday" class="day-header">
                    <?php require '../../resources/thursday-date.php';  ?>
                </div>
                <div class="meal-summary">
                    <?php require '../../resources/thursday-heading.php';  ?>
                </div>
                <div class="meal-content">
                    <?php require '../../resources/thursday-content.php';  ?>
                </div>
            </div>
            <div class="menu-item">
                <div id="friday" class="day-header">
                    <?php require '../../resources/friday-date.php';  ?>
                </div>
                <div class="meal-summary">
                    <?php require '../../resources/friday-heading.php';  ?>
                </div>
                <div class="meal-content">
                    <!-- Served up on a fresh croissant with choice of lettuce, tomato and/or onion -->
                    <?php require '../../resources/friday-content.php';  ?>
                </div>
            </div>
            <div class="menu-item">
                <div id="saturday" class="day-header">
                    <?php require '../../resources/saturday-date.php';  ?>
                </div>
                <div class="meal-summary">
                    <?php require '../../resources/saturday-heading.php';  ?>
                </div>
                <div class="meal-content">
                    <!-- Served up on a fresh croissant with choice of lettuce, tomato and/or onion -->
                    <?php require '../../resources/saturday-content.php';  ?>
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
            <a href="tel:802-503-2124">802-503-2124</a>
        </div>
        <div class="alchemy">
            <img src="../../images/copyright-icon.png">
            <p>&nbsp;2020 Alchemy Web Designs</p>
        </div>
    </div>

<!-- <script>
    function doUpdate() {
        window.location.href = "../index.php";
    }
</script> -->


</body>

</html>