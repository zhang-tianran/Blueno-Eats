<?php
include "config/setup.php";
include "functions/get_page.php";
include "functions/get_data.php";
# Retrieve food page
$page = get_dish_page($dbc, $_GET['dish']);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Blueno Eats Website </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="styles/main.css" rel="stylesheet" type="text/css">
        <link href="styles/navigation.css" rel="stylesheet" type="text/css">
        <link href="styles/info.css" rel="stylesheet" type="text/css">
        <link href="styles/ranking.css" rel="stylesheet" type="text/css">
        <link href="styles/search.css" rel="stylesheet" type="text/css">
        <link href="styles/slideshow.css" rel="stylesheet" type="text/css">
        <link href="styles/food.css" rel="stylesheet" type="text/css">
        <link href="styles/modal.css" rel="stylesheet" type="text/css">

        <script src="scripts/auto-slide.js" type="text/javascript"></script>
        <script src="scripts/manual-slide.js" type="text/javascript"></script>
        <script src="scripts/modal.js" type="text/javascript"></script>
    </head>

    <body>
      <?php include D_TEMPLATE."navigation.php" ?>

    <div class="food">
        <div class="food-item food-left">
            <h1 id="food-name"><?php echo $page['name']; ?></h1>
        </div>
        <?php include D_TEMPLATE."dish_slideshow.php"; ?>
    </div>

     <p class="food-intro"><?php echo $page['content']; ?></p>

     <div class="review">
        <h2> Reviews</h2>
        <div class="rate">
            <span class="heading">User Rating</span>
            <?php for ($i=1; $i <= 5; $i++) {
              if ($i < $page['rating']) {
                echo '<span class="fa fa-star checked"></span>';
              } else {
                echo '<span class="fa fa-star"></span>';
              }
            } ?>
            <?php echo '<p>'.$page['rating'].' average based on '.$page['num_reviews'].' reviews.</p>'; ?>
            <hr style="border:3px solid #f1f1f1">

            <div class="row">

            <div class="side">
                <div>5 star</div>
            </div>
            <div class="middle">
                <div class="bar-container">
                <div class="bar-5"></div>
                </div>
            </div>
            <div class="side right">
                <div>150</div>
            </div>

            <div class="side">
                <div>4 star</div>
            </div>
            <div class="middle">
                <div class="bar-container">
                <div class="bar-4"></div>
                </div>
            </div>
            <div class="side right">
                <div>63</div>
            </div>
            <div class="side">
                <div>3 star</div>
            </div>
            <div class="middle">
                <div class="bar-container">
                <div class="bar-3"></div>
                </div>
            </div>
            <div class="side right">
                <div>15</div>
            </div>
            <div class="side">
                <div>2 star</div>
            </div>
            <div class="middle">
                <div class="bar-container">
                <div class="bar-2"></div>
                </div>
            </div>
            <div class="side right">
                <div>6</div>
            </div>
            <div class="side">
                <div>1 star</div>
            </div>
            <div class="middle">
                <div class="bar-container">
                <div class="bar-1"></div>
                </div>
            </div>
            <div class="side right">
                <div>20</div>
            </div>
            </div>
        </div>
    </div>

    <button id="myBtn"> Write your review </button>

    <div class="food-imgs">
        <div class="food-imgs-row">
            <div class="food-imgs-col">
              <img src="img/place4.jpeg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
            </div>
            <div class="food-imgs-col">
              <img src="img/place3.jpeg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
            </div>
            <div class="food-imgs-col">
              <img src="img/place2.jpeg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
            </div>
            <div class="food-imgs-col">
              <img src="img/placeholding.png" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
            </div>
          </div>

          <div id="myModal" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <div class=" modal-content">

              <div class="food-imgs-slide">
                <div class="food-imgs-numtext">1 / 4</div>
                <img src="img/place4.jpeg" style="width:100%">
              </div>

              <div class="food-imgs-slide">
                <div class="food-imgs-numtext">2 / 4</div>
                <img src="img/place3.jpeg" style="width:100%">
              </div>

              <div class="food-imgs-slide">
                <div class="food-imgs-numtext">3 / 4</div>
                <img src="img/place2.jpeg" style="width:100%">
              </div>

              <div class="food-imgs-slide">
                <div class="food-imgs-numtext">4 / 4</div>
                <img src="img/placeholding.png" style="width:100%">
              </div>

              <a class="food-imgs-prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="food-imgs-next" onclick="plusSlides(1)">&#10095;</a>

              <div class="food-imgs-caption-container">
                <p id="caption"></p>
              </div>

              <div class="food-imgs-col">
                <img class="food-imgs-cur cursor" src="img/place4.jpeg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
              </div>
              <div class="food-imgs-col">
                <img class="food-imgs-cur cursor" src="img/place3.jpeg" style="width:100%" onclick="currentSlide(2)" alt="Snow">
              </div>
              <div class="food-imgs-col">
                <img class="food-imgs-cur cursor" src="img/place2.jpeg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
              </div>
              <div class="food-imgs-col">
                <img class="food-imgs-cur cursor" src="img/placeholding.png" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
              </div>
            </div>
          </div>
    </div>




    <?php include D_TEMPLATE."footer.php"; ?>
  </body>

</html>
