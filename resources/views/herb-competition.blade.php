<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Herbs Competition</title>
        <meta name="description" content="Get involved with our herb competition! Win fantastic cash prizes by donating herbs to our
        raiding effort">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-attachment: fixed;
                background-color: #636b6f;
                background-image: url('images/bg.jpg');
                background-position: top;
                background-repeat: no-repeat;
                color: #fff;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            strong {
                font-weight: 600;
            }

            /*.flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }*/

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                padding: 0 20px;
            }

            .title {
                font-size: 64px;
                text-align: center;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            a {
                color: #f0f0f0;
            }
        </style>

        <!-- Scripts -->
        <script type="text/javascript" src="//wow.zamimg.com/widgets/power.js"></script><script>var wowhead_tooltips = { "colorlinks": true, "iconizelinks": true, "renamelinks": true }</script>
    </head>
    <body>
        <div class="flex-center position-ref">
            <div class="content">
                <h1 class="title m-b-md">
                    Herb Competition
                </h1>

                <p>Between {{ $now }} and {{ $until }} we're running a herbs competition! Gather as many herbs as you can and deposit them into the
                    second bank tab (it's called 'Herbs' too).</p>

                <h2>Why are we doing this?</h2>

                <p>We need herbs to turn into flasks, potions and vantus runes. This way, each member will get free
                    access to these items on raid nights.</p>

                <div class="prize">
                    <h2>Prizes</h2>
                    <p>Cash prizes available for the largest contributor of each herb, with a bonus prize for highest overall contributor.</p>
                    <p><em>Total prize fund: 20,000 gold</em></p>
                    <h3>Individual Prizes</h3>
                    <p><strong>Highest <a href="#" rel="item=124101">Aethril</a> contributor:</strong> 2,000 gold</p>
                    <p><strong>Highest <a href="#" rel="item=124102">Dreamleaf</a> contributor:</strong> 3,000 gold</p>
                    <p><strong>Highest <a href="#" rel="item=124104">Fjarnskaggl</a> contrbutor:</strong> 3,000 gold</p>
                    <p><strong>Highest <a href="#" rel="item=124103">Foxflower</a> contributor:</strong> 3,000 gold</p>
                    <p><strong>Highest <a href="#" rel="item=124105">Starlight Rose</a> contributor:</strong> 6,000 gold</p>
                    <p><strong>Highest overall contributor:</strong> 3,000 gold</p>
                </div><!-- /.prize -->

                <h2>Anything else?</h2>

                <p>Yes, get herbing!</p>

                <div class="rules">
                    <h2>Rules</h2>
                    <ol>
                        <li>Only herbs from the Broken Isles count:
                            <ol type="a">
                                <li><a href="#" rel="item=124101">Aethril</a></li>
                                <li><a href="#" rel="item=124102">Dreamleaf</a></li>
                                <li><a href="#" rel="item=124104">Fjarnskaggl</a></li>
                                <li><a href="#" rel="item=124103">Foxflower</a></li>
                                <li><a href="#" rel="item=124105">Starlight Rose</a></li>
                                <li><a href="#" rel="item=128304">Yseralline Seed</a></li>
                            </ol>
                        </li>
                        <li>For the purposes of calculating highest overall contributor:
                            <ol type="a">
                                <li>Each <a href="#" rel="item=124105">Starlight Rose</a> is weighted as 3x other herbs</li>
                                <li>Each <a href="#" rel="item=128304">Yseralline Seed</a> is weighted as 1/10th of other herbs</li>
                            </ol>
                        </li>
                        <li>Deposits outside the above times will not be counted</li>
                        <li>Winner will be announced on {{ $winner }} via the Message of the Day and in the <a href="https://www.facebook.com/groups/1422789254626118/">Facebook group</a></li>
                    </ol>
                </div><!-- /.rules -->
            </div>
        </div>
    </body>
</html>
