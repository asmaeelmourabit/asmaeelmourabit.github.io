<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Travel Agency Website Design</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file cdn link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-paper-plane"></i> travel </a>

    <form action="" class="search-form">
        <input type="search" name="" placeholder="search here..." id="searchBox">
        <label for="searchBox" class="fas fa-search"></label>
    </form>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-moon" id="theme-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#packages">packages</a>
        <a href="#services">services</a>
        <a href="#pricing">pricing</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
        <a href="#blogs">blogs</a>
    </nav>

    <form action="" class="login-form">

        <div class="inputBox">
            <span>username</span>
            <input type="text" placeholder="enter your name">
        </div>

        <div class="inputBox">
            <span>password</span>
            <input type="password" placeholder="enter your password">
        </div>

        <div class="remember">
            <input type="checkbox" name="" id="login-remember">
            <label for="login-remember">remember me</label>
        </div>

        <input type="submit" class="btn" value="login">

    </form>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image mt-6" data-aos="fade-down">
        <img src="{{asset('./uploads/bgr.png')}}" style="height: 550px;" alt="">
    </div>

    <div class="content" data-aos="fade-up">
        <h3>adventure is worthwhile</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo eius inventore reprehenderit alias eos facilis, ipsa est asperiores repellendus!</p>
        <a href="#" class="btn">explore now</a>
    </div>

</section>

<!-- home section ends -->

<!-- filter form section starts  -->

<section class="form-container" data-aos="zoom-in">

    <form action="">

        <div class="inputBox">
            <span>where to</span>
            <input type="text" placeholder="search places">
        </div>

        <div class="inputBox">
            <span>arrivals</span>
            <input type="date">
        </div>

        <div class="inputBox">
            <span>leaving</span>
            <input type="date">
        </div>

        <input type="submit" value="book now" class="btn">

    </form>

</section>

<!-- filter form section ends -->

<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading"> our <span>packages</span> </h1>

    <div class="box-container">

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="https://www.top-maison.net/wp-content/uploads/2020/09/1-700x494.jpg" alt="">
                <h3> <i class="fas fa-map-marker-alt"></i> mumbai </h3>
            </div>
            <div class="content">
                <div class="price"> 290.99 <span>350.99</span> </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
                <a href="#" class="btn"> book now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3C9byO-eVIjLSnhyZGi4ZeYo3cQKW4mPNgg&usqp=CAU" alt="">
                <h3> <i class="fas fa-map-marker-alt"></i> hawaii </h3>
            </div>
            <div class="content">
                <div class="price"> 290.99 <span>350.99</span> </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
                <a href="#" class="btn"> book now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYThhelWqLmIiyqE3VW0RDE7rZVNlWD9jWnw&usqp=CAU" alt="">
                <h3> <i class="fas fa-map-marker-alt"></i> sydney </h3>
            </div>
            <div class="content">
                <div class="price"> 290.99 <span>350.99</span> </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
                <a href="#" class="btn"> book now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/p-4.jpg" alt="">
                <h3> <i class="fas fa-map-marker-alt"></i> paris </h3>
            </div>
            <div class="content">
                <div class="price"> 290.99 <span>350.99</span> </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
                <a href="#" class="btn"> book now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/p-5.jpg" alt="">
                <h3> <i class="fas fa-map-marker-alt"></i> tokyo </h3>
            </div>
            <div class="content">
                <div class="price"> 290.99 <span>350.99</span> </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
                <a href="#" class="btn"> book now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/p-6.jpg" alt="">
                <h3> <i class="fas fa-map-marker-alt"></i> egypt </h3>
            </div>
            <div class="content">
                <div class="price"> 290.99 <span>350.99</span> </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
                <a href="#" class="btn"> book now</a>
            </div>
        </div>

    </div>

</section>

<!-- packages section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box" data-aos="zoom-in">
            <span>01</span>
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, rem.</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <span>02</span>
            <i class="fas fa-plane"></i>
            <h3>fastest travel</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, rem.</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <span>03</span>
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, rem.</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <span>04</span>
            <i class="fas fa-globe"></i>
            <h3>around the world</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, rem.</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <span>05</span>
            <i class="fas fa-hiking"></i>
            <h3>new adventures</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, rem.</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <span>01</span>
            <i class="fas fa-bullhorn"></i>
            <h3>safety guide</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, rem.</p>
        </div>

    </div>

