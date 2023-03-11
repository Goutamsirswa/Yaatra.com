<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rour Recommendation System</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<body>
    <?php require './PHP/nav.php' ?>
    <section class="hero-section container">

        <h1 class="main-hd animate__animated animate__bounce animate__backInDown animate__delay-21s">
            <span class="F">आपणो</span>
            <span class="S">राजस्थान </span>
            <span> <img src="./img/pdharo.png" alt=""></span>
        </h1>

    </section>
    <section class="food-section ">
        <img src="./img/background2.jpg" alt="" class="back">
        <img src="./img/backgrond.jpg" alt="" class="back">
        <div class="after-content">
            <h1 class="food-hd">Rajasthani Food</h1>
            <div class="food-slider">


                <div><img src="./img/food/400px-KerSangri_20190604101429.jpg" alt="">
                    <h3 class="food-sub-hd">Ker Sangari - Ker-Saangri Ro Saag</h3>

                </div>
                <div><img src="./img/food/800px-Aam_ki_chatniraw_mango_chutney_20190604102021.jpg" alt="">
                    <h3 class="food-sub-hd">Aam ki chatni</h3>
                </div>
                <div><img src="./img/food/800px-Boondi_Raita_20190604101641.jpg" alt="">
                    <h3 class="food-sub-hd">Boondi Raita</h3>
                </div>
                <div><img src="./img/food/Badam_halwa_20190604101826.jpg" alt="">
                    <h3 class="food-sub-hd">Badam halwa</h3>
                </div>
                <div><img src="./img/food/Bajre-ki-raab.webp" alt="">
                    <h3 class="food-sub-hd">Bajra Ki Raab</h3>

                </div>
                <div><img src="./img/food/Balu_shahi_20180314222809.jpg" alt="">
                    <h3 class="food-sub-hd">Balu shahi</h3>

                </div>
                <div><img src="./img/food/Besan_Ke_Gatte.webp" alt="">
                    <h3 class="food-sub-hd">Besan ke Gatte</h3>

                </div>
                <div><img src="./img/food/Churma_20180314222652.jpg" alt="">
                    <h3 class="food-sub-hd">Churma Ladoo</h3>

                </div>
                <div><img src="./img/food/Chutneykarnataka.jpg" alt="">
                    <h3 class="food-sub-hd">Chutneys like Kachri, Imli, Lehsun and Tamatar</h3>

                </div>
                <div><img src="./img/food/DalBati.jpg" alt="">
                    <h3 class="food-sub-hd">Dal Bati Churma</h3>

                </div>
                <div><img src="./img/food/GhevarRajasthaniSweet.jpg" alt="">
                    <h3 class="food-sub-hd">Ghevar</h3>

                </div>
                <div><img src="./img/food/Jal_Jeera.jpg" alt="">
                    <h3 class="food-sub-hd">Jal Jeera</h3>

                </div>
                <div><img src="./img/food/Kachoris_-_Kolkata.jpg" alt="">
                    <h3 class="food-sub-hd">Pyaaz Ki Kachori</h3>
                </div>
                <div><img src="./img/food/Kadhi_Chawal_from_India.webp" alt="">
                    <h3 class="food-sub-hd">Kadhi</h3>

                </div>
                <div><img src="./img/food/Kalakand_of_Salem.jpg" alt="">
                    <h3 class="food-sub-hd">Kalakand</h3>

                </div>
                <div><img src="./img/food/laal maas.jpg" alt="">
                    <h3 class="food-sub-hd">Laal Maas</h3>

                </div>
                <div><img src="./img/food/Malpua_-_Howrah_2015-06-14_2868.jpg" alt="">
                    <h3 class="food-sub-hd">Malpua</h3>

                </div>
                <div><img src="./img/food/Methi_Paratha_by_Fatima_20190604102546.jpg" alt="">
                    <h3 class="food-sub-hd">Methi Paratha</h3>

                </div>
                <div><img src="./img/food/Mint_lassi.jpg" alt="">
                    <h3 class="food-sub-hd">Masala-Chhach</h3>

                </div>
                <div><img src="./img/food/Mirchi_Bada_2.jpg" alt="">
                    <h3 class="food-sub-hd">Mirchi Bada</h3>

                </div>
                <div><img src="./img/food/Mohan-Maas.jpg" alt="">
                    <h3 class="food-sub-hd"> Mohan Maas</h3>

                </div>
                <div><img src="./img/food/Moong_daal_ka_halwa_the_super_king_of_sweets.jpg" alt="">
                    <h3 class="food-sub-hd">Moong Ki Daal Ka Halwa</h3>

                </div>
                <div><img src="./img/food/Parippuvada_20190604102809.jpg" alt="">
                    <h3 class="food-sub-hd">Kalmi Vada</h3>

                </div>

                <div><img src="./img/food/Tastes_from_Rajasthan_20180314222457.jpg" alt="">
                    <h3 class="food-sub-hd">Bajra ki Roti with Lehsun Chutney</h3>

                </div>
            </div>
        </div>
        <img src="./img/chaf.png" alt="" class="chaf">
        <img src="./img/chaf2.png" alt="" class="chaf2">
    </section>
    <section class="tourist-place container" id="place">
        <h1 class="TP_heading" >Best Place To Visit This  <span id="TP_heading"></span> Month</h1>
        <div class="Slider_box">
            <div class="F_box">
                <h1 class="place_name" id="P_name"></h1>
                <p class="place_dis" id="P_dis"></p>
                <div class="btn_box"><button id="previous" class="previous"  onclick="previous()"><img src="./img/next.png" alt=""></button>
                    <button id="next" onclick="next()" class="next"><img src="./img/next.png" alt=""></button></div>
            </div>
            <div id="img-sec" class="S_box">
                <p id="Full_dis">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni reiciendis hic provident possimus ab qui deserunt doloribus voluptatem velit eius odit optio nostrum blanditiis vel, libero dolore, consequuntur consectetur nam!</p>
            </div>
        </div>
        
    </section>

    <section>
    <?php require './PHP/footer.php' ?>
        
           <div class="top-bottom" > <button class="top-bottom-btn" id="top-bottom-btn"><img src="./img/TOP arrow.png" alt=""></button></div>
    </section>
    <script src="script.js"></script>
    <script src="./scrollbtn.js"></script>

</body>

</html>