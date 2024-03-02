<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Venture the Deep Within</title>
    <link rel="stylesheet" href="/public/css/output.css" />
    <link rel="icon" type="DLOR" href="/public/assets/homepage/LogoDlor24.jpg" />
</head>
<body class="bg-dark-dungeon bg-cover bg-fixed bg-no-repeat bg-center cursor-sword">
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

    <!-- changepass start -->
    <div class="container relative max-w-2xl mx-auto py-1">
        <div class="mt-[50px] flex justify-center">
            <img src="/public/assets/caas/loginpaper.png" alt="" class="h-[460px] w-[350px]">
        </div>
        <div class="absolute top-0 left-0 right-0 text-center mt-[120px] z-10">
            <div class="text-black font-ringbearer -mb-16">
                <h1 class="text-[28px]">change password</h1> 
                <P class="text-sm">password minimal 8 karakter</P>
            </div>
            <form class="flex flex-col justify-around items-center h-3/5" action="/loginCaasPost" method="POST">
                <div class="flex flex-col items-center justify-between font-ringbearer h-60 font-bold">
                    <input type="password" placeholder="new password" name="newpassword" id="newpassword" class="mt-[120px] w-60 h-16 text-graymid border-b-gray-700 border-b-2 bg-transparent focus:outline-none invalid:border-b-gray-500 text-sm text-center placeholder:text-[#514D4D] transition-all duration-300 ease-in-out" required/>  

                    <input type="password" placeholder="confirm new password" name="newpassword" id="newpassword" class="mt-16 w-60 h-16 text-graymid border-b-gray-700 border-b-2 bg-transparent focus:outline-none invalid:border-b-gray-500 text-sm text-center placeholder:text-[#514D4D] transition-all duration-300 ease-in-out" required/>

                    <button type="submit" class="mt-12 w-44 h-28 rounded shadow-semi-sm active:shadow-in-semi-sm active:shadow-bright-sun duration-200">
                        <h1 class="font-ringbearer flex justify-center items-center text-center text-lg h-[45px]">change password</h1>
                    </button>
                </div>
            </form>
        </div> 
    </div>
    <!-- changepass end -->

    <!-- footer start -->
    <footer class="fixed bottom-0 left-0 right-0 mt-3 mb-3 text-center">
        <h1 class="lg:text-[20px] font-ringbearer text-[#A37651] text-stroke sm:text-[15px] md:text-[15px]">#Venture The Deep Within
    </footer> 
    <!-- footer end -->
    <script src="/public/js/sidebar.js"></script>
</body>
</html>