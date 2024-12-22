<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sundown</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="shortcut icon" href="/icon.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">



</head>

<body>
    <div id="loader" class="loader h-full w-full bg-black z-[99999] absolute top-0  flex items-center justify-center">
        <h1 class="text-transparent text-6xl bg-gradient-to-l from-orange-600 to-yellow-300 bg-clip-text absolute">ENVIRONMENTS</h1>
        <h1 class="text-transparent text-6xl bg-gradient-to-l from-orange-600 to-yellow-300 bg-clip-text absolute">EXPERIENCES</h1>
        <h1 class="text-transparent text-6xl bg-gradient-to-l from-orange-600 to-yellow-300 bg-clip-text absolute">CONTENT</h1>
    </div>
    <div id="main" class="min-h-[100vh] bg-[#efeae3] px-8 py-8 overflow-hidden">
        <div class="flex items-center justify-center  w-full">
            <nav class="flex items-center justify-between w-full">
                <img src="https://uploads-ssl.webflow.com/64d3dd9edfb41666c35b15b7/64d3dd9edfb41666c35b15c2_Sundown%20logo.svg" alt="">
                <div class="flex items-center justify-center gap-4 relative ">
                    <a href="#" class="relative navbutton group overflow-hidden rounded-full">
                        <button class="text-lg font-[500] border border-[#b7b3ae] rounded-full px-5 py-2 z-10 relative group-hover:text-white overflow-hidden  group-hover:border-black">Work</button>
                    </a>
                    <a href="#" class="relative navbutton group overflow-hidden rounded-full">
                        <button class="text-lg font-[500] border border-[#b7b3ae] rounded-full px-5 py-2 z-10 relative group-hover:text-white overflow-hidden group-hover:border-black">Studeo</button>
                    </a> <a href="#" class="relative navbutton group overflow-hidden rounded-full">
                        <button class="text-lg font-[500] border border-[#b7b3ae] rounded-full px-5 py-2 z-10 relative group-hover:text-white overflow-hidden group-hover:border-black">Contact</button>
                    </a>
                </div>
            </nav>

        </div>
        <div class="flex w-full h-[69.5vh] items-end  pb-8  justify-between  border-b border-[#b7b3ae]">
            <h2 class="text-3xl">Sundown is a multi-disciplinary<br>studio focused on creating<br> unique,end-to-end experiences<br>and environments.</h2>
            <h1 class="text-[23vh] leading-[19vh] text-right">SPACES<br>
                THAT<br>
                INSPIRE
            </h1>
        </div>
        <div class="video relative flex items-center justify-center w-full">
            <video src="/video.mp4" autoplay muted loop class="w-full h-full rounded-[30px] mt-16 z-[999]"></video>
            <div class="w-[70%] bg-[#fe330a] h-[70vh] absolute top-[-10%] right-[-20%] rounded-tl-full rounded-bl-full blur-[20px] "></div>
            <div class="w-[30%] bg-[#fe330a] h-[50vh] absolute top-[-10%] right-[10%] rounded-full animate-circle blur-[20px] bg-gradient-to-r from-[#fe330a] to-[#f66810]"></div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>

    <script src="script.js"></script>
</body>

</html>