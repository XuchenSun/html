<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <script src="image_sliders.js"></script>
    <link
        rel="stylesheet"
        href="index.css"

    />
    <style>
        ul{padding: 0; list-style: none;}
        .swiper-list{
            width: 100%;
            height: 100vh;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
        }
        .swiper-main {
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        .swiper-item{
            height: 100%;
            display: inline;
            position: absolute;
        }
        img {
            width: 100%;
            height: 100%;
            display: block;
        }

        .swiper-spot{
            width: 100%;
            height: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            bottom: 10px;
        }
        .swiper-spot .spot-item{
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: #ccc;
            margin-left: 10px;
        }
        .swiper-spot .spot-item:nth-of-type(1) {
            margin-left: 0;
        }

        .leftBtn{
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            width: 30px;
            height: 30px;

        }
        .leftBtn:hover{
            background-color: #ff6600;
        }
        .rightBtn{
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            width: 30px;
            height: 30px;
        }
        .rightBtn:hover{
            background-color: #ff6600;
        }
    </style>
</head>
<body>
<nav id="navbar" class="nav">
    <ul class="nav-list">
        <li>
            <a href="#welcome">Welcome!</a>
        </li>
        <li>
            <a href="#web_projects">Web Development</a>
        </li>
        <li>
            <a href="#game_projects">Graphic Game Development</a>
        </li>
        <li>
            <a href="#ML_projects">Machine Learning</a>
        </li>
        <li>
            <a href="#E_projects">Hardware and Software Design</a>
        </li>
        <li>
            <a href="#download">Download</a>
        </li>
        <li>
            <a href="#contact">Contact</a>
        </li>

    </ul>
</nav>

<!-- END NAV -->

<!-- START WELCOME SECTION -->

<div class="swiper-list" id="welcome"></div>

<!-- END WELCOME SECTION -->

<!-- START PROJECTS SECTION -->

<section id="web_projects" class="projects-section">
    <h2 style="margin: 5%">Web Development Projects </h2>

    <div class="projects-grid">
        <a
            href="subpage/Personal%20Certificate.html"
            target="_blank"
            class="project project-tile"
        >
            <img
                class="project-image"
                src="https://raw.githubusercontent.com/XuchenSun/KFR/gh-pages/images/HomePage.png"
                alt="project"
            />
            <p class="project-title">
                <span class="code">&lt;</span>
                Personal Certificate Display Page
                <span class="code">&#47;&gt;</span>
            </p>
        </a>
        <a
            href="subpage/web_development/index.html"
            target="_blank"
            class="project project-tile"
        >
            <img
                class="project-image"
                src="https://raw.githubusercontent.com/XuchenSun/Web/master/images/image.png"
                alt="project"
            />
            <p class="project-title">
                <span class="code">&lt;</span>
                Web Application One(BootStrap+jQuery)
                <span class="code">&#47;&gt;</span>
            </p>
        </a>
        <a
            href="web_app/weather.html"
            target="_blank"
            class="project project-tile"
        >
            <img
                class="project-image"
                src="images/weather_app.png"
                alt="project"
            />
            <p class="project-title">
                <span class="code">&lt;</span>
                Weather App(API)
                <span class="code">&#47;&gt;</span>
            </p>
        </a>
        <a
            href="subpage/Kungfu_Restaurant_Service_Survey.html"
            target="_blank"
            class="project project-tile"
        >
            <img
                class="project-image"
                src="https://raw.githubusercontent.com/XuchenSun/KFR/gh-pages/images/Survey.png"
                alt="project"
            />
            <p class="project-title">
                <span class="code">&lt;</span>
                Customer Satisfaction Survey
                <span class="code">&#47;&gt;</span>
            </p>
        </a>
        <a
            href="subpage/Kungfu_Restaurant_Promotion_page.html"
            target="_blank"
            class="project project-tile"
        >
            <img
                class="project-image"
                src="https://raw.githubusercontent.com/XuchenSun/KFR/gh-pages/images/Promotion.png"
                alt="project"
            />
            <p class="project-title">
                <span class="code">&lt;</span>
                Promotion Page
                <span class="code">&#47;&gt;</span>
            </p>
        </a>
        <a
            href="subpage/Kungfu_Restaurant_Food_Document.html"
            target="_blank"
            class="project project-tile"
        >
            <img
                class="project-image"
                src="https://raw.githubusercontent.com/XuchenSun/KFR/gh-pages/images/FoodDocument.png"
                alt="project"
            />
            <p class="project-title">
                <span class="code">&lt;</span>
                Food Document Page
                <span class="code">&#47;&gt;</span>
            </p>
        </a>
        <a
            href="subpage/MakingPrediction.html"
            target="_blank"
            class="project project-tile"

        >
            <img
                class="project-image"
                src="images/prediction.png"
                alt="project"
            />
            <p class="project-title">
                <span class="code">&lt;</span>
                Linear Regression(Tensorflow.js)
                <span class="code">&#47;&gt;</span>
            </p>
        </a>
        <a
            href="subpage/AudioRecognition.html"
            target="_blank"
            class="project project-tile"

        >
            <img
                class="project-image"
                src="images/audioRecognition.png"
                alt="project"
            />
            <p class="project-title">
                <span class="code">&lt;</span>
                Audio Recognition(Tensorflow.js)
                <span class="code">&#47;&gt;</span>
            </p>
        </a>
        <a
            href="personalWebPage.html"
            target="_blank"
            class="project project-tile"
        >
            <img
                class="project-image"
                src="https://raw.githubusercontent.com/XuchenSun/KFR/gh-pages/images/PersonalPage.png"
                alt="project"
            />
            <p class="project-title">
                <span class="code">&lt;</span>
                Personal Web Page
                <span class="code">&#47;&gt;</span>
            </p>
        </a>
        <a
            href="subpage/login/flat_log_in/log_in.html"
            target="_blank"
            class="project project-tile"
        >
            <img
                class="project-image"
                src="images/login.png"
                alt="project"
            />
            <p class="project-title">
                <span class="code">&lt;</span>
                Login Page(static)
                <span class="code">&#47;&gt;</span>
            </p>
        </a>
        <a
            href="2048/2048.html"
            target="_blank"
            class="project project-tile"
        >
            <img
                class="project-image"
                src="images/2048.png"
                alt="project"
            />
            <p class="project-title">
                <span class="code">&lt;</span>
                Game 2048(Web Development)
                <span class="code">&#47;&gt;</span>
            </p>
        </a>

    </div>
</section>
<section id="game_projects" class="projects-section">
    <h2 style="margin: 5%">Graphic Game Projects </h2>
    <div class="projects-grid">
        <a
            href="https://play.unity.com/mg/lego/webgl-builds-14461"
            target="_blank"
            class="project project-tile"
        >
            <img
                class="project-image"
                src="https://raw.githubusercontent.com/XuchenSun/KFR/gh-pages/images/legoGame.png"
                alt="project"
            />
            <p class="project-title">
                <span class="code">&lt;</span>
                Lego Game(Unity)
                <span class="code">&#47;&gt;</span>
            </p>
        </a>

        <a
            href="subpage/project_game_image_design.html"
            target="_blank"
            class="project project-tile"
        >
            <img
                class="project-image"
                src="https://raw.githubusercontent.com/XuchenSun/KFR/gh-pages/images/GameImageDesign.png"
                alt="project"
            />
            <p class="project-title">
                <span class="code">&lt;</span>
                Game Image Design Based On GAN and CNN(Python+ML+UE4)
                <span class="code">&#47;&gt;</span>
            </p>
        </a>


        <a
            href="2048/2048.html"
            target="_blank"
            class="project project-tile"
        >
            <img
                class="project-image"
                src="images/2048.png"
                alt="project"
            />
            <p class="project-title">
                <span class="code">&lt;</span>
                Game 2048(Web Development)
                <span class="code">&#47;&gt;</span>
            </p>
        </a>
        <a
            href="subpage/project_game_level_design.html"
            target="_blank"
            class="project project-tile"
        >
            <img
                class="project-image"
                src="images/game_level_design.png"
                alt="project"
            />
            <p class="project-title">
                <span class="code">&lt;</span>
                Game Level Design(UE4)
                <span class="code">&#47;&gt;</span>
            </p>
        </a>

    </div>



</section>
<section id="ML_projects" class="projects-section">
    <h2 style="margin: 5%">Machine Learning Projects </h2>
    <div class="projects-grid">


        <a
            href="subpage/project_game_image_design.html"
            target="_blank"
            class="project project-tile"

        >
            <img
                class="project-image"
                src="https://raw.githubusercontent.com/XuchenSun/KFR/gh-pages/images/GameImageDesign.png"
                alt="project"
            />
            <p class="project-title">
                <span class="code">&lt;</span>
                Game Image Design Based On GAN and CNN(Python+ML+UE4)
                <span class="code">&#47;&gt;</span>
            </p>
        </a>
        <a
            href="subpage/ML_FC_layer.html"
            target="_blank"
            class="project project-tile"

        >
            <img
                class="project-image"
                src="https://raw.githubusercontent.com/XuchenSun/Machine_Learning/master/FC_image3.png"
                alt="project"
            />
            <p class="project-title">
                <span class="code">&lt;</span>
                Image Classification Based On Fully Connected Layer(Python+Tensorflow)
                <span class="code">&#47;&gt;</span>
            </p>
        </a>
        <a
            href="subpage/ML_CNN_layer.html"
            target="_blank"
            class="project project-tile"

        >
            <img
                class="project-image"
                src="https://raw.githubusercontent.com/XuchenSun/Machine_Learning/master/CNN_image3.png"
                alt="project"
            />
            <p class="project-title">
                <span class="code">&lt;</span>
                Image Classification Based On CNN(Python3.6+Tensorflow+CIFAR10)
                <span class="code">&#47;&gt;</span>
            </p>
        </a>
        <a
            href="subpage/ML_DCGAN.html"
            target="_blank"
            class="project project-tile"

        >
            <img
                class="project-image"
                src="https://raw.githubusercontent.com/XuchenSun/newDCGAN/master/image_at_epoch_0050.png"
                alt="project"
            />
            <p class="project-title">
                <span class="code">&lt;</span>
                Generate Image By DCGAN
                <span class="code">&#47;&gt;</span>
            </p>
        </a>
        <a
            href="subpage/LinearRegression.html"
            target="_blank"
            class="project project-tile"

        >
            <img
                class="project-image"
                src="images/linearRegression.jpg"
                alt="project"
            />
            <p class="project-title">
                <span class="code">&lt;</span>
                Linear Regression(sklearn)
                <span class="code">&#47;&gt;</span>
            </p>
        </a>
        <a
            href="subpage/MakingPrediction.html"
            target="_blank"
            class="project project-tile"

        >
            <img
                class="project-image"
                src="images/prediction.png"
                alt="project"
            />
            <p class="project-title">
                <span class="code">&lt;</span>
                Linear Regression(Tensorflow.js)
                <span class="code">&#47;&gt;</span>
            </p>
        </a>
        <a
            href="subpage/AudioRecognition.html"
            target="_blank"
            class="project project-tile"

        >
            <img
                class="project-image"
                src="images/audioRecognition.png"
                alt="project"
            />
            <p class="project-title">
                <span class="code">&lt;</span>
                Audio Recognition(Tensorflow.js)
                <span class="code">&#47;&gt;</span>
            </p>
        </a>
    </div>



</section>
<section id="E_projects" class="projects-section">
    <h2 style="margin: 5%">Hardware and Software Design </h2>

    <div class="projects-grid">

        <a
            href="subpage/project_traffic_light.html"
            target="_blank"
            class="project project-tile"

        >
            <img
                class="project-image"
                src="https://raw.githubusercontent.com/XuchenSun/free_public_images/main/traffic%20light.jpg"
                alt="project"
            />
            <p class="project-title">
                <span class="code">&lt;</span>
                Traffic Light Design(Part One: Introduction and VHDL Design)
                <span class="code">&#47;&gt;</span>
            </p>
        </a>

        <a
            href="subpage/project_traffic_light2.html"
            target="_blank"
            class="project project-tile"
        >
            <img
                class="project-image"
                src="https://raw.githubusercontent.com/XuchenSun/free_public_images/main/traffic%20light.jpg"
                alt="project"
            />
            <p class="project-title">
                <span class="code">&lt;</span>
                Traffic Light Design(Part Two: ModelSim Simulation)
                <span class="code">&#47;&gt;</span>
            </p>
        </a>

        <a
            href="subpage/texttospeech.html"
            target="_blank"
            class="project project-tile"
        >
            <img
                class="project-image"
                src="https://raw.githubusercontent.com/XuchenSun/AISpeak/master/text%20to%20speech.png"
                alt="project"
            />
            <p class="project-title">
                <span class="code">&lt;</span>
                AI Speak(Text to Speech,Python GUI)
                <span class="code">&#47;&gt;</span>
            </p>
        </a>


    </div>


</section>
<section id="download" class="projects-section">
    <h2 style="margin: 5%">Software Download </h2>

    <a href="download/aispeak.exe" download>AISpeak(32&64 bit Windows EXE)</a>




</section>
<!-- END PROJECTS SECTION -->

<!-- START CONTACT SECTION -->

<section id="contact" class="contact-section">
    <div class="contact-section-header">
        <h2>Let's work together....</h2>
        <p>Would you like a cup of coffee?</p>
    </div>
    <div class="contact-links">

        <a
            id="profile-link"
            href="https://github.com/XuchenSun"
            target="_blank"
            class="btn contact-details"
        > GitHub</a>
        <a
            href="https://leetcode.com/xuchens/"
            target="_blank"
            class="btn contact-details"> Leetcode</a>
        <a
            href="https://www.linkedin.com/in/a2211b/"
            target="_blank"
            class="btn contact-details"> Linkedin</a>



        <a href="mailto:xuchens@mun.ca" class="btn contact-details"> Send a mail</a>
        <a href="tel:437-463-0068" class="btn contact-details"> Call me</a>
    </div>
</section>

<!-- END CONTACT SECTION -->

<!-- START FOOTER SECTION -->

<footer>
    <p>
        This is a web design project.
    </p>
    <p>
        &copy; Created from Xuchen

    </p>
</footer>

<!-- END FOOTER SECTION -->
<script>
    console.time();
    let imgArr = [
        {
            url: '#',
            imgPath: 'images/github.png'
        },

        {
            url: '#',

            imgPath: 'images/web_development.png'
        },
        {
            url: '#',
            imgPath: 'images/me1.jpg'
        },
        {
            url: '#',
            imgPath: 'images/game_level_design.png'
        },
        {
            url: '#',
            imgPath: 'images/me3.png'
        },
        {
            url: '#',
            imgPath: 'images/me3_b.png'
        },
        {
            url: '#',
            imgPath: 'images/game_level_design2.png'
        },





    ];

    new Swiper({
        imgArr: imgArr,
        aniTIme: 1005,
        intervalTime: 1005,
        autoplay: true
    }).init();
    console.timeEnd();

</script>
</body>


</html>

