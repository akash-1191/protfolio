<script>
function showDocumentone(event) {
  event.preventDefault();
  window.open('./image/Akash5.pdf', '_blank');
}

function hideDocument() {
  var iframe = document.getElementById('pdfIframeone');
  var returnButton = document.getElementById('returnButton');
  iframe.classList.add('hidden');
  returnButton.classList.add('hidden');
  iframe.src = './image/Akash5.pdf';
}
</script>

<!-- particles.js container -->
<section id="particles-js" class="min-h-screen">
  <div class="absolute flex flex-wrap justify-center items-center w-full p-4 space-y-10 md:space-y-0 md:space-x-10">
    <div class="w-full md:w-1/2 text-start p-4 ">
      <div class="text-white text-3xl md:text-5xl font-bold py-3 ">Hi</div>
      <div class="text-white text-3xl md:text-5xl font-bold py-3">I'm <span class="text-red-500">Akash Maurya</span></div>
      <div class="text-white text-3xl md:text-5xl font-bold py-3 capitalize">I am a web developer</div>
      <div class="flex flex-wrap items-center mt-4 md:mt-10 text-white text-3xl">
        <i class="fa-brands fa-github p-4 hover:text-rose-500 hover:scale-125  " style="transition: all 0.5s ease 0s;"></i>
        <i class="fa-brands fa-linkedin p-4 hover:text-rose-500 hover:scale-125 " style="transition: all 0.5s ease 0s;"></i>
        <i class="fa-brands fa-twitter p-4 hover:text-rose-500 hover:scale-125 " style="transition: all 0.5s ease 0s;"></i>
        <i class="fa-brands fa-instagram p-4 hover:text-rose-500 hover:scale-125 " style="transition: all 0.5s ease 0s;"></i>
        <button class="text-2xl ml-4 md:ml-8 text-white px-6 md:px-5 py-2 border border-red-500 rounded-2xl bg-red-600 hover:bg-red-800 transition-all" onclick="showDocumentone(event)">
          Download CVV
        </button>
      </div>
    </div>
    <div class="md:w-1/5 w-52 ">
      <img src="./image/akashpro.jpeg" alt="Image not supported" class="md:mt-[40%] mt-[5%] rounded-3xl rotate-6 transition-transform hover:rotate-0 md:w-72 md:h-auto sm:w-25 sm:h-52   ">
    </div>
    <div class="mt-6 w-full h-[100vh] flex justify-center items-center">
      <iframe id="pdfIframeone" class="hidden w-full h-full border border-gray-300 rounded-lg" frameborder="0"></iframe>
    </div>
  </div>
</section>
