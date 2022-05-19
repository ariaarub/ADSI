<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dealerships</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body {
            width: 375px;
            /* height: 812px; */
            background-color: #f3f3f3;
        }

        header {
            position: absolute;
            width: 375px;
            height: 96px;
            left: 0px;
            top: 0px;

            background: #FFFFFF;
            /* Neutral / Grey 400 */

            border: 0.5px solid #7B8794;
        }

        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Mulish&display=swap');

        h3 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 20px;
            line-height: 120%;
            text-align: center;
            letter-spacing: 0.15px;
            color: #323F4B;
        }

        footer {
            position: absolute;
            width: 375px;
            height: 80px;
            left: 0px;
            bottom: 0px;

            /* Neutral / White */

            background: #FFFFFF;
            /* Neutral / Grey 400 */

            border: 0.5px solid #7B8794;
        }

        .middle-container {
            background: #FFFFFF;
            position: absolute;
            top: 96px;
            width: 375px;
            height: 644px;
            padding-top: 36px;
            padding-left: 24px;
            padding-right: 24px;
        }

        .mid-search {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: absolute;
            width: 125px;
            height: 100%;
            left: 125px;
            top: 0px;
        }

        h4 {
            font-family: 'Mulish', sans-serif;
            color: #323F4B;
        }

        .store-status {
            position: absolute;
            font-family: 'Mulish', sans-serif;
            font-size: 16px;
            font-weight: 700;
            line-height: 150%;
            color: #323F4B;
            left: 287px;
            top: 18px;

        }

        .store-name {
            position: absolute;
            font-family: 'Mulish', sans-serif;
            font-size: 16px;
            font-weight: 600;
            line-height: 150%;
            color: #323F4B;
            left: 72px;
            top: 6px;

        }

        .store-dist {
            position: absolute;
            font-family: 'Mulish', sans-serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 114%;
            letter-spacing: 0.2px;
            color: #7B8794 !important;
            left: 72px;
            top: 31px;
        }

        .locations {
            position: relative;
            margin-bottom: 32px;
        }

        .img-location {
            position: absolute;
            left: 0px;
            top: 0px;
        }

    </style>
</head>

<body>
    <header>
        <a href="{{route('dashboard')}}" method="post"><img src="sprites/default.png" alt="" style="position: absolute; width: 32px; height: 32px; left: 16px; bottom: 12px;"></a>
        <h3 style="position: absolute; left: calc(50% - 129px/2); bottom: 16px;">Lokasi Dealer</h3>
    </header>
    <div class="middle-container">
        <a href="{{route('book.deal')}}" method="post">
        <div class="locations">
            <div>
                <img class="img-location" src="sprites/Small.png" alt="" style="width: 56px; height: 56px;">
            </div>
            <div>
                <h4 class="store-name">MotoB Lowokwaru</h4>
                <h4 class="store-dist">0.5 km</h4>
            </div>
            <div>
                <h4 class="store-status">Buka</h4>
            </div>
        </div>
        </a>
    </div>
    <footer>
        <div class="mid-search">
            <img src="sprites/active.png" alt="" style="width: 24px; height: 24px;">
            <h4 style="font-family: 'Mulish'; font-style: normal; font-weight: 400; font-size: 14px; line-height: 100%;">Cari</h4>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>