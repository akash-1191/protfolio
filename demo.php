<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View and Download CVV</title>
  <style>
    .hidden {
      display: none;
    }
    .iframe-container {
      width: 100%;
      height: 500px; /* Adjust height as needed */
      margin-top: 20px;
    }
  </style>
  <script>
    function showDocument() {
      var iframe = document.getElementById('pdfIframe');
      var returnButton = document.getElementById('returnButton');
      iframe.classList.remove('hidden');
      returnButton.classList.remove('hidden');
      iframe.src = './image/BDCS.png'; // Update this to your PDF file path
    }

    function hideDocument() {
      var iframe = document.getElementById('pdfIframe');
      var returnButton = document.getElementById('returnButton');
      iframe.classList.add('hidden');
      returnButton.classList.add('hidden');
      iframe.src = ''; // Clear the iframe src to stop loading the PDF
    }
  </script>
</head>
<body>
  <button class="text-2xl ml-4 md:ml-8 text-white px-6 md:px-5 py-2 border border-red-500 rounded-2xl bg-red-600 hover:bg-red-800 transition-all" onclick="showDocument()">
    Download CVV
  </button>

  <button id="returnButton" class="text-2xl ml-4 md:ml-8 text-white px-6 md:px-5 py-2 border border-gray-500 rounded-2xl bg-gray-600 hover:bg-gray-800 transition-all hidden" onclick="hideDocument()">
    Return
  </button>

  <div class="iframe-container">
    <iframe id="pdfIframe" class="hidden" width="100%" height="100%" frameborder="0"></iframe>
  </div>
</body>
</html>