</section>

<!-- services section ends -->



<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="swiper-container review-slider" data-aos="zoom-in">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <img src="images/pic-1.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur sunt eligendi est, dicta maiores amet nihil perferendis, incidunt maxime aspernatur exercitationem laboriosam odio dolores magnam ratione atque, quasi odit. Hic!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-2.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur sunt eligendi est, dicta maiores amet nihil perferendis, incidunt maxime aspernatur exercitationem laboriosam odio dolores magnam ratione atque, quasi odit. Hic!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-3.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur sunt eligendi est, dicta maiores amet nihil perferendis, incidunt maxime aspernatur exercitationem laboriosam odio dolores magnam ratione atque, quasi odit. Hic!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-4.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur sunt eligendi est, dicta maiores amet nihil perferendis, incidunt maxime aspernatur exercitationem laboriosam odio dolores magnam ratione atque, quasi odit. Hic!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <form action="" data-aos="zoom">

        <div class="inputBox">
            <input type="text" placeholder="name" data-aos="fade-up">
            <input type="email" placeholder="email" data-aos="fade-up">
        </div>

        <div class="inputBox">
            <input type="number" placeholder="number" data-aos="fade-up">
            <input type="text" placeholder="subject" data-aos="fade-up">
        </div>

        <textarea name="" placeholder="your message" id="" cols="30" rows="10" data-aos="fade-up"></textarea>

        <input type="submit" value="send message" class="btn">

    </form>

</section>

<!-- contact section ends -->

<!-- blog section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/blog-1.svg" alt="">
            </div>
            <div class="content">
                <h3>explore the world now, adventure awaits</h3>
                <a href="#" class="btn">read more</a>
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st jan, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/blog-2.svg" alt="">
            </div>
            <div class="content">
                <h3>explore the world now, adventure awaits</h3>
                <a href="#" class="btn">read more</a>
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st jan, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/blog-3.svg" alt="">
            </div>
            <div class="content">
                <h3>explore the world now, adventure awaits</h3>
                <a href="#" class="btn">read more</a>
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st jan, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- blog section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box" data-aos="fade-up">
            <h3>our branches</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> russia </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> japan </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> france </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> canada </a>
        </div>

        <div class="box" data-aos="fade-up">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> packages </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> pricing </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> contact </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

        <div class="box" data-aos="fade-up">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelop"></i> shaikhanas@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> mumbai, indai - 400104 </a>
        </div>

        <div class="box" data-aos="fade-up">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> creadet by <span>mr. web designer</span> | all rights reserved </div>

</section>

<!-- footer section ends -->























<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

AOS.init({
    duration:800,
    delay:400
});

</script>

</body>
</html>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap');

:root{
    --orange:#F79F1F;
    --text-color-1:#444;
    --text-color-2:#666;
    --bg-color-1:#fff;
    --bg-color-2:#eee;
    --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);
}

*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition:all .2s linear;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 7rem;
    scroll-behavior: smooth;
}

html::-webkit-scrollbar{
    width:.8rem;
}

html::-webkit-scrollbar-track{
    background:transparent;
}

html::-webkit-scrollbar-thumb{
    background:var(--orange);
    border-radius: 5rem;
}

body{
    background:var(--bg-color-2);
}

body.active{
    --text-color-1:#fff;
    --text-color-2:#eee;
    --bg-color-1:#333;
    --bg-color-2:#222;
    --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.4);
}

section{
    padding:2rem 7%;
}

.heading{
    text-align: center;
    padding-bottom: 2rem;
    color:var(--text-color-1);
    font-size: 4rem;
}

.heading span{
    position: relative;
    z-index: 0;
}

.heading span::before{
    content: '';
    position: absolute;
    bottom: 1rem; left: 0;
    z-index: -1;
    background: var(--orange);
    height: 100%;
    width: 100%;
    clip-path: polygon(0 90%, 100% 83%, 100% 100%, 0% 100%);
}

