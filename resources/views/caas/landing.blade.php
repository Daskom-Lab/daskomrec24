<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DLOR 2024</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link rel="icon" type="DLOR" href="{{ asset('/assets/caas/landing/LogoDlor24.jpg') }}" />
</head>
<body class="bg-welcome-dungeon bg-cover bg-fixed bg-no-repeat bg-center cursor-sword overflow-hidden">
    <!-- desc DLOR 2024 start --> 
    <div class="desc-screen relative flex flex-wrap items-center justify-center w-screen h-screen bottom-1 left-0 right-0" onload="show()" onclick="hide()">
        <div class="text-center absolute overflow-hidden">
            <img src="{{ asset('/assets/caas/homepage/paperdescdlor24.png') }}" alt="" class="h-[470px] w-[390px]">
            <div id="descdlor24" class="absolute deks-dlor text-start text-base font-vinque top-1/4 left-1/4 transform -translate-x-1/4 -translate-y-1/4 text-black bottom-0 w-full h-full pt-8 pb-12 pl-12 pr-11">
                <h3 id="h3-text" class="absolute deks-dlor-botom text-center text-[19px] bottom-[58px] left-1/2 transform -translate-x-1/2 -translate-y-20 text-black opacity-0">
                    <span id="h3-part1" class="h3-part1 font-ringbearer">Fight For Glory</span><br>
                    <span id="h3-part2" class="h3-part2 font-ringbearer">Create Your Story</span>
                  </h3>
            </div>
            <img src="{{ asset('/assets/caas/homepage/stamp.png') }}" alt="" id="stamp" class="absolute icon-dlor24 stamp bottom-[58px] right-[42px] h-[75px] w-auto opacity-0">
            <p class="text-white text-xl text-opacity-50 tracking-wide font-enchanted animate-pulse mt-1">Click Anything To Continue</p>
        </div>
    </div>
    <!-- desc DLOR 2024 end -->

    <!-- homepage start -->
    <div class="main container mx-auto my-auto mb-4">
        <div class="flex flex-row justify-between mt-2 mr-3 ml-3 xl:mt-4 xl:ml-6 xl:mr-6">
            <div class="mt-2 sm:mt-2 lg:mt-3 sm:ml-2">
                <a href="https://daskomlab.com/" target="_blank">
                    <img src="{{ asset('/assets/caas/homepage/DASKOM_White.svg') }}" alt="DASKOM" class="mt-1.5 ml-3 w-10 sm:w-8 lg:w-12"/>
                </a>
            </div>
            <div>
                <img src="{{ asset('/assets/caas/homepage/DLOR_2024.svg') }}" class="w-16 lg:w-24 sm:w-12"/>
            </div>
        </div>
        <br>
        <div class=" text-title font-bold items-center text-center my-1 mx-3">
            <p class="mb-4  text-4xl lg:text-5xl font-ringbearer text-[#A37651] leading-normal">Finding The Precious Treasure</p>
        </div>

        <a id="loginbutton" href="{{ route('caas.login') }}" class="text-black text-xl lg:text-3xl font-ringbearer sm:text-xl md:text-3xl">
        <div class="static mt-[300px] bottom-1 flex items-center justify-center">
            <img src="{{ asset('/assets/caas/homepage/loginbutton.png') }}" alt="" class="absolute w-1/4 lg:w-44">
            <div class="absolute text-center">
                Start
            </div>
        </div> 
        </a>
    </div> 

    <!-- footer start -->
    @include('caas.partials.footer')
    <!-- footer end -->

    <!-- homepage end -->
    <script>
        function show() {
        document.querySelector(".desc-screen").style.display = "block";
        document.querySelector(".main").style.display = "none";
        }

        function hide() {
        document.querySelector(".desc-screen").style.display = "none";
        document.querySelector(".main").style.display = "block";
        }

        (function() {
        var script = document.createElement('script');
        script.src = 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js';
        script.async = true;
        document.head.appendChild(script);
        })();

        function startAnimation() {
            anime.timeline({loop: false})
            .add({
                targets: '.h3-part1, .h3-part2, .stamp',
                scale: [7,1],
                opacity: [0,1],
                easing: "easeOutCirc",
                duration: 900,
            delay: (el, i) => 1600 * i
            })
            .add({
                targets: '#h3-text, #stamp',
                opacity: 1,
                duration: 900,
                easing: "easeOutExpo",
                delay: 1600
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
        var i = 0;
        var txt = 'From the sea to the highest mountain, we strive towards the same goal.\n Heed the warning, Adventurer, no preparation is too long.\n Use every skill you have learned, every experience you have.\n For no obstacle would come without consequences.\n Push through, Adventurer, for no matter how dangerous the dungeons are, there is light at the end of it all.';
        var speed = 50;

        function typeWriter() {
        if (i < txt.length) {
            if (txt[i] === '\n') {
            document.getElementById("descdlor24").innerHTML += '<br>';
            i++;
            } else {
            document.getElementById("descdlor24").innerHTML += txt.charAt(i);
            document.getElementById("descdlor24").style.textAlign = "justify";
            }

            i++;
            setTimeout(typeWriter, speed);
        } 
        else {
            // The typewriter has completed, now display the <h3>
            setTimeout(function() {
            document.getElementById("h3-text").classList.add('opacity-100');
            startAnimation();
            }, 1000);
            
            setTimeout(function() {
            document.getElementById("stamp").classList.add('opacity-100');
            startAnimation();
            }, 1000);
        }
        }
        typeWriter();
        });
    </script>
</body>
</html>