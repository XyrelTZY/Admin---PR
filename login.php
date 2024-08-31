<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.tailwindcss.com">
    <title>Login</title>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h1 class="text-2xl font-bold mb-4">Login</h1>
        <form action="login_action.php" method="post">
            <div class="mb-4">
                <label for="username" class="block text-gray-700">Username</label>
                <input type="text" id="username" name="username" class="w-full border border-gray-300 rounded-md px-3 py-2 mt-1" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded-md px-3 py-2 mt-1" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md w-full">Login</button>
        </form>
    </div>
</body>
</html>