.btn{
    margin-top: 1rem;
    display: inline-block;
    padding:.8rem 3rem;
    font-size: 1.7rem;
    color:#fff;
    background:var(--orange);
    border-radius: .5rem;
    cursor: pointer;
}

.btn:hover{
    letter-spacing: .2rem;
}

.header{
    position: fixed;
    top:0; left:0; right:0;
    background:var(--bg-color-1);
    box-shadow: var(--box-shadow);
    padding: 1.5rem 7%;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.header .logo{
    font-weight: bolder;
    font-size: 2.5rem;
    color:var(--text-color-1);
}

.header .logo i{
    color:var(--orange);
}

.header .search-form{
    background:var(--bg-color-2);
    border-radius: .5rem;
    display: flex;
    align-items: center;
    height: 4.5rem;
    width:50rem;
}

.header .search-form input{
    height:100%;
    width:100%;
    background:none;
    text-transform: none;
    font-size: 1.5rem;
    color:var(--text-color-1);
    padding:1rem;
}

.header .search-form label{
    font-size: 2rem;
    margin-right: 1.5rem;
    color:var(--text-color-1);
    cursor: pointer;
}

.header .search-form label:hover{
    color:var(--orange);
}

.header .icons div{
    height:4.5rem;
    width:4.5rem;
    line-height:4.5rem;
    font-size: 2rem;
    border-radius: .5rem;
    margin-left: .5rem;
    background:var(--bg-color-2);
    color:var(--text-color-1);
    cursor: pointer;
    text-align: center;
}

.header .icons div:hover{
    color:#fff;
    background:var(--orange);
}

#search-btn{
    display:none;
}

.header .navbar{
    position:absolute;
    top:115%; right:7%;
    background:var(--bg-color-1);
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    width:25rem;
    transform:scale(0);
    transform-origin: top right;
}

.header .navbar.active{
    transform:scale(1);
}

.header .navbar a{
    display:block;
    margin:1rem;
    padding:1rem;
    font-size: 1.5rem;
    color:var(--text-color-1);
    border-radius: .5rem;
}

.header .navbar a:hover{
    color:var(--orange);
    background:var(--bg-color-2);
    padding-left: 2rem;
}

.header .login-form{
    position:absolute;
    top:115%; right:7%;
    background:var(--bg-color-1);
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    width:35rem;
    padding: 2rem;
    transform:scale(0);
    transform-origin: top right;
}

.header .login-form.active{
    transform:scale(1);
}

.header .login-form .inputBox{
    margin-bottom: 1rem;
}

.header .login-form .inputBox span{
    font-size: 1.7rem;
    color:var(--text-color-2);
}

.header .login-form .inputBox input{
    font-size: 1.5rem;
    color:var(--text-color-1);
    border-radius: .5rem;
    padding:1rem;
    background:var(--bg-color-2);
    width: 100%;
    text-transform: none;
    margin:.5rem 0;
}

.header .login-form .remember{
    display: flex;
    align-items: center;
    gap:.5rem;
    padding:.5rem 0;
}

.header .login-form .remember label{
    color:var(--text-color-2);
    font-size: 1.5rem;
    cursor: pointer;
}

.header .login-form .btn{
    width:100%;
}

.home{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap:1.5rem;
    padding-top: 7rem;
}

.home .image{
    flex:1 1 45rem;
}

.home .image img{
    width: 100%;
}

.home .content{
    flex:1 1 45rem;
}

.home .content h3{
    color:var(--text-color-1);
    font-size: 4rem;
}

.home .content p{
    color:var(--text-color-2);
    font-size: 1.7rem;
    line-height: 1.7;
    padding:1rem 0;
}

.form-container form{
    background: var(--bg-color-1);
    box-shadow: var(--box-shadow);
    border-radius: .5rem;
    padding:2rem;
    display: flex;
    flex-wrap: wrap;
    gap:1rem;
    align-items: center;
}

.form-container form .inputBox{
    flex:1 1 23rem;
}

.form-container form .inputBox span{
    font-size: 1.7rem;
    color:var(--text-color-2);
}

.form-container form .inputBox input{
    font-size: 1.5rem;
    color:var(--text-color-1);
    background:var(--bg-color-2);
    border-radius: .5rem;
    margin:.5rem 0;
    text-transform: none;
    width: 100%;
    padding:1rem;
}

