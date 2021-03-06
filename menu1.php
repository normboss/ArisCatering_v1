<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ari's Catering'</title>

    <link href="../css/menu1.css" media="screen" rel="stylesheet" type="text/css">


</head>

<body>
    <main>
        <div class="top-section">
            <div class="left-part">
                <div class="logo-block">
                    <div class="logo-text">
                        See What’s Cookin’ at
                    </div>
                    <img src="../images/aris_chef_red.png">
                </div>
                <div class="aris-catering">
                    Ari's Catering!
                    <div class="header-subtext">
                    Serving the Hollis, NH area
                </div>
                </div>
            </div>
            <div class="right-part">
                <div class="header-text">
                Delicious daily entrees<br> with fruit, snack & drink
                </div>

                <div class="price">
                    <span class="only">Only </span>
                    <span class="dollars">$12</span>
                    <span class="cents">99</span>
                    <span class="asteric">*</span>
                </div>

                <div class="header-text">
                *Pickup, or 3+ orders delivered<br> for additional $5.99,<br> Monday thru Friday
                </div>

                <div class="phone-number">
                802-503-2124
                </div>

                <div class="header-subtext">
                Orders must be placed by X:00PM<br> of the previous day
                </div>
            </div>
        </div>

        <div class="menu-section">

            <div class="menu-header">
                MENU:
            </div>

            <div class="menu-item">
                <div id="monday" class="day-header">
                    <?php require '../resources/monday-date.php';  ?>
                </div>
                <div class="meal-summary">
                    <!-- Turkey & Bacon Sandwich -->
                    <?php require '../resources/monday-heading.php';  ?>
                </div>
                <div class="meal-content">
                    <!-- With lettuce, tomato, pickled onion, cheddar &&nbsp;mayo -->
                    <?php require '../resources/monday-content.php';  ?>
                </div>
            </div>
            <div class="menu-item">
                <div id="tuesday" class="day-header">
                    TUES, <?php require '../resources/tuesday-date.php';  ?>
                </div>
                <div class="meal-summary">
                    <!-- Taco Tuesday! Shredded Beef Taco -->
                    <?php require '../resources/tuesday-heading.php';  ?>
                </div>
                <div class="meal-content">
                    <!-- On a flour tortilla, topped with cilantro & onion -->
                    <?php require '../resources/tuesday-content.php';  ?>
                </div>
            </div>
            <div class="menu-item">
                <div id="wednesday" class="day-header">
                    WED, <?php require '../resources/wednesday-date.php';  ?>
                </div>
                <div class="meal-summary">
                    <!-- Grilled Pork & Herby Potato Salad -->
                    <?php require '../resources/wednesday-heading.php';  ?>
                </div>
                <div class="meal-content">
                    <!-- A hearty entree to see you through Hump Day -->
                    <?php require '../resources/wednesday-content.php';  ?>
                </div>
            </div>
            <div class="menu-item">
                <div id="thursday" class="day-header">
                    THURS, <?php require '../resources/thursday-date.php';  ?>
                </div>
                <div class="meal-summary">
                    <!-- Our Special Quiche of the Day -->
                    <?php require '../resources/thursday-heading.php';  ?>
                </div>
                <div class="meal-content">
                    <!-- Featuring caramelized onion, bell pepper and cheddar -->
                    <?php require '../resources/thursday-content.php';  ?>
                </div>
            </div>
            <div class="menu-item">
                <div id="friday" class="day-header">
                    T.G.I.F. <?php require '../resources/friday-date.php';  ?>
                </div>
                <div class="meal-summary">
                    <!-- Ari’s Scrumptious Chicken Salad -->
                    <?php require '../resources/friday-heading.php';  ?>
                </div>
                <div class="meal-content">
                    <!-- Served up on a fresh croissant with choice of lettuce, tomato and/or onion -->
                    <?php require '../resources/friday-content.php';  ?>
                </div>
            </div>
            <div class="images">
                <img id="tape1" src="../images/tape-cropped1-white-sm.png">
                <img id="image2" src="../images/image2.JPG">

                <img id="tape2" src="../images/tape-cropped1-white-sm.png">
                <img id="image1" src="../images/image1.JPG">

                <img id="tape3" src="../images/tape-cropped1-white-sm.png">
                <img id="image3" src="../images/image3.png">

                <!-- <div class="image1"></div>
                <div class="image2"></div> -->

            </div>

        </div>
        <div class="more-stuff">
            <div class="all-entrees">
                All entrees
            </div>
            <div class="price">
                <span class="dollar-sign">$</span>
                <span class="dollar-amount">12</span>
                <span class="cents-amount">99*</span>
            </div>

            <div class="happy">
                *We’ll be happy to deliver 3 or more orders to your business for an additional $5.99

            </div>

            <div class="pleased">
                Please call by 0:00 on lorem ipsum to place your order. Need a large order? Just ask! Give us a call to discuss your needs:
            </div>

            <div class="phone-number">
                802-503-2124
            </div>

        </div>
        

        <div class="footer">
            <div class="copy1">
                All entrees of the freshest ingredients, cooked by Ari & packed in natural microwaveable containers, plus napkin & utensils.
            </div>
            <div class="copy2">
                Everything prepared in a kitchen where dairy, gluten, eggs, peanuts and other allergens are used.
            </div>
        </div>

    </main>
</body>

</html>