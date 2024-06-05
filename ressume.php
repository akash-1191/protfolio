<script>
  function showDocument() {
    var iframe = document.getElementById('pdfIframe');
    var returnButton = document.getElementById('returnButton');
    iframe.classList.remove('hidden');
    returnButton.classList.remove('hidden');
    iframe.src = './image/Akash5.pdf';
  }

  function hideDocument() {
    var iframe = document.getElementById('pdfIframe');
    var returnButton = document.getElementById('returnButton');
    iframe.classList.add('hidden');
    returnButton.classList.add('hidden');
    iframe.src = './image/Akash5.pdf';
  }
</script>

<section class="text-white flex  py-10 pt-20">
  <div class="flex flex-col  justify-center items-center  w-full px-4">
    <div class=" w-full max-w-3xl">
      <div class=" flex justify-center items-center  gap-4 sm:gap-10">
        <button class="text-xl sm:text-2xl w-[50vw] text-white px-4 sm:px-6 py-2 border border-red-500 rounded-lg bg-red-600 hover:bg-red-800 transition-all" onclick="showDocument()">
          Show CVV
        </button>

        <button id="returnButton" class="text-xl  sm:text-2xl text-white px-4 sm:px-6 py-2 border border-red-500 rounded-lg bg-red-600 hover:bg-red-800 transition-all hidden" onclick="hideDocument()">
          Hide
        </button>
      </div>

      <div class="mt-6 w-full py-10">
        <iframe id="pdfIframe" class="hidden w-full h-[100vh] border border-gray-300 rounded-lg" frameborder="0"></iframe>
      </div>
    </div>
  </div>
</section>
