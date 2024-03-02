<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venture the Deep Within</title>
    <link rel="stylesheet" href="/public/css/output.css" />
    <link rel="icon" type="DLOR" href="/public/assets/homepage/LogoDlor24.jpg" />
</head>
<body class="bg-welcome-dungeon bg-cover bg-fixed bg-no-repeat bg-center cursor-sword">
    <!-- login start -->
    <div class="container relative max-w-2xl mx-auto py-1">
        <div class="mt-[50px] flex justify-center">
            <img src="/public/assets/caas/loginpaper.png" alt="" class="h-[460px] w-[350px]">
        </div>
        <div class="absolute top-0 left-0 right-0 text-center mt-[110px] z-10">
            <div class="text-black font-ringbearer -mb-[80px]">
                <h1 class="text-[30px] font-bold">welcome <br>adventurer</h1> 
            </div>
            <form class="flex flex-col justify-around items-center h-3/5" action="/html/dashboardcaas.html" method="GET">
                <div class="flex flex-col items-center justify-between font-ringbearer h-60 font-bold">
                    <input type="text" placeholder="enter your nim" name="nim" id="nim"  value="ALLXFYN"
                        class="mt-32 w-60 h-16 text-[#514D4D] border-b-gray-700 border-b-2 bg-transparent focus:outline-none invalid:border-b-gray-500 text-sm text-center placeholder:text-[#514D4D] transition-all duration-300 ease-in-out" required />
                                
                    <input placeholder="enter your password" name="password" id="password" type="password"  valcue="allxfyn"
                        class="mt-16 w-60 h-16 text-[#514D4D] border-b-gray-700 border-b-2 bg-transparent focus:outline-none invalid:border-b-gray-500 text-sm text-center placeholder:text-[#514D4D] transition-all duration-300 ease-in-out" required />
                                
                    <button type="submit"
                        class="mt-10 w-[160px] h-28 shadow-semi-sm active:shadow-in-semi-sm active:shadow-bright-sun duration-200">
                            <h1 class="font-ringbearer font-bold flex justify-center items-center text-center text-[22px] h-[48px]">
                                l o g i n
                            </h1>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- login ends -->
</body>
</html>