<script>
  function showDocument() {
    var iframe = document.getElementById('pdfIframe');
    var returnButton = document.getElementById('returnButton');
    iframe.classList.remove('hidden');
    returnButton.classList.remove('hidden');
    iframe.src = './image/ResumeAkash.pdf';
  }

  function hideDocument() {
    var iframe = document.getElementById('pdfIframe');
    var returnButton = document.getElementById('returnButton');
    iframe.classList.add('hidden');
    returnButton.classList.add('hidden');
    iframe.src = './image/ResumeAkash.pdf';
  }
</script>


<section class="text-white flex  py-10 md:pt-44">
  <div class="flex flex-col  justify-center items-center  w-full px-4">
    <div class=" w-full max-w-3xl">
      <div class=" flex justify-center items-center  gap-4 sm:gap-10">
        <button class="glow-on-hover text-xl font-bold " onclick="showDocument()">
          Show Resume
        </button>

        <button id="returnButton" class=" glow-on-hover text-xl font-bold hidden" onclick="hideDocument()">
          Hide
        </button>
      </div>

      <div class="mt-6 w-full py-10">
        <iframe id="pdfIframe" class="hidden w-full h-[100vh] border border-gray-300 rounded-lg" frameborder="0"></iframe>
      </div>
    </div>
  </div>
</section>
