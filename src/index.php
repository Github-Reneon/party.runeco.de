<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<body>
  <!-- login page for party.runeco.de -->
  <div class="mx-auto w-screen xl:max-w-4xl">
    <div class="flex flex-col items-center gap-4 p-4 h-screen bg-gray-100">
      <h1 class="text-5xl mt-4 font-bold">🎉 party.runeco.de</h1>
      <hr class="w-full border-gray-300 my-4">
      <h2 class="text-2xl font-bold">Let's get you signed up!</h2>
      <!-- Sign-up form with Tailwind CSS -->
      <form action="signup.php" method="post" class="flex flex-col gap-4 w-full max-w-md">
        <input type="text" name="username" placeholder="Username" required class="p-2 border border-gray-300 rounded">
        <input type="email" name="email" placeholder="Email" required class="p-2 border border-gray-300 rounded">
        <input type="password" name="password" placeholder="Password" required class="p-2 border border-gray-300 rounded">
        <button type="submit" class="p-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors">Sign Up</button>
      </form>
      <hr class="w-3/4 border-gray-300 my-4">
      <h2 class="text-2xl font-bold">Ready to party? Log in here!</h2>
      <!-- Login form with Tailwind CSS -->
      <form action="login.php" method="post" class="flex flex-col gap-4 w-full max-w-md">
        <input type="text" name="username" placeholder="Username" required class="p-2 border border-gray-300 rounded">
        <input type="password" name="password" placeholder="Password" required class="p-2 border border-gray-300 rounded">
        <button type="submit" class="p-2 bg-green-500 text-white rounded hover:bg-green-600 transition-colors">Log In</button>
      </form>
      <!-- Link to https://runeco.de/ -->
      <p class="text-sm text-gray-600 mt-4">Powered by <a href="https://runeco.de/" class="text-blue-500 hover:underline">Runecode</a>.</p> 
      <!-- Link to the about page https://runeco.de/about.php -->
      <p class="text-sm text-gray-600">Learn more about us on our <a href="about.php" class="text-blue-500 hover:underline">About</a> page.</p>
      <!-- "Or" with a link to https://github.com/github-reneon/runeco.de as well as a link to https://github.com/github-reneon/party.runeco.de -->
      <p class="text-sm text-gray-600">Or check out the <a href="https://github.com/github-reneon/runeco.de" class="text-blue-500 hover:underline">Runecode</a> and <a href="https://github.com/github-reneon/party.runeco.de" class="text-blue-500 hover:underline">Party Portal</a> repositories on GitHub.</p>
    </div>
  </div>
  <span id="error_message"></span>
</body>
</html>