<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <nav class=" bg-[#1f1f1f1]">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">

                <span class="self-center text-3xl font-bold whitespace-nowrap text-white">Protfolio</span>
            </a>
            <button id="menu-toggle" data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full bg-[#1f1f1f1] md:block md:w-auto" id="navbar-solid-bg">
                <ul class="flex flex-col font-medium rounded-lg   md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent  md:dark:bg-transparent">
                    <li>
                        <a href="#" class="block py-2 px-3 md:p-0 text-white text-xl  md:dark:bg-transparent" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 md:p-0 text-white text-xl">About</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 md:p-0 text-white text-xl">Skills</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 md:p-0 text-white text-xl">Project</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 md:p-0 text-white text-xl">Contact</a>
                    </li>
                    <div class="text-xl  text-white">
                        <button class=" py-2 px-3 md:p-0 md:ml-32 ml-0 mr-0">Git link</button>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <script src="./js/script.js"></script>
</body>

</html>