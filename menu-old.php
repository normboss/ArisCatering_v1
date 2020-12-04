<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ari's Catering'</title>

    <link href="../css/menu-old.css" media="screen" rel="stylesheet" type="text/css">


</head>

<body>
    <main>
        <div class="top-section">
            <div class="left-part">
                <div class="logo-block">
                    <div class="logo-text">
                        See What’s Cookin’ at
                    </div>
                    <img src="../images/aris_logo_red_cropped.png">
                </div>
                <div class="aris-catering">
                    Ari's Catering!
                </div>
            </div>
            <div class="right-part">
                <div>
                    <span class="style1">Featuring…</span>
                </div>
                <div>
                    <span class="style2">delicious </span><span class="style3">daily </span><span class="style2">entrees</span>
                </div>
                <div>
                    <span class="style4">with </span><span class="style3">fruit, snack & drink</span>
                </div>
                <span>
                    <span class="style3">pickup </span>
                    <div class="style5">
                        <div id="or-id">or </div>
                        <div id="delivery-id">delivery*</div>
                    </div>
                    <span class="style6">Mon-Fri </span>
                </span>
                <div class="style7">Call 802-503-2124 <div class="style5">
                        <div id="to-id">to </div>
                        <div id="order-id">order</div>
                    </div>
                </div>
                <div class="style8">
                    Serving the Hollis, NH area
                </div>
            </div>
        </div>

        <div class="menu-section">
            <div class="menu-item">
                <div id="monday" class="day-header">
                    MON, <?php require '../resources/monday-date.php';  ?>
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

        </div>

        <div class="images">
            <!-- <img id="image1" src="../images/image1.JPG"> -->
            <!-- <img id="image2" src="../images/image2.JPG"> -->
            <div class="image1"></div>
            <div class="image2"></div>

        </div>
        <div class="copy1">
        All entrees of the freshest ingredients, cooked by Ari & packed in natural microwaveable containers, plus napkin & utensils.
        </div>
        <div class="copy2">
        Everything prepared in a kitchen where dairy, gluten, eggs, peanuts and other allergens are used.
        </div>


    </main>
</body>

</html>