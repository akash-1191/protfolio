<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Information</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body class="bg-black">


<section class="py-10 sm:py-16 lg:py-20">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap-reverse justify-center items-center md:space-x-12 md:gap-52">
            <div class="bg-gray-400 rounded-lg w-full sm:w-3/4 md:w-1/2 lg:w-1/3 px-5 py-5">
                <div class="rounded-lg w-full px-5 py-5">
                    <div class="text-center capitalize leading-normal w-full">
                        <h1 class="text-transparent bg-gradient-to-r from-blue-600 to-red-600 bg-clip-text hover:from-red-600 hover:to-blue-600 transition duration-500 md:text-5xl text-4xl">Contact me</h1>
                    </div>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="pt-10 space-y-4">
                            <div>
                                <input type="text" class="bg-black text-white w-full h-14 px-4 text-xl border-2 rounded-md outline-none border-gray-800 hover:border-gray-900" name="name" id="name" placeholder="First Name">
                            </div>
                            <div>
                                <input type="email" class="bg-black text-white w-full h-14 px-4 text-xl border-2 rounded-md outline-none border-gray-800 hover:border-gray-900" name="email" id="email" placeholder="Enter Email">
                            </div>
                            <div>
                                <input type="text" class="bg-black text-white w-full h-14 px-4 text-xl border-2 rounded-md outline-none border-gray-800 hover:border-gray-900" name="contact_number" id="contact_number" placeholder="Contact Number">
                            </div>
                            <div>
                                <textarea name="message" rows="5" class="bg-black px-4 py-2 text-white text-xl border-2 rounded-md outline-none border-gray-800 hover:border-gray-900 w-full" placeholder="Write Message"></textarea>
                            </div>
                        </div>
                        <div class="pt-4">
                            <div class="flex justify-start">
                                <button type="submit" name="submit" class="bg-gradient-to-r from-blue-500 to-black hover:bg-gradient-to-l p-3 rounded-full text-xl w-full">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="w-full sm:w-3/4 md:w-1/2 lg:w-1/3">
                <div class="max-w-2xl w-full mx-auto">
                    <div class="flex flex-col space-y-5 py-10 md:py-16 lg:py-20">
                        <div class="flex items-center w-full py-5">
                            <a href="tel:6355923492" class="rounded-full w-18 h-16 bg-gradient-to-br from-blue-500 to-gray-900 hover:bg-gradient-to-bl hover:scale-110 transition duration-500 p-4">
                                <i class="fa-solid fa-phone-volume text-white text-3xl"></i>
                            </a>
                            <div class="ml-5">
                                <p class="text-lg text-white">Phone</p>
                                <p class="text-xl text-white font-bold">6355923492</p>
                            </div>
                        </div>
                        <div class="flex items-center w-full py-5">
                            <a href="mailto:mauryaakash0198@gmail.com" class="rounded-full w-18 h-16 bg-gradient-to-br from-blue-500 to-gray-900 hover:bg-gradient-to-bl hover:scale-110 transition duration-500 p-4">
                                <i class="fa-solid fa-envelope text-white text-3xl"></i>
                            </a>
                            <div class="ml-5">
                                <p class="text-lg text-white">Email</p>
                                <p class="text-xl text-white font-bold">mauryaakash0198@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex items-center w-full py-5">
                            <a href="https://www.google.com/maps/place/Mahadev+Nagar+Pandesara/@21.1551426,72.8208662,17z/data=!3m1!4b1!4m6!3m5!1s0x3be04f8d7862b29f:0x121cff71a555d13f!8m2!3d21.1551376!4d72.8234411!16s%2Fg%2F11gxvspwfl?entry=ttu" target="_blank" class="rounded-full w-18 h-16 bg-gradient-to-br from-blue-500 to-gray-900 hover:bg-gradient-to-bl hover:scale-110 transition duration-500 p-5">
                                <i class="fa-solid fa-location-dot text-white text-3xl"></i>
                            </a>
                            <div class="ml-5">
                                <p class="text-lg text-white">Location</p>
                                <p class="text-xl text-white font-bold capitalize">Pandesara Surat, 394221</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>

</html>