<!-- form to create a new party -->
<div class="fixed card max-w-md mx-auto bg-white p-6 rounded-lg shadow-md justify-center fade-in">
  <div class="fixed z-50 top-1/4 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-lg w-full max-w-md p-4">
    <div class="flex flex-row justify-between items-center py-4 mb-4 ">
      <span class="text-2xl font-bold text-gray-800">Create New Party</span>
      <button type="button" onclick="this.closest('.card').style.display='none'" class="text-gray-400 hover:text-gray-700 text-2xl font-bold focus:outline-none">&times;</button>
      <!-- X button to close the card -->
    </div>
    <form action="create_party.php" method="post">
      <div class="mb-4">
        <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Party Title</label>
        <input type="text" id="title" name="title" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter party title"> 
        <!-- description input (multiline) -->
        <label for="description" class="block text-gray-700 text-sm font-bold mb-2 mt-4">Party Description</label>
        <textarea id="description" name="description" required rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 mb-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter party description"></textarea>
        <!-- radio buttons for "free archetype" -->
        <label class="text-gray-600 text-sm mt-4">Free Archetype:</label>
        <div class="flex items-center mb-2">
          <input type="radio" id="free_archetype_yes" name="free_archetype" value="yes" class="mr-2">
          <label for="free_archetype_yes" class="text-gray-700">Yes</label>
        </div>
        <div class="flex items-center mb-2">
          <input type="radio" id="free_archetype_no" name="free_archetype" value="no" class="mr-2">
          <label for="free_archetype_no" class="text-gray-700">No</label>
        </div>
        <!-- submit button -->
        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold mt-4 py-2 px-4 rounded focus:outline-none focus:shadow-outline">
          Create Party
        </button>
      </div>
    </form>
  </div>
</div>