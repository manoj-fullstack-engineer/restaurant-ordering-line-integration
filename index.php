<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IndOishii Moroyama | 毛呂山インド料理 | Best Indian Restaurant</title>

    <meta name="description" content="No.1 Indian restaurant in Moroyama Saitama. Dine-in, takeout, delivery. Call 049-270-2984">
    <meta name="keywords" content="Moroyama Indian restaurant, 毛呂山 インド料理, Halal restaurant Saitama, Indoishii">
    <meta name="robots" content="index, follow">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif
        }

        .navbar {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2)
        }

        .hero {
            background: url('img/bg-hero.jpg') center/cover no-repeat;
            height: 95vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff
        }

        .hero-box {
            background: rgba(0, 0, 0, 0.65);
            padding: 50px;
            border-radius: 16px
        }

        .section {
            padding: 80px 0
        }

        iframe {
            width: 100%;
            height: 600px;
            border-radius: 14px;
            border: 1px solid #ddd
        }

        .call-btn {
            font-size: 22px;
            padding: 15px 35px
        }

        .card {
            border: none;
            border-radius: 16px
        }

        .social i {
            font-size: 26px;
            margin: 10px;
            color: #ff9933
        }

        footer {
            background: #111;
            color: #fff
        }
    </style>
    <style>
        .menu-frame {
            width: 100%;
            display: none;
            margin-top: 15px;
        }

        .menu-frame iframe {
            width: 100%;
            height: 90vh;
            min-height: 600px;
            border-radius: 12px;
            border: 1px solid #ddd;
            background: #fff;
        }

        @media(max-width:768px) {
            .menu-frame iframe {
                height: 80vh;
                min-height: 500px;
            }
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-warning">IndOishii</a>

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="#menu" id="navMenu">メニュー</a></li>
                    <li class="nav-item"><a class="nav-link" href="#offers" id="navOffer">特典</a></li>
                    <li class="nav-item"><a class="nav-link" href="#access" id="navAccess">アクセス</a></li>

                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <button class="btn btn-warning btn-sm" onclick="setLang('jp')">日本語</button>
                        <button class="btn btn-light btn-sm" onclick="setLang('en')">EN</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-box">
            <h1 id="heroTitle">本格インド料理レストラン｜毛呂山</h1>
            <p id="heroSub">店内・テイクアウト・配達 | ハラール・ベジOK</p>

            <a href="tel:0492702984" class="btn btn-warning call-btn mt-3">
                📞 049-270-2984 に電話
            </a>
        </div>
    </section>

    <!-- CALL -->
    <section class="bg-dark text-white text-center section">
        <div class="container">
            <h2 id="callTitle">ご注文・予約はお電話ください</h2>
            <a href="tel:0492702984" class="btn btn-warning btn-lg mt-3">📞 0492702984 今すぐ電話</a>
        </div>
    </section>

    <!-- OFFERS -->
    <section id="offers" class="section">
        <div class="container">
            <h2 class="text-center mb-5" id="offerTitle">会員特典</h2>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card shadow h-100 text-center p-4">
                        <h4>LINE</h4>
                        <p id="lineText">
                            LINE友達追加で永久5%OFF<br>
                            070-9006-6661追加<br>
                            「Hi I am ___」送信
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow h-100 text-center p-4">
                        <h4 id="pointTitle">ポイントカード</h4>
                        <p id="pointText">
                            100円ごとに2ポイント<br>
                            いつでも利用可能
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow h-100 text-center p-4">
                        <h4 id="partyTitle">パーティー割引</h4>
                        <p id="partyText">
                            LINE＋ポイント会員<br>
                            パーティー予約10%OFF
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- MENU -->
    <!-- MENU -->
    <section id="menu" class="bg-light section">
        <div class="container">

            <h2 class="text-center mb-5" id="menuTitle">メニュー</h2>

            <!-- BREAKFAST -->
            <div class="mb-5">
                <h4>モーニング Breakfast</h4>

                <button class="btn btn-dark me-2" onclick="toggleMenu('breakfastMenu')">
                    👁 Show Menu
                </button>

                <a href="menu/breakfast.pdf" download class="btn btn-warning">
                    ⬇ Download Menu
                </a>

                <div id="breakfastMenu" class="menu-frame">
                    <iframe src="menu/breakfast.pdf"></iframe>
                </div>
            </div>


            <!-- LUNCH -->
            <div class="mb-5">
                <h4>ランチ Lunch</h4>

                <button class="btn btn-dark me-2" onclick="toggleMenu('lunchMenu')">
                    👁 Show Menu
                </button>

                <a href="menu/lunch.pdf" download class="btn btn-warning">
                    ⬇ Download Menu
                </a>

                <div id="lunchMenu" class="menu-frame">
                    <iframe src="menu/lunch.pdf"></iframe>
                </div>
            </div>


            <!-- DINNER -->
            <div class="mb-5">
                <h4>ディナー Dinner</h4>

                <button class="btn btn-dark me-2" onclick="toggleMenu('dinnerMenu')">
                    👁 Show Menu
                </button>

                <a href="menu/dinner.pdf" download class="btn btn-warning">
                    ⬇ Download Menu
                </a>

                <div id="dinnerMenu" class="menu-frame">
                    <iframe src="menu/dinner.pdf"></iframe>
                </div>
            </div>


            <!-- TAKEOUT -->
            <div class="mb-5">
                <h4>テイクアウト Takeout (10% OFF)</h4>

                <button class="btn btn-dark me-2" onclick="toggleMenu('takeoutMenu')">
                    👁 Show Menu
                </button>

                <a href="menu/takeout-delivery.pdf" download class="btn btn-warning">
                    ⬇ Download Menu
                </a>

                <div id="takeoutMenu" class="menu-frame">
                    <iframe src="menu/takeout-delivery.pdf"></iframe>
                </div>
            </div>


            <!-- DELIVERY -->
            <div class="mb-5">
                <h4>デリバリー Delivery</h4>

                <p class="fw-bold">
                    ご注文はLINEへ：070-9006-6661<br>
                    Send name, phone, address & map on LINE.
                </p>

                <button class="btn btn-dark me-2" onclick="toggleMenu('deliveryMenu')">
                    👁 Show Menu
                </button>

                <a href="menu/takeout-delivery.pdf" download class="btn btn-warning">
                    ⬇ Download Menu
                </a>

                <div id="deliveryMenu" class="menu-frame">
                    <iframe src="menu/takeout-delivery.pdf"></iframe>
                </div>
            </div>


            <!-- TIFFIN -->
            <div class="mb-5">
                <h4>ティフィン Tiffin</h4>

                <p class="fw-bold">
                    3個以上で3km配達可。<br>
                    3個未満：配達料＋200円
                </p>

                <button class="btn btn-dark me-2" onclick="toggleMenu('tiffinMenu')">
                    👁 Show Menu
                </button>

                <a href="menu/tiffin.pdf" download class="btn btn-warning">
                    ⬇ Download Menu
                </a>

                <div id="tiffinMenu" class="menu-frame">
                    <iframe src="menu/tiffin.pdf"></iframe>
                </div>
            </div>

        </div>
    </section>


    <!-- SOCIAL -->
    <section class="section text-center social-section">
        <div class="container">
            <h2 id="socialTitle">Follow Us</h2>

            <div class="social-icons mt-3">
                <a href="https://www.instagram.com/indoishii_moroyama/" target="_blank" aria-label="Instagram">
                    <i class="fab fa-instagram instagram"></i>
                </a>

                <a href="https://www.facebook.com/profile.php?id=61587785578193" target="_blank" aria-label="Facebook">
                    <i class="fab fa-facebook facebook"></i>
                </a>

                <a href="https://www.youtube.com/@INDOISHII" target="_blank" aria-label="YouTube">
                    <i class="fab fa-youtube youtube"></i>
                </a>

                <a href="https://line.me/@indoishii_moroyama" target="_blank" aria-label="LINE">
                    <i class="fab fa-line line"></i>
                </a>
            </div>
        </div>
    </section>


    <!-- MAP -->
    <section id="access" class="section text-center">
        <div class="container">
            <h2 id="accessTitle">アクセス</h2>

            <p id="addressText">
                〒350-0451 埼玉県入間郡毛呂山町モロホンゴ973
            </p>
            <p>Phone: 049-270-2984, Mob: 070-9006-6661 | Email: indoishii@gmail.com</p>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3230.271417150827!2d139.3038931744496!3d35.94032981569974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60192b7b0b4bdf23%3A0x485596495181f3a9!2zaW5kT2lzaGlpIOOCpOODs-ODieODu-OCquOCpOOCt-OCpA!5e0!3m2!1sen!2sin!4v1770528565937!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <a href="tel:0492702984" class="btn btn-warning btn-lg mt-4">📞 Call Now 049-270-2984</a>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="text-center p-4">
        <h5>IndOishii Moroyama, 049-270-2984, 070-9006-66661</h5>
        <p id="footerText">毛呂山人気インド料理レストラン</p>
    </footer>

    <script>
        function setLang(lang) {
            localStorage.setItem("lang", lang);

            if (lang == "en") {
                heroTitle.innerText = "Authentic Indian Restaurant in Moroyama";
                heroSub.innerText = "Dine-in • Takeout • Delivery • Tiffin | Halal & Veg";
                callTitle.innerText = "Call for Orders & Reservations";
                offerTitle.innerText = "Membership Offers";
                lineText.innerText = "Add LINE friend 070-9006-6661 & get 5% OFF forever. Send: Hi I am ___";
                pointTitle.innerText = "Point Card";
                pointText.innerText = "Get 2 points on every ¥100. Use anytime.";
                partyTitle.innerText = "Party Discount";
                partyText.innerText = "LINE + Point members get 10% OFF party booking.";
                menuTitle.innerText = "Our Menu";
                deliveryTitle.innerText = "Delivery Menu";
                socialTitle.innerText = "Follow Us";
                accessTitle.innerText = "Access";
                addressText.innerText = "973-Morohongo, Moroyama Town, Iruma Gun, Saitama, Japan 350-0451";
                footerText.innerText = "Best Indian Restaurant in Moroyama";
                navMenu.innerText = "Menu";
                navOffer.innerText = "Offers";
                navAccess.innerText = "Access";
            }

            if (lang == "jp") {
                heroTitle.innerText = "本格インド料理レストラン｜毛呂山";
                heroSub.innerText = "店内・テイクアウト・配達 ・ティフィン | ハラール・ベジOK";
                callTitle.innerText = "ご注文・予約はお電話ください";
                offerTitle.innerText = "会員特典";
                socialTitle.innerText = "フォローしてください";
                accessTitle.innerText = "アクセス";
                addressText.innerText = "〒350-0451 埼玉県入間郡毛呂山町モロホンゴ973";
                footerText.innerText = "毛呂山人気インド料理レストラン";
                navMenu.innerText = "メニュー";
                navOffer.innerText = "特典";
                navAccess.innerText = "アクセス";
            }
        }

        window.onload = function() {
            let saved = localStorage.getItem("lang");
            if (saved) {
                setLang(saved);
            }
        }
    </script>

    <script>
        function toggleMenu(id) {
            let el = document.getElementById(id);

            if (el.style.display === "none" || el.style.display === "") {
                el.style.display = "block";
            } else {
                el.style.display = "none";
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>