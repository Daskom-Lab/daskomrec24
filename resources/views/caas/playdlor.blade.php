<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Venture the Deep Within</title>
    <link rel="stylesheet" href="/public/css/output.css" />
    <link rel="icon" type="DLOR" href="/public/assets/homepage/LogoDlor24.jpg" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</head>
<body class="bg-welcome-dungeon bg-cover bg-fixed bg-no-repeat bg-center cursor-sword overflow-hidden">
    <!-- desc DLOR 2024 start --> 
    <div class="desc-screen relative flex flex-wrap items-center justify-center w-screen h-screen bottom-1 left-0 right-0" onload="show()" onclick="hide()">
        <div class="text-center absolute overflow-hidden">
            <img src="/public/assets/homepage/paperdescdlor24.png" alt="" class="h-[470px] w-[390px]">
            <div id="descdlor24" class="absolute deks-dlor text-start text-base font-vinque top-1/4 left-1/4 transform -translate-x-1/4 -translate-y-1/4 text-black bottom-0 w-full h-full pt-8 pb-12 pl-12 pr-11">
                <h3 id="h3-text" class="absolute deks-dlor-botom text-center text-[19px] bottom-[58px] left-1/2 transform -translate-x-1/2 -translate-y-20 text-black opacity-0">
                    <span id="h3-part1" class="h3-part1 font-ringbearer">Fight For Glory</span><br>
                    <span id="h3-part2" class="h3-part2 font-ringbearer">Create Your Story</span>
                  </h3>
            </div>
            <img src="/public/assets/homepage/stamp.png" alt="" class="absolute icon-dlor24 bottom-[58px] right-[42px] stamp h-[75px] w-auto opacity-0">
            <p class="text-white text-xl text-opacity-50 tracking-wide font-enchanted animate-pulse mt-1">Click Anything To Continue</p>
        </div>
    </div>
    <!-- desc DLOR 2024 end -->

    <!-- homepage start -->
    <div class="main container mx-auto my-auto mb-4">
        <div class="flex flex-row justify-between mt-2 mr-3 ml-3 xl:mt-4 xl:ml-6 xl:mr-6">
            <div class="mt-2 sm:mt-2 lg:mt-3 sm:ml-2">
                <a href="https://daskomlab.com/" target="_blank">
                    <img src="/public/assets/homepage/DASKOM_White.svg" alt="DASKOM" class="mt-1.5 ml-3 w-10 sm:w-8 lg:w-12"/>
                </a>
            </div>
            <div>
                <img src="/public/assets/homepage/DLOR_2024.svg" class="w-16 lg:w-24 sm:w-12"/>
            </div>
        </div>
        <br>
        <div class=" text-title font-bold items-center text-center my-1 mx-3">
            <p class="mb-4  text-4xl lg:text-5xl font-ringbearer text-[#A37651] leading-normal">Finding The Precious Treasure</p>
        </div>

        <a id="loginbutton" href="login.html" class="text-black text-xl lg:text-3xl font-ringbearer sm:text-xl md:text-3xl">
        <div class="static mt-[300px] bottom-1 flex items-center justify-center">
            <img src="/public/assets/homepage/loginbutton.png" alt="" class="absolute w-1/4 lg:w-44">
            <div class="absolute text-center">
                start
            </div>
        </div> 
        </a>
    </div> 

    <!-- footer start -->
    <footer class="fixed bottom-0 left-0 right-0 mt-3 mb-3 text-center">
        <h1 class="lg:text-[20px] font-ringbearer text-[#A37651] text-stroke sm:text-[15px] md:text-[15px]">#Venture The Deep Within
    </footer>
    <!-- footer end -->

    <!-- homepage end -->
    <script src="/public/js/welcoming.js"></script>
</body>
</html>
