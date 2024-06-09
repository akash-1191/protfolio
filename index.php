<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title> AM | Portfolio</title>
  <link rel="icon" href="./image/Amtab_logo.jpeg">
  <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
  <meta name="author" content="Vincent Garreau" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" media="screen" href="./css/demo.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="overflow-x-hidden">

  <!-- =============================== -->
  <!-- code for the loding page animation -->
  <!-- =================================== -->
  <div id="preloader" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-75 z-20 transition duration-1000 ease-in-out transform translate-y-0 opacity-100">
    <img src="./image/loadingpagenew.gif" alt="Photography GIF" class="w-full h-full rounded-lg">
</div>


  <!-- =============================== -->
  <!-- End code for the loding page animation -->
  <!-- =================================== -->
  <nav class="bg-[#1f1f1f] sticky top-0 z-10">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="#home" class="flex items-center space-x-3 rtl:space-x-reverse">
        <span class="self-center text-3xl ml-10 font-bold whitespace-nowrap text-white">
          <img src="./image/AM_logo.png" class="w-20 h-12 object-cover" alt="logo">
        </span>
      </a>
      <button id="menu-toggle" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
        <ul class="flex flex-col font-medium rounded-lg md:flex-row md:space-x-5 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-transparent md:dark:bg-transparent">
          <li>
            <a href="#home" class="block mt-2 py-2 px-3 md:p-0 text-white text-xl" aria-current="page">Home</a>
          </li>
          <li>
            <a href="#about" class="block mt-2 py-2 px-3 md:p-0 text-white text-xl">About</a>
          </li>
          <li>
            <a href="#skills" class="block mt-2 py-2 px-3 md:p-0 text-white text-xl">Skills</a>
          </li>
          <li>
            <a href="#ressume" class="block mt-2 py-2 px-3 md:p-0 text-white text-xl">Resume</a>
          </li>
          <li>
            <a href="#projects" class="block mt-2 py-2 px-3 md:p-0 text-white text-xl">Projects</a>
          </li>
          <li>
            <a href="#certificate" class="block mt-2 py-2 px-3 md:p-0 text-white text-xl">Certificate</a>
          </li>
          <li>
            <a href="https://github.com/akash-1191" target="_blank" class="px-3 md:p-0 text-white text-lg">
              <button class="btn-grad border flex justify-center border-red-500 p-2 -mt-1 rounded-md bg-red-500 hover:bg-red-600">
                <svg width="20" height="20" class="mr-2" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin meet">
                  <path d="M251.172 116.594L139.4 4.828c-6.433-6.437-16.873-6.437-23.314 0l-23.21 23.21 29.443 29.443c6.842-2.312 14.688-.761 20.142 4.693 5.48 5.489 7.02 13.402 4.652 20.266l28.375 28.376c6.865-2.365 14.786-.835 20.269 4.657 7.663 7.66 7.663 20.075 0 27.74-7.665 7.666-20.08 7.666-27.749 0-5.764-5.77-7.188-14.235-4.27-21.336l-26.462-26.462-.003 69.637a19.82 19.82 0 0 1 5.188 3.71c7.663 7.66 7.663 20.076 0 27.747-7.665 7.662-20.086 7.662-27.74 0-7.663-7.671-7.663-20.086 0-27.746a19.654 19.654 0 0 1 6.421-4.281V94.196a19.378 19.378 0 0 1-6.421-4.281c-5.806-5.798-7.202-14.317-4.227-21.446L81.47 39.442l-76.64 76.635c-6.44 6.443-6.44 16.884 0 23.322l111.774 111.768c6.435 6.438 16.873 6.438 23.316 0l111.251-111.249c6.438-6.44 6.438-16.887 0-23.324" fill="#ffff" />
                </svg>
                GitHub
              </button>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Sections -->
  <div id="home">
    <div class="">
      <?php include_once "mainpage.php"; ?>
    </div>
  </div>

  <section id="about">
    <div class="container mx-auto text-center">
      <?php include_once "About.php"; ?>
    </div>
  </section>

  <section id="skills">
    <div class="container mx-auto text-center">
      <?php include_once "Skills.php"; ?>
    </div>
  </section>

  <section id="ressume">
    <div class="container mx-auto text-center">
      <?php include_once "ressume.php"; ?>
    </div>
  </section>

  <section id="projects">
    <div class="container mx-auto text-center">
      <?php include_once "project.php"; ?>
    </div>
  </section>

  <section id="certificate">
    <div class="container mx-auto text-center">
      <?php include_once "certificate.php"; ?>
    </div>
  </section>

  <section id="contact">
    <div class="container mx-auto text-center">
      <?php include_once "contat.php"; ?>
    </div>
  </section>

  <?php include_once "footer.php"; ?>

  <!-- scripts -->
  <script src="particles.js"></script>
  <script src="./js/app.js"></script>
  <script src="./js/script.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const menuToggle = document.getElementById('menu-toggle');
      const navbar = document.getElementById('navbar-solid-bg');
      const links = document.querySelectorAll('nav a[href^="#"]');

      menuToggle.addEventListener('click', function() {
        navbar.classList.toggle('show');
      });

      for (const link of links) {
        link.addEventListener('click', function(e) {
          e.preventDefault();
          const targetId = this.getAttribute('href').substring(1);
          const targetElement = document.getElementById(targetId);

          targetElement.scrollIntoView({
            behavior: 'smooth'
          });

          // Close the menu after clicking a link
          if (!navbar.classList.contains('hidden')) {
            navbar.classList.add('hidden');
          }
        });
      }
    });
  </script>
</body>

</html>