.form-container form .btn{
    flex:1 1 23rem;
}

.packages .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:1.5rem;
}

.packages .box-container .box{
    background:var(--bg-color-1);
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
}

.packages .box-container .box .image{
    height:25rem;
    width: 100%;
    padding:1.5rem;
    position: relative;
}

.packages .box-container .box .image img{
    height:100%;
    width: 100%;
    object-fit: cover;
    border-radius: .5rem;
}

.packages .box-container .box .image h3{
    position: absolute;
    top:2.5rem; left:2.5rem;
    font-size: 2rem;
    color:#fff;
    background: rgba(0,0,0,.5);
    border-radius: .5rem;
    font-weight: lighter;
    padding:.5rem 1.5rem;
}

.packages .box-container .box .image h3 i{
    color:var(--orange);
}

.packages .box-container .box .content{
    padding:1.5rem;
    padding-top: 0;
}

.packages .box-container .box .content .price{
    font-weight: 600;
    color:var(--text-color-1);
    font-size: 2.5rem;
}

.packages .box-container .box .content .price span{
    font-weight: lighter;
    color:var(--text-color-2);
    font-size: 1.5rem;
    text-decoration: line-through;
}

.packages .box-container .box .content p{
    font-size: 1.5rem;
    padding:.5rem 0;
    color:var(--text-color-2);
    line-height: 1.7;
}

.services .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:1.5rem;
}

.services .box-container .box{
    background: var(--bg-color-1);
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    position: relative;
    padding:2rem;
}

.services .box-container .box span{
    position: absolute;
    top:.5rem; right:2rem;
    color:var(--text-color-2);
    font-weight: bolder;
    font-size: 5rem;
}

.services .box-container .box i{
    height: 6rem;
    width: 6rem;
    line-height: 6rem;
    text-align: center;
    font-size: 2.5rem;
    color:#fff;
    background: var(--orange);
    border-radius: 50%;
    margin-bottom: .5rem;
}

.services .box-container .box h3{
    color:var(--text-color-1);
    font-size: 2.3rem;
    padding:.7rem 0;
}

.services .box-container .box p{
    color:var(--text-color-2);
    font-size: 1.5rem;
    line-height: 1.8;
}

.pricing .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:1.5rem;
}

.pricing .box-container .box{
    background:var(--bg-color-1);
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    padding:2rem;
    text-align: center;
}

.pricing .box-container .box h3{
    padding:1rem;
    background: var(--bg-color-2);
    border-radius: .5rem;
    font-size: 2rem;
    color:var(--text-color-1);
}

.pricing .box-container .box .price{
    padding-top: 2rem;
}

.pricing .box-container .box .price span{
    font-size: 2rem;
    color:var(--text-color-2);
}

.pricing .box-container .box .price .amount{
    font-size: 5rem;
    color:var(--text-color-1);
    font-weight: bolder;
}

.pricing .box-container .box ul{
    padding: .5rem 0;
    list-style: none;
}

.pricing .box-container .box ul li{
    padding: 1rem 0;
    font-size: 1.7rem;
    color:var(--text-color-2);
}

.review .review-slider{
    box-shadow: var(--box-shadow);
}

.review .review-slider .slide{
    background: var(--bg-color-1);
    border-radius: .5rem;
    text-align: center;
    padding: 3rem;
}

.review .review-slider .slide img{
    height: 10rem;
    width: 10rem;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: .5rem;
}

.review .review-slider .slide h3{
    font-size: 2.5rem;
    color:var(--text-color-1);
}

.review .review-slider .slide p{
    font-size: 1.6rem;
    color:var(--text-color-2);
    line-height: 1.7;
    padding: 1rem 0;
}

.review .review-slider .slide .stars{
    padding: 1rem 0;
    padding-bottom: 1.5rem;
}

.review .review-slider .slide .stars i{
    font-size: 2rem;
    color:var(--orange);
}

.swiper-pagination-bullet-active{
    background: var(--orange);
}

.contact form{
    max-width: 70rem;
    margin: 0 auto;
    text-align: center;
}

