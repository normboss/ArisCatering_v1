<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ari's Catering'</title>

    <link href="../css/udpate-menu2.css" media="screen" rel="stylesheet" type="text/css">


</head>

<body>
    <main>
        <div class="top-section">

            <div class="left-part">
                <div class="box cookin">
                    See What’s Cookin’ at
                </div>
                <img class="box logo" src="../images/aris_chef_red.png">
                <div class="box blank">
                    <!-- how now brown cow -->
                </div>
                <div class="box catering">
                    Ari's Catering!
                </div>
                <div class="box hollis">
                    Serving the Hollis, NH area
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

                <div class="orders header-subtext">
                    Orders must be placed by X:00PM of the previous day
                </div>
            </div>
        </div>

        <form action="update.php" method="post">

            <div class="menu-section">

                <div class="menu-header">
                    MENU:
                </div>

                <div class="menu-item">
                    <div id="monday" class="day-header">
                        <textarea name="monday-date" rows="1" cols="20"><?php require '../resources/monday-date.php';  ?></textarea>
                    </div>
                    <div class="meal-summary">
                        <textarea name="monday-heading" rows="5" cols="20"><?php require '../resources/monday-heading.php';  ?></textarea>
                    </div>
                    <div class="meal-content">
                        <textarea name="monday-content" rows="5" cols="20"><?php require '../resources/monday-content.php';  ?></textarea>
                    </div>
                </div>

                <div class="menu-item">
                    <div id="tuesday" class="day-header">
                        <textarea name="tuesday-date" rows="1" cols="20"><?php require '../resources/tuesday-date.php';  ?></textarea>
                    </div>
                    <div class="meal-summary">
                        <textarea name="tuesday-heading" rows="5" cols="20"><?php require '../resources/tuesday-heading.php';  ?></textarea>
                    </div>
                    <div class="meal-content">
                        <textarea name="tuesday-content" rows="5" cols="20"><?php require '../resources/tuesday-content.php';  ?></textarea>
                    </div>
                </div>

                <div class="menu-item">
                    <div id="wednesday" class="day-header">
                        <textarea name="wednesday-date" rows="1" cols="20"><?php require '../resources/wednesday-date.php';  ?></textarea>
                    </div>
                    <div class="meal-summary">
                        <textarea name="wednesday-heading" rows="5" cols="20"><?php require '../resources/wednesday-heading.php';  ?></textarea>
                    </div>
                    <div class="meal-content">
                        <textarea name="wednesday-content" rows="5" cols="20"><?php require '../resources/wednesday-content.php';  ?></textarea>
                    </div>
                </div>

                <div class="menu-item">
                    <div id="thursday" class="day-header">
                        <textarea name="thursday-date" rows="1" cols="20"><?php require '../resources/thursday-date.php';  ?></textarea>
                    </div>
                    <div class="meal-summary">
                        <textarea name="thursday-heading" rows="5" cols="20"><?php require '../resources/thursday-heading.php';  ?></textarea>
                    </div>
                    <div class="meal-content">
                        <textarea name="thursday-content" rows="5" cols="20"><?php require '../resources/thursday-content.php';  ?></textarea>
                    </div>
                </div>

                <div class="menu-item">
                    <div id="friday" class="day-header">
                        <textarea name="friday-date" rows="1" cols="20"><?php require '../resources/friday-date.php';  ?></textarea>
                    </div>
                    <div class="meal-summary">
                        <textarea name="friday-heading" rows="5" cols="20"><?php require '../resources/friday-heading.php';  ?></textarea>
                    </div>
                    <div class="meal-content">
                        <textarea name="friday-content" rows="5" cols="20"><?php require '../resources/friday-content.php';  ?></textarea>
                    </div>
                </div>

                <div class="images">
                    <!-- <img id="tape1" src="../images/tape-cropped1-white-sm.png"> -->
                    <img id="image2" src="../images/image2.JPG">

                    <!-- <img id="tape2" src="../images/tape-cropped1-white-sm.png"> -->
                    <img id="image1" src="../images/image1.JPG">

                    <!-- <img id="tape3" src="../images/tape-cropped1-white-sm.png"> -->
                    <img id="image3" src="../images/image3.png">

                    <!-- <div class="image1"></div>
                <div class="image2"></div> -->

                </div>

            </div>
            <input class="submit-button" type="submit" value="Submit Changes">

        </form>

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
            <!-- <p class="copy1">
                All entrees of the freshest ingredients, cooked by Ari & packed in natural microwaveable containers, plus napkin & utensils.
            </p>
            <p class="copy2">
                Everything prepared in a kitchen where dairy, gluten, eggs, peanuts and other allergens are used.
            </p> -->
        </div>

    </main>
</body>

</html>