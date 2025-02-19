<?php


?>
<br>
<form action="action.php" method="post" class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow-md space-y-4">
    <h2 class="text-2xl font-semibold text-center">User Information</h2>

    <div class="space-y-2">
        <label for="fname" class="block text-lg font-medium text-gray-700">First Name:</label>
        <input type="text" id="fname" name="fname" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>

    <div class="space-y-2">
        <label for="lname" class="block text-lg font-medium text-gray-700">Last Name:</label>
        <input type="text" id="lname" name="lname" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>

    <div class="text-center">
        <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Submit</button>
    </div>
</form>

