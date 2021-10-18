<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NizarShare</title>
</head>

<body>
    <style>
        * {
            /* padding: 0; */
            /* margin: 0; */
            font-family: poppins;
        }

        body {
            background-color: black;
            color: white;
            margin-bottom: 2rem;
        }


        .box a {
            text-decoration: none;
            color: white;
            font-family: monospace;
        }

        section {
            margin-top: 1.5rem;
            padding: 0 1rem;
        }

        .container {
            width: 100%;
            max-width: 768px;
            margin: 0 auto;
        }

        .ket p {
            text-align: center;
        }

        h2 {
            margin-bottom: 0;
            font-family: quicksand;
        }

        h3 {
            border-bottom: 1px solid;
            margin-bottom: 0;
            padding-bottom: 0.7rem;
            width: 100%;
            max-width: 10rem;
            transition: 0.3s;
        }

        h3:hover {
            max-width: 15rem;

        }

        img.gp {
            background-color: white;
            border-radius: 100%;
            position: relative;
            top: 20px;
            width: 100px;
            /* opacity: 100%; */
        }

        .col {
            font-size: 12px;
        }
    </style>

    <body>

        <!-- Primary Page Layout
        	================================================== -->
        <!-- all content goes in here -->


        <div class="box" style="text-align: center;">
            <h2>.NizarShare</h2>
            <a href="https://instagram.com/nizarnnarendra">by @nizarnnarendra</a><br>
            <img class="gp" src="greenpeace.png" alt="http://anonymouspoem.com/nature-humans/">
        </div>


        <section class="ket">
            <div class="container">
                <h3>Up Greenpeace</h3>
                <p>Di tahun 1971, dengan motivasi menjadikan dunia menjadi hijau dan damai, sekelompok aktivis berlayar
                    dari Vancouver,
                    Cananda, untuk melakukan protes terhadap rencana uji coba bom nuklir Amerika Serikat di pulau
                    Amchitka, pesisir barat
                    Alasaka.</p>
            </div>
        </section>





        <!-- 2 columns -->
        <style>
            .col {
                padding: 0 5px 0 5px;
            }

            .d-flex {
                display: flex;
            }

            img.ilust {
                max-width: 300px;
                width: 100%;
                padding-bottom: 25px;
                display: flex;
                margin: 0 auto;
            }
        </style>
        <section class="news">
            <div class="container">
                <img class="ilust" src="ilust1.jpg" alt="http://anonymouspoem.com/nature-humans/">
            </div>
            <div class="container d-flex" style="margin-bottom: 1.5rem;">
                <div class="col">Di Indonesia banyak isu lingkungan yang muncul ke publik, seperti pemindahan lokasi
                    ibukota dari Jakarta ke Pulau Kalimantan.</div>
                <div class="col">Lingkungan akan dikorbankan untuk pembangunan itu, entah seperti apa nasib Alam
                    Indonesia sebagai paru-paru dunia, masih valid kah?</div>
            </div>
            <div class="container">
                <img class="ilust" src="ilust2.jpg" alt="http://www.toonpool.com/cartoons/no%20title_146973">
            </div>
        </section>


        <!-- 2 columns -->




        <!-- crisis -->
        <!-- <style>
            .main-crisis span {
                font-family: cursive;
                text-transform: capitalize;
                font-size: 30px;
                /* text-align: right; */
                position: relative;
                top: -30px;
            }
        </style>
        <section class="main-crisis">
            <div class="container">
                <span>prioritas ekonomi dan keadaan masyarakat</span>
            </div>
        </section> -->


        <!-- end crisis -->


        <!-- crew -->
        <style>
            img.access-visit {
                position: fixed;
                right: 18px;
                bottom: 50px;
                width: 100px;
                /* transform: translateZ(34px); */
                -webkit-transform: scaleX(-1);
                transform: scaleX(-1);
            }

            .access-visitt {
                display: none;
                transition: 1s;
            }

            @media screen and (max-width: 375px) {
                .access-visitt {
                    position: absolute;
                    top: 20px;
                    width: 150px;
                    left: -73px;
                    transform: rotate(91deg);
                    display: block;
                    z-index: -1;
                    transition: 1s;
                }
            }

            @media screen and (min-width: 375px) and (max-width: 425px) {
                .access-visitt {
                    position: absolute;
                    top: 20px;
                    width: 161px;
                    left: -48px;
                    z-index: -1;
                    transform: rotate(91deg);
                    display: block;
                }
            }

            @media screen and (min-width: 425px) and (max-width: 768px) {
                .access-visitt {
                    position: absolute;
                    top: -50px;
                    width: 250px;
                    filter: blur(20px);
                    z-index: -1;
                    left: 0px;
                    transform: rotate(91deg);
                    opacity: 80%;
                    display: block;
                }
            }

            @media screen and (min-width: 768px) {
                .access-visitt {
                    position: absolute;
                    top: -50px;
                    width: 500px;
                    filter: blur(50px);
                    z-index: -1;
                    left: 0px;
                    transform: rotate(91deg);
                    opacity: 80%;
                    display: block;
                }
            }
        </style>
        <img class="access-visit" src="squid.png" alt="">
        <img class="access-visitt" src="squid.png" alt="">


        <!-- end crew -->



        <!-- footer -->
        <footer>
            <p style="text-align: center; font-size: 12px;"> Copyright &copy;
                <script>document.write(new Date().getFullYear())</script> NizarShare All Rights Reserved
            </p>
        </footer>
        <!-- end footer -->







        <!-- blood -->
        <!-- <style>
    img.blood {
    width: 100%;
    position: absolute;
    top: -6rem;
    /* margin-top: -13rem; */
    z-index: -1;
    opacity: 50%;
    filter: blur(10px);
}
</style>
<img class="blood" src="blood.png" alt=""> -->


        <!-- end blood -->



















        <!-- bt -->
        <style>
            .visit {
                text-decoration: none;
                color: white;
                /* width: 50px; */
                font-size: 15px;
                border-radius: 5px;
                position: fixed;
                padding: 10px;
                /* top: 85px; */
                bottom: 10px;
                background-color: #cd203f;
                right: 10px;
                margin: 0 auto;
            }
        </style>
        <a class="visit" href="https://www.greenpeace.org/">Kunjungi Visit</a>
        <!-- end bt -->



        <!--  -->












        <!-- End Document
        ================================================== -->
    </body>

</html>
