<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venture the Deep Within</title>
    <link rel="stylesheet" href="/public/css/output.css" />
    <link rel="icon" type="DLOR" href="/public/assets/homepage/LogoDlor24.jpg" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" />
</head>
<body class="bg-dark-dungeon bg-cover font-ringbearer bg-fixed bg-no-repeat bg-center cursor-sword overflow-y-auto scrollbar-thin overflow-x-hidden">
     <!-- header start -->
   <div class="container flex justify-between">
    <!-- navbar start -->
    <div class="sidebar fixed left-0 right-6 h-full w-[40px] bg-hijau-gelap bg-opacity-70 pr-5 pt-3 z-50 transition-all ease-in-out duration-700">
        <div class="flex relative items-center">
            <i class="absolute top-2 -right-4 cursor-pointer text-md" id="btn">
                <img src="/public/assets/sidebar/navbar.png" alt="" class="h-[25px] w-[35px]"/>
              </i>
        </div>
        <ul class="profile text-fivedary font-ringbearer mt-[40px] ml-3 h-full">
            <div class="boxsidebar pb-4 m-2 text-[16px] opacity-0 pointer-events-none">
                <div class="mx-2 mt-2  font-semibold">
                    <h1>Account</h1> 
                </div>

                <li class="relative mt-0 p-1 list-none">
                    <a href="changepassCaas.html" class="border-2 border-secondary hover:border-fivedary justify-center text-secondary bg-gray-dark flex w-[90%] h-9  rounded-full items-center no-underline shadow-md shadow-gray-dark hover:bg-transparent hover:shadow-green hover:text-fivedary hover:font-semibold">
                        <span class="text-[12px] whitespace-nowrap">change password</span>
                    </a>
                </li>
                <li class="relative mt-2 p-1 list-none">
                    <a href="dashboardcaas.html" class="border-2 border-secondary hover:border-fivedary justify-center text-secondary bg-gray-dark flex w-[90%] h-9 rounded-full items-center no-underline shadow-md shadow-gray-dark hover:bg-transparent hover:shadow-green hover:text-fivedary hover:font-semibold">
                        <span class="text-[12px] whitespace-nowrap">profile</span>
                    </a>
                </li>

                <div class="mx-2 mt-3 font-semibold">
                    <h1>Contact</h1>
                </div>

                <li class="relative mt-0 p-1 list-none">
                    <a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=450vflzh" class="border-2 border-secondary hover:border-fivedary justify-center text-secondary bg-gray-dark flex w-[90%] h-9 rounded-full items-center no-underline shadow-md shadow-gray-dark hover:bg-transparent hover:shadow-green hover:text-fivedary hover:font-semibold">
                        <span class="text-[12px] whitespace-nowrap">oa line</span>
                    </a>
                </li>
                <li class="relative mt-2 p-1 list-none">
                    <a href="theAssistant.html" class="border-2 border-secondary hover:border-fivedary justify-center text-secondary bg-gray-dark flex w-[90%] h-9 rounded-full items-center no-underline shadow-md shadow-gray-dark hover:bg-transparent hover:shadow-green hover:text-fivedary hover:font-semibold">
                        <span class="text-[12px] whitespace-nowrap">assistant</span>
                    </a>
                </li>

                <div class="mx-2 mt-3  font-semibold">
                    <h1>Recruitment</h1>
                </div>

                <li class="relative mt-0 p-1 list-none">
                    <a href="kelulusan.html" class="border-2 border-secondary hover:border-fivedary justify-center text-secondary bg-gray-dark flex w-[90%] h-9 rounded-full items-center no-underline shadow-md shadow-gray-dark hover:bg-transparent hover:shadow-green hover:text-fivedary hover:font-semibold">
                        <span class="text-[12px] whitespace-nowrap">graduation</span>
                    </a>
                </li>
                <li class="relative mt-2 p-1 list-none">
                    <a href="jadwal.html" class="border-2 border-secondary hover:border-fivedary justify-center text-secondary bg-gray-dark flex w-[90%] h-9 rounded-full items-center no-underline shadow-md shadow-gray-dark hover:bg-transparent hover:shadow-green hover:text-fivedary hover:font-semibold">
                        <span class="text-[12px] whitespace-nowrap">schedule</span>
                    </a>
                </li>
                <li class="relative mt-2 p-1 list-none">
                    <a href="chooseroleCaas.html" class="border-2 border-secondary hover:border-fivedary justify-center text-secondary bg-gray-dark flex w-[90%] h-9 rounded-full items-center no-underline shadow-md shadow-gray-dark hover:bg-transparent hover:shadow-green hover:text-fivedary hover:font-semibold">
                        <span class="text-[12px] whitespace-nowrap">role</span>
                    </a>
                </li>

                <li class="relative mt-2 p-1 list-none">
                    <a href="homepage.html" class="border-2 border-secondary hover:border-fivedary justify-center text-secondary bg-gray-dark flex w-[90%] h-9 rounded-full items-center no-underline shadow-md shadow-gray-dark hover:bg-transparent hover:shadow-merah hover:text-fivedary hover:font-semibold">
                        <span class="text-[12px] whitespace-nowrap">log out</span>
                    </a>
                </li>
            </div>
        </ul>
    </div>
    <!-- navbar ends -->
    </div>
    <!-- header ends -->

    <!-- cardrole start -->
    <div class="container mx-auto max-w-4xl py-1 mb-2 bg-center">
        <div class="flex flex-row justify-center mt-2 mr-3 ml-3">
            <div class="text-title items-center text-center m-1">
                <h1 class="font-bold text-[30px] font-ringbearer text-sixdary">Choose Role</h1>
                <h4 class="font-bold text-[28px] font-ringbearer text-sixdary">dlor 2024</h4>
            </div>
        </div>
        <div class="owl-carousel owl-theme justify-evenly mx-auto top-[15px] custom-card">  

            <div class="items-center justify-center">
                <div class="relative">
                  <img src="/public/assets/caas/archer.png" alt="" class="gambar-role h-[230px] w-[300px] px-5 object-cover">
                  <div class="absolute text-end text-quota choose-role left-0">
                    <span class="text-sm font-bold z-10">quota : 10</span>
                  </div>
                  <div class="fixed choose-role bottom-0 text-center left-0 right-0">
                    <form action="https://google.com" method="get">
                      <button type="submit" class="drop-shadow-2xl shadow-inner h-10 w-1/2 text-base font-bold bg-[#D2C2B4] mb-0 hover:bg-[#f8e6d4]">P I L I H</button>
                    </form>
                  </div>
                </div>
            </div>
            <div class="items-center justify-center">
                <div class="relative">
                  <img src="/public/assets/caas/blacksmith.png" alt="" class="h-[230px] w-[300px] px-5 object-cover">
                  <div class="absolute text-end text-quota choose-role left-0">
                    <span class="text-sm font-bold z-10">quota : 10</span>
                  </div>
                  <div class="fixed choose-role bottom-0 text-center left-0 right-0">
                    <form action="https://google.com" method="get">
                      <button type="submit" class="drop-shadow-2xl shadow-inner h-10 w-1/2 text-base font-bold bg-[#D2C2B4] mb-0 hover:bg-[#f8e6d4]">P I L I H</button>
                    </form>
                  </div>
                </div>
            </div>
            <div class="items-center justify-center">
                <div class="relative">
                  <img src="/public/assets/caas/mage.png" alt="" class="h-[230px] w-[300px] px-5 object-cover">
                  <div class="absolute text-end text-quota choose-role left-0">
                    <span class="text-sm font-bold z-10">quota : 10</span>
                  </div>
                  <div class="fixed choose-role bottom-0 text-center left-0 right-0">
                    <form action="https://google.com" method="get">
                      <button type="submit" class="drop-shadow-2xl shadow-inner h-10 w-1/2 text-base font-bold bg-[#D2C2B4] mb-0 hover:bg-[#f8e6d4]">P I L I H</button>
                    </form>
                  </div>
                </div>
            </div>
            <div class="items-center justify-center">
                <div class="relative">
                  <img src="/public/assets/caas/paladin.png" alt="" class="h-[230px] w-[300px] px-5 object-cover">
                  <div class="absolute text-end text-quota choose-role left-0">
                    <span class="text-sm font-bold z-10">quota : 10</span>
                  </div>
                  <div class="fixed choose-role bottom-0 text-center left-0 right-0">
                    <form action="https://google.com" method="get">
                      <button type="submit" class="drop-shadow-2xl shadow-inner h-10 w-1/2 text-base font-bold bg-[#D2C2B4] mb-0 hover:bg-[#f8e6d4]">P I L I H</button>
                    </form>
                  </div>
                </div>
            </div>
            <div class="items-center justify-center">
                <div class="relative">
                  <img src="/public/assets/caas/tactician.png" alt="" class="h-[230px] w-[300px] px-5 object-cover">
                  <div class="absolute text-end text-quota choose-role left-0">
                    <span class="text-sm font-bold z-10">quota : 10</span>
                  </div>
                  <div class="fixed choose-role bottom-0 text-center left-0 right-0">
                    <form action="https://google.com" method="get">
                      <button type="submit" class="drop-shadow-2xl shadow-inner h-10 w-1/2 text-base font-bold bg-[#D2C2B4] mb-0 hover:bg-[#f8e6d4]">P I L I H</button>
                    </form>
                  </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="flex justify-center mcard">
        <button class="owl-prev text-fourdary hover:text-white focus:outline-none rounded-full p-2 text-center inline-flex items-center hover:bg-fourdary mr-3" type="button">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
        </button>
        <button class="owl-next text-fourdary hover:text-white focus:outline-none rounded-full p-2 text-center inline-flex items-center hover:bg-fourdary" type="button">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </button>
    </div>
    <!-- cardrole end -->

    <!-- footer start -->
    <footer class="fixed bottom-0 left-0 right-0 mt-3 mb-3 text-center z-10">
        <h1 class="lg:text-[20px] font-ringbearer text-[#A37651] text-stroke sm:text-[15px] md:text-[15px]">#Venture The Deep Within
    </footer>
    <!-- footer ends -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="/public/js/slidercard.js"></script>
    <script src="/public/js/sidebar.js"></script>
</body>
</html>