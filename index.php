<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>particles.js</title>
  <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
  <meta name="author" content="Vincent Garreau" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" media="screen" href="./css/demo.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
  
  <?php include_once "navbar.php"; ?>
  
  <!-- particles.js container -->
  <section id="particles-js" class=" min-h-screen">
    <div class="absolute flex flex-wrap justify-center items-center w-full p-4 space-y-10 md:space-y-0 md:space-x-10">
      <div class="w-full md:w-1/2 text-start p-4 ">
        <div class="text-white text-3xl md:text-5xl font-bold py-3 ">Hi</div>
        <div class="text-white text-3xl md:text-5xl font-bold py-3">I'm <span class="text-red-500">Akash Maurya</span></div>
        <div class="text-white text-3xl md:text-5xl font-bold py-3 capitalize">I am a web developer</div>
        <div class="flex flex-wrap items-center mt-4 md:mt-10 text-white text-2xl">
          <i class="fa-brands fa-github p-4 hover:text-rose-500 hover:scale-125  " style="transition: all 0.5s ease 0s;"></i>
          <i class="fa-brands fa-linkedin p-4 hover:text-rose-500 hover:scale-125 " style="transition: all 0.5s ease 0s;"></i>
          <i class="fa-brands fa-twitter p-4 hover:text-rose-500 hover:scale-125 " style="transition: all 0.5s ease 0s;"></i>
          <i class="fa-brands fa-instagram p-4 hover:text-rose-500 hover:scale-125 " style="transition: all 0.5s ease 0s;"></i>
          <button class="text-2xl ml-4 md:ml-8 text-white px-6 md:px-10 py-2 border border-red-500 rounded-2xl bg-red-600 hover:bg-red-800 transition-all">Contact</button>
        </div>
      </div>
      <div class="md:w-1/5 w-52 ">
        <img src="./image/akashpro.jpeg" alt="Image not supported" class="md:mt-[40%] mt-[5%] rounded-3xl rotate-6 transition-transform hover:rotate-0 md:w-72 md:h-auto sm:w-25 sm:h-52   ">
      </div>
    </div>
  </section>

  <?php
  include_once "About.php";

  include_once "Skills.php";
  include_once "project.php";

  ?>
  <?php
  include_once "footer.php";
  ?>
  <!-- scripts -->
  <script src="particles.js"></script>
  <script src="./js/app.js"></script>
</body>

</html>