.contact form .inputBox{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.contact form textarea,
.contact form .inputBox input{
    width: 100%;
    padding:1rem;
    font-size: 1.6rem;
    color:var(--text-color-1);
    margin:.7rem 0;
    background: var(--bg-color-1);
    box-shadow: var(--box-shadow);
    text-transform: none;
    border-radius: .5rem;
}

.contact form textarea{
    height: 20rem;
    resize: none;
}

.contact form .inputBox input{
    width: 49%;
}

.blogs .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:1.5rem;
}

.blogs .box-container .box{
    background:var(--bg-color-1);
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    padding:2rem;
}

.blogs .box-container .box .image{
    height: 20rem;
    width: 100%;
    overflow:hidden;
    border-radius: .5rem;
    background: var(--bg-color-2);
}

.blogs .box-container .box .image img{
    height: 100%;
    width: 100%;
}

.blogs .box-container .box:hover .image img{
    transform:scale(1.2);
}

.blogs .box-container .box .content{
    padding-top: 1rem;
}

.blogs .box-container .box .content h3{
   font-size: 2rem;
   color:var(--text-color-1);
   line-height: 1.5;
}

.blogs .box-container .box .content .icons{
    display: flex;
    justify-content: space-between;
    border-top: .1rem solid var(--text-color-2);
    margin-top: 2rem;
    padding-top: 1.5rem;
}

.blogs .box-container .box .content .icons a{
    font-size: 1.5rem;
    color:var(--text-color-2);
}

.blogs .box-container .box .content .icons a:hover{
    color:var(--orange);
}

.blogs .box-container .box .content .icons a i{
    padding-right: .5rem;
    color:var(--orange);
}

.footer{
    background: var(--bg-color-1);
}

.footer .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(22rem, 1fr));
    gap:1.5rem;
}

.footer .box-container .box h3{
    font-size: 2.5rem;
    color:var(--text-color-1);
    padding:1rem 0;
}

.footer .box-container .box a{
    display: block;
    font-size: 1.5rem;
    color:var(--text-color-2);
    padding:1rem 0;
}

.footer .box-container .box a i{
    padding-right: .5rem;
    color:var(--orange);
}

.footer .box-container .box a:hover i{
    padding-right: 2rem;
}

.footer .credit{
    font-size: 2rem;
    text-align: center;
    border-top: .1rem solid var(--text-color-2);
    padding:1rem;
    padding-top: 2rem;
    margin-top: 2rem;
    color:var(--text-color-2);
}

.footer .credit span{
    color:var(--orange);
}












/* media queries  */

@media (max-width:991px){

    html{
        font-size: 55%;
    }

    .header{
        padding:1.5rem 2rem;
    }

    section{
        padding:2rem;
    }

}

@media (max-width:768px){

    .header .navbar{
        right: 2rem;
    }

    .header .login-form{
        right: 2rem;
    }

    #search-btn{
        display:inline-block;
    }

    .header .search-form{
        position: absolute;
        top:115%; right: 2rem;
        background:var(--bg-color-1);
        border-radius: .5rem;
        width: 90%;
        box-shadow: var(--box-shadow);
        transform:scale(0);
        transform-origin: top right;
    }

    .header .search-form.active{
        transform:scale(1);
    }

}

@media (max-width:450px){

    html{
        font-size: 50%;
    }

    .contact form .inputBox input{
        width: 100%;
    }

}

</style>
<script>
    let navbar = document.querySelector('.navbar')

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    loginForm.classList.remove('active');
    searchForm.classList.remove('active');
}

let loginForm = document.querySelector('.login-form')

document.querySelector('#login-btn').onclick = () =>{
    loginForm.classList.toggle('active');
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
}

let searchForm = document.querySelector('.search-form')

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');
    loginForm.classList.remove('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
    loginForm.classList.remove('active');
    searchForm.classList.remove('active');
}

let themeBtn = document.querySelector('#theme-btn');

themeBtn.onclick = () =>{
    themeBtn.classList.toggle('fa-sun');

    if(themeBtn.classList.contains('fa-sun')){
        document.body.classList.add('active');
    }else{
        document.body.classList.remove('active');
    }

};

var swiper = new Swiper(".review-slider", {
    loop:true,
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 5500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});
</script>
