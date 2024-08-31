<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.tailwindcss.com">
    <title>Student List</title>
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
            <h1 class="text-2xl font-bold mb-4">Student List</h1>
            <a href="add_student.php" class="bg-blue-500 text-white py-2 px-4 rounded-lg mb-4 inline-block">Add New Student</a>
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Track</th>
                        <th class="py-2 px-4 border-b">Grade Level</th>
                        <th class="py-2 px-4 border-b">Status</th>
                        <th class="py-2 px-4 border-b">Expelled</th>
                        <th class="py-2 px-4 border-b">Community Service</th>
                        <th class="py-2 px-4 border-b">Date</th>
                        <th class="py-2 px-4 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $stmt = $pdo->query("SELECT * FROM students");
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo '<tr>';
                        echo '<td class="py-2 px-4 border-b">' . htmlspecialchars($row['id']) . '</td>';
                        echo '<td class="py-2 px-4 border-b">' . htmlspecialchars($row['track']) . '</td>';
                        echo '<td class="py-2 px-4 border-b">' . htmlspecialchars($row['grade_level']) . '</td>';
                        echo '<td class="py-2 px-4 border-b">' . htmlspecialchars($row['status']) . '</td>';
                        echo '<td class="py-2 px-4 border-b">' . htmlspecialchars($row['expelled']) . '</td>';
                        echo '<td class="py-2 px-4 border-b">' . htmlspecialchars($row['community_service']) . '</td>';
                        echo '<td class="py-2 px-4 border-b">' . htmlspecialchars($row['date']) . '</td>';
                        echo '<td class="py-2 px-4 border-b">
                                <a href="edit_student.php?id=' . htmlspecialchars($row['id']) . '" class="text-blue-500">Edit</a> |
                                <a href="delete_student.php?id=' . htmlspecialchars($row['id']) . '" class="text-red-500">Delete</a>
                              </td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
