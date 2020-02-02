<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" type="image/png" href="favicon.png">
        
        <title>farmi &mdash; Your farm assistant app</title>
    </head>
    <body>
        <div class="container">
            <header class="header">
                <img src="img/logo.png" alt="trillo logo" class="logo">


                <nav class="user-nav">
                    <div class="user-nav__icon-box">
                        <svg class="user-nav__icon">
                            <use xlink:href="sprite.svg#icon-bookmark"></use>
                        </svg>
                        <!-- <span class="user-nav__notification">7</span> -->
                    </div>
                    <div class="user-nav__icon-box">
                        <svg class="user-nav__icon">
                            <use xlink:href="sprite.svg#icon-chat"></use>
                        </svg>
                        <!-- <span class="user-nav__notification">13</span> -->
                    </div>
                    <div class="user-nav__user">
                        <!-- <img src="img/user.jpg" alt="User photo" class="user-nav__user-photo"> -->
                        <span class="user-nav__user-name"><?php echo $_SESSION['userid'];?></span>
                    </div>
                </nav>
            </header>


            <div class="content">
                <nav class="sidebar">
                    <ul class="side-nav">
                        <li class="side-nav__item side-nav__item--active">
                            <a href="#" class="side-nav__link">
                                <svg class="side-nav__icon">
                                    <use xlink:href="sprite.svg#icon-home"></use>
                                </svg>
                                <span>Weather</span>
                            </a>
                        </li>
                        <li class="side-nav__item">
                            <a href="#" class="side-nav__link">
                                <svg class="side-nav__icon">
                                    <use xlink:href="sprite.svg#icon-aircraft-take-off"></use>
                                </svg>
                                <span>Market-Trends</span>
                            </a>
                        </li>
                        <li class="side-nav__item">
                            <a href="#" class="side-nav__link">
                                <svg class="side-nav__icon">
                                    <use xlink:href="sprite.svg#icon-key"></use>
                                </svg>
                                <span>Pesticides</span>
                            </a>
                        </li>
                        <li class="side-nav__item">
                            <a href="#" class="side-nav__link">
                                <svg class="side-nav__icon">
                                    <use xlink:href="sprite.svg#icon-map"></use>
                                </svg>
                                <span>Profit & Loss</span>
                            </a>
                        </li>
                        <li class="side-nav__item">
                            <a href="#" class="side-nav__link">
                                <svg class="side-nav__icon">
                                    <use xlink:href="sprite.svg#icon-map"></use>
                                </svg>
                                <span>Crops</span>
                            </a>
                        </li>
                    </ul>

                    <div class="legal">
                        &copy; 2020 farmi. All rights reserved.
                    </div>
                </nav>



                <main class="hotel-view">
                    <div class="gallery">
                        <figure class="gallery__item">
                            <img src="i4.jpg" alt="Photo of hotel 1" class="gallery__photo">
                        </figure>
                        <figure class="gallery__item">
                            <img src="i10.jpg" alt="Photo of hotel 2" class="gallery__photo">
                        </figure>
                        <figure class="gallery__item">
                            <img src="img3.jpg" alt="Photo of hotel 3" class="gallery__photo">
                        </figure>
                    </div>

                    <div class="overview">
                        <h1 class="overview__heading">
                            Your Report's
                        </h1>
                    </div>

                    <div class="detail">
                        <div class="description">
                            <p class="paragraph">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi nisi dignissimos debitis ratione sapiente saepe. Accusantium cumque, quas, ut corporis incidunt deserunt quae architecto voluptate.
                            </p>
                            <p class="paragraph">
                                Accusantium cumque, quas, ut corporis incidunt deserunt quae architecto voluptate delectus, inventore iure aliquid aliquam.
                            </p>
                            <ul class="list">
                                <li class="list__item">Close to the beach</li>
                                <li class="list__item">Breakfast included</li>
                                <li class="list__item">Free airport shuttle</li>
                                <li class="list__item">Free wifi in all rooms</li>
                                <li class="list__item">Air conditioning and heating</li>
                                <li class="list__item">Pets allowed</li>
                                <li class="list__item">We speak all languages</li>
                                <li class="list__item">Perfect for families</li>
                            </ul>
                        </div>

                        <div class="user-reviews">
                            <figure class="review">
                                <blockquote class="review__text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga doloremque architecto dicta animi, totam, itaque officia ex.
                                </blockquote>
                            </figure>

                            <figure class="review">
                                <blockquote class="review__text">
                                    Lorem ipsum dolor sit amet,vhvjvjgbjb bjvjyujgj consectetur adipisicing elit. Fuga doloremque architecto dicta animi.
                                </blockquote>
                            </figure>

                        </div>


                    </div>


                </main>
            </div>
        </div>
    </body>
</html>
