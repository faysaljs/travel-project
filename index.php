<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>let's go travel</title>
    <!-- <link rel="stylesheet" href="c:\Users\ce pc\Desktop\sublim\bootstrap\bootstrap.css">
    <link rel="stylesheet" href="c:\Users\ce pc\Desktop\sublim\bootstrap\bootstrap.min.css"> -->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css"
        integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="websit icon" href="images/icon.png" type="png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>


<?php require "includes/header.php" ?>

<body class="loading" id="body">
    <!-- home section -->
    <section class="home" id="home">
        <div class="content">
            <h3>adventure is worthwhile</h3>
            <p>discover new places with us, adventure awaits</p>
            <a href="#discover" class="btn">discover more</a>
        </div>

        <div>
            <!-- Radio buttons -->
            <input type="radio" class="vid-btn" name="vid-input" id="vid1" checked>
            <input type="radio" class="vid-btn" name="vid-input" id="vid2">
            <input type="radio" class="vid-btn" name="vid-input" id="vid3">
            <input type="radio" class="vid-btn" name="vid-input" id="vid4">

            <!-- Videos as siblings of inputs -->
            <div class="video-container">
                <video src="video/vid-1.mp4" id="video-1" loop autoplay muted></video>
                <video src="video/vid_1_v2.mp4" id="video-2" loop autoplay muted></video>
                <video src="video/vid_1_v3.mp4" id="video-3" loop autoplay muted></video>
                <video src="video/vid_1_v4.mp4" id="video-4" loop autoplay muted></video>
            </div>
        </div>
    </section>

    <!-- book section -->
    <section class="book" id="book">
        <h1 class="heading">
            <span>b</span>
            <span>o</span>
            <span>o</span>
            <span>k</span>
            <span class="space"></span>
            <span>n</span>
            <span>o</span>
            <span>w</span>
        </h1>
        <div class="row">
            <div class="image">
                <img src="images/img1v8-removebg-preview.png" alt="">
            </div>
            <form action="#">
                <div class="inputBox">
                    <h3>where to</h3>
                    <input type="text" placeholder="palce name">
                </div>
                <div class="inputBox">
                    <h3>how many</h3>
                    <input type="text" placeholder="number of guests">
                </div>
                <div class="inputBox">
                    <h3>arrivals</h3>
                    <input type="date">
                </div>
                <div class="inputBox">
                    <h3>leaving</h3>
                    <input type="date">
                </div>
                <input type="submit" class="btn" value="book now">
            </form>
        </div>

    </section>

    <!-- packages section -->
    <section class="packages" id="packages">
        <h1 class="heading">
            <span>p</span>
            <span>a</span>
            <span>c</span>
            <span>k</span>
            <span>a</span>
            <span>g</span>
            <span>e</span>
            <span>s</span>
        </h1>
        <div class="box-container">
            <div class="box">
                <img src="images/casa7.jpg" alt="#">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>casablanca</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, odio.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="prics">$90.00 <span>$120.00</span></div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/rabat6.jpg" alt="#">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>rabat</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="prics">$90.00 <span>$120.00</span></div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/tinghi2.jpg" alt="#">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>tinghir</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="prics">$90.00 <span>$120.00</span></div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/markech.jpg" alt="#">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>marrakech</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="prics">$90.00 <span>$120.00</span></div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/chefchaouen1.jpg" alt="#">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>chefchaouen</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="prics">$90.00 <span>$120.00</span></div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/mekness.jpg" alt="#">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>meknes</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="prics">$90.00 <span>$120.00</span></div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/tanger.jpg" alt="#">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>tangier</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="prics">$90.00 <span>$120.00</span></div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/sahra9.jpg" alt="#">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>sahara</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="prics">$90.00 <span>$120.00</span></div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/tobkal1.jpg" alt="#">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>atlas</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="prics">$90.00 <span>$120.00</span></div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/sidifni2.jpg" alt="#">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>sidi ifni</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="prics">$90.00 <span>$120.00</span></div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/agadir.jpg" alt="#">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>agadir</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="prics">$90.00 <span>$120.00</span></div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/warzazat.jpg" alt="#">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>ouarzazat</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="prics">$90.00 <span>$120.00</span></div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>
        </div>

    </section>

    <!-- services section  -->
    <section class="services" id="services">
        <h1 class="heading">
            <span>s</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3>affordable hotels</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas consectetur accusamus cupiditate, quisquam nisi consequatur doloremque nobis tenetur, molestias eveniet asperiores nam corrupti dignissimos eius voluptatem soluta, debitis exercitationem. Possimus.</p>
            </div>
            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>food and drink</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas consectetur accusamus cupiditate, quisquam nisi consequatur doloremque nobis tenetur, molestias eveniet asperiores nam corrupti dignissimos eius voluptatem soluta, debitis exercitationem. Possimus.</p>
            </div>
            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>safty guide</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas consectetur accusamus cupiditate, quisquam nisi consequatur doloremque nobis tenetur, molestias eveniet asperiores nam corrupti dignissimos eius voluptatem soluta, debitis exercitationem. Possimus.</p>
            </div>
            <div class="box">
                <i class="fas fa-globe-asia"></i>
                <h3>around the world</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas consectetur accusamus cupiditate, quisquam nisi consequatur doloremque nobis tenetur, molestias eveniet asperiores nam corrupti dignissimos eius voluptatem soluta, debitis exercitationem. Possimus.</p>
            </div>
            <div class="box">
                <i class="fas fa-plane"></i>
                <h3>fastest travel</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas consectetur accusamus cupiditate, quisquam nisi consequatur doloremque nobis tenetur, molestias eveniet asperiores nam corrupti dignissimos eius voluptatem soluta, debitis exercitationem. Possimus.</p>
            </div>
            <div class="box">
                <i class="fas fa-hiking"></i>
                <h3>adventures</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas consectetur accusamus cupiditate, quisquam nisi consequatur doloremque nobis tenetur, molestias eveniet asperiores nam corrupti dignissimos eius voluptatem soluta, debitis exercitationem. Possimus.</p>
            </div>
        </div>

    </section>
    <!-- services section end -->

    <!--gallery section-->
    <section class="gallery" id="gallery">
        <h1 class="heading">
            <span>g</span>
            <span>a</span>
            <span>l</span>
            <span>l</span>
            <span>e</span>
            <span>r</span>
            <span>y</span>
        </h1>
        <div class="box-container">
            <div class="box">
                <img src="images/casa8.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae, repellat!</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>

            <div class="box">
                <img src="images/histo2.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae, repellat!</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/histo3.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae, repellat!</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/rabat4.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae, repellat!</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/histo4.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae, repellat!</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/mrkx4.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae, repellat!</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/histo5.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae, repellat!</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/sahra6.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae, repellat!</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/mrkx.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae, repellat!</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/ouzoud1.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae, repellat!</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/tagin1.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae, repellat!</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/chfxawn.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae, repellat!</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>

        </div>
    </section>
    <!--gallery section end -->


    <!-- reveiw section starts -->
    <section class="review" id="review">
        <h1 class="heading">
            <span>r</span>
            <span>e</span>
            <span>v</span>
            <span>i</span>
            <span>e</span>
            <span>w</span>
        </h1>
        <div class="swiper mySwiper review-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/mohamed.jpg" alt="">
                        <h3>mohamed bendada</h3>
                        <p>Excellent service de cette agence de voyage ! Tout a été simple et sans stress. Mes demandes spéciales ont été parfaitement prises en charge, et je me suis senti bien accompagné tout au long du processus. Je recommande vivement.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/mrwan2.jpg" alt="">
                        <h3>Marouane bouglace</h3>
                        <p>Nice trip, but the organization could have been better. Activities were interesting, but there were delays and a lack of communication on some aspects. A little disappointing for the price paid.
                        <p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/ayemen2.jpg" alt="">
                        <h3>aymen zagnouni</h3>
                        <p>Ce site est incroyable ! Cependant, j’ai une petite remarque : je ne trouve pas la ville de Safi. C’est une ville très ancienne et historique, riche en culture et en tourisme. L’ajouter serait un vrai plus pour les visiteurs intéressés par le patrimoine du Maroc. Bonne continuation et bravo ! 👍</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/nassima.jpg" alt="">
                        <h3>nassima ait lamkadem</h3>
                        <p>Je tiens à exprimer ma totale satisfaction concernant les services de cette agence de voyage. J'avais des exigences particulières pour mon voyage, et tout a été parfaitement pris en charge. Le processus de réservation a été simple et fluide. J'ai toujours senti que mes besoins et préoccupations étaient écoutés et respectés. Une expérience vraiment satisfaisante que je recommande vivement !</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/anas.jpg" alt="">
                        <h3>anas majbar</h3>
                        <p>Completely satisfied with this travel agency! They handled my specific requests perfectly. The booking process was smooth, and my concerns were always considered. Highly recommend</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- reveiw section end -->
    <!-- contact section  -->
    <section class="contact" id="contact">
        <h1 class="heading">
            <span>c</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span>
        </h1>
        <div class="row">
            <div class="image">
                <img src="images/travel1.png" alt="">
            </div>
            <form action="#">
                <div class="inputBox">
                    <input type="text" placeholder="name">
                    <input type="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <input type="number" placeholder="number">
                    <input type="text" placeholder="subject">
                </div>
                <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
                <input type="submit" class="btn" value="send message">
            </form>
        </div>

    </section>
    <!-- contact section end -->

    <!-- Inspiration section   -->
    <section class="travel-inspiration">
        <h1 class="heading">
            <span>I</span>
            <span>n</span>
            <span>s</span>
            <span>p</span>
            <span>i</span>
            <span>a</span>
            <span>r</span>
            <span>t</span>
            <span>i</span>
            <span>o</span>
            <span>n</span>
        </h1>

        <!-- Your video -->
        <section class="video-section" id="discover">
            <div class="video-container2">
                <iframe width="100%" height="450"
                    src="https://www.youtube.com/embed/QipIufCH3rw?start=66"

                    frameborder="4"

                    allowfullscreen>
                </iframe>
            </div>
        </section>


    </section>

    <!-- Inspiration section end  -->

    <!-- brand section  -->
    <section class="brand">
        <div class="swiper mySwiper brand-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="boxbrand">
                        <img src="images/brand1-removebg-preview.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="boxbrand">
                        <img src="images/brand3-removebg-preview.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="boxbrand">
                        <img src="images/brand4-removebg-preview.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="boxbrand">
                        <img src="images/brand5-removebg-preview.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- brand section end  -->

    <!-- icon to back  -->
    <a href="" class="scroll-to-top" title="Back to Top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- loading  -->
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>


     
   





    <?php require "includes/footer.html" ?>




    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="js/menu_hed.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/script.js"></script>


























</body>

</html>