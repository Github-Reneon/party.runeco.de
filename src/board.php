<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<body>
  <!-- login page for party.runeco.de -->
  <div class="mx-auto w-screen xl:max-w-8/10">
    <div class="flex flex-col gap-4 p-4 min-h-screen bg-gray-100">
      <div class="flex flex-row justify-between items-center px-6 py-4 mb-4">
        <span class="text-3xl font-extrabold text-black">🎉 Party Board</span>
        <a href="/requests.php" class="flex items-center text-black hover:text-blue-800 font-semibold text-xl">
          <span class="mr-2">📝</span> Requests
        </a>
      </div>
      <div class="flex justify-center">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
          <?php
          // loop to include party cards for test pourposes
          for ($i = 0; $i < 14; $i++) {
            include 'example_party_card.php';
          }
          ?>
          <?php include 'new_party_card.php'; ?>
        </div>
      </div>
    </div>
  </div>
  <span id="error_message"></span>
  <span id="create_new_party_form"></span>
  <script>
  const newPartyLink = document.getElementById('new_party_link');
  if (newPartyLink) {
    newPartyLink.addEventListener('click', function(e) {
      e.preventDefault();
      fetch('new_party.php')
        .then(response => response.text())
        .then(html => {
          const formContainer = document.getElementById('create_new_party_form');
          if (formContainer) {
            formContainer.innerHTML = html;
          }
        });
    });
  }
  </script>
</body>
</html>