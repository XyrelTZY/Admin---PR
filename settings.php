<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.tailwindcss.com">
    <title>Settings</title>
</head>
<body class="bg-gray-100 min-h-screen">
    <div id="header" class="bg-white text-blue-800 px-10 py-2 z-10 fixed top-0 left-0 right-0 shadow-md">
        <div class="flex justify-between items-center">
            <div class="font-bold text-blue-900 text-xl">Admin<span class="text-orange-600">Panel</span></div>
        </div>
    </div>

    <div class="flex pt-20">
        <div class="w-1/4 p-4 bg-white shadow-md">
            <a href="index.php" class="block text-gray-600 hover:text-black my-4">Home</a>
            <a href="students.php" class="block text-gray-600 hover:text-black my-4">Student List</a>
            <a href="transferee.php" class="block text-gray-600 hover:text-black my-4">Transferee</a>
            <a href="profile.php" class="block text-gray-600 hover:text-black my-4">Profile</a>
            <a href="settings.php" class="block text-gray-600 hover:text-black my-4">Settings</a>
            <a href="logout.php" class="block text-gray-600 hover:text-black my-4">Log out</a>
        </div>

        <div class="w-3/4 p-4">
            <h1 class="text-2xl font-bold mb-4">Settings</h1>
            <!-- Your content here -->
        </div>
    </div>
</body>
</html>
