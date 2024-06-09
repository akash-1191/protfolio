<script>
  document.addEventListener('DOMContentLoaded', function(event) {
    var prefixText = "I Am A ";
    var dataText = ["Full stack Web Developer.", "", "PHP Developer.", "UI&UX Designer."];

    function typeWriter(text, i, fnCallback) {
      if (i < text.length) {
        document.querySelector(".animationheading").innerHTML = prefixText + text.substring(0, i + 1) + '<span aria-hidden="true"></span>';
        setTimeout(function() {
          typeWriter(text, i + 1, fnCallback);
        }, 100);
      } else if (typeof fnCallback == 'function') {
        setTimeout(fnCallback, 700);
      }
    }

    function StartTextAnimation(i) {
      if (i >= dataText.length) {
        i = 0;
      }
      typeWriter(dataText[i], 0, function() {
        StartTextAnimation(i + 1);
      });
    }

    StartTextAnimation(0);
  });
</script>
<style>
  .animation {
    border-right: .05em solid;
    animation: caret 1s steps(1) infinite;
  }

  @keyframes caret {
    50% {
      border-color: transparent;
    }
  }        
</style>

<!-- particles.js container -->
<section id="particles-js" class="min-h-screen ">
    <div class="absolute flex flex-wrap justify-center items-center w-full p-4 space-y-10 md:space-y-0 md:space-x-10 pt-20">
        <div class="w-full md:w-1/2 text-start">
            <div class="text-white text-3xl md:text-5xl font-bold py-3">Hi</div>
            <div class="text-white text-3xl md:text-5xl font-bold py-3">I'm <span class="text-transparent bg-gradient-to-r from-blue-600 to-red-600 bg-clip-text hover:from-red-600 hover:to-blue-600 transition duration-500">Akash Maurya</span></div>
            <div class="text-white text-3xl md:text-4xl font-bold py-3 pt-5capitalize">
                <p class="animationheading">I am a <span class="animation"> web developer</span> </p>
            </div>
            <div class="flex flex-wrap items-center mt-4 md:mt-10 text-white text-3xl">
                <a href="#contact">
                    <button class="btn-grad text-2xl w-52 text-white py-2 border border-red-500 capitalize rounded-xl mr-5 bg-red-600 hover:bg-red-800 transition-all">
                        Contact
                    </button>
                </a>
                <a href="https://github.com/akash-1191" target="_blank"><i class="fa-brands ml-20 fa-github p-4 hover:text-rose-500 hover:scale-125" style="transition: all 0.5s ease 0s;"></i></a>
                <a href="https://www.linkedin.com/in/akash-maurya-319632256/" target="_blank"><i class="fa-brands fa-linkedin p-4 hover:text-rose-500 hover:scale-125" style="transition: all 0.5s ease 0s;"></i></a>
                <a href="https://x.com/AkashMaury1191" target="_blank"><i class="fa-brands fa-twitter p-4 hover:text-rose-500 hover:scale-125" style="transition: all 0.5s ease 0s;"></i></a>
                <a href="https://www.instagram.com/maurya_akash_1191/?next=%2F" target="_blank"><i class="fa-brands fa-instagram p-4 hover:text-rose-500 hover:scale-125" style="transition: all 0.5s ease 0s;"></i></a>
            </div>
        </div>
        <div class="md:w-1/3 w-full md:max-w-[90rem]">
                <img src="./image/frimage.gif" alt="Image not supported" class="md:mt-8 w-full h-auto rounded-3xl rotate-6 transition-transform hover:rotate-0 lg:w-96 lg:h-96">
            </div>
    </div>
</section>





