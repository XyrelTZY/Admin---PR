<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Admin.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin Dashboard</title>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-color': '#0e4bf1',
                        'color-hover': '#0e4bf1',
                        'panel-color': '#fff',
                        'text-color': '#000',
                        'black-light-color': '#707070',
                        'border-color': '#e6e5e5',
                        'toggle-color': '#ddd',
                        'box1-color': '#4dffe4',
                        'box2-color': '#acd3ff',
                        'box3-color': '#fce7d1',
                        'title-icon-color': '#fff',
                        'dark-primary-color': '#3a3b3c',
                        'dark-color-hover': '#0e4bf1',
                        'dark-panel-color': '#242526',
                        'dark-text-color': '#ccc',
                        'dark-black-light-color': '#ccc',
                        'dark-border-color': '#4d4c4c',
                        'dark-toggle-color': '#fff',
                        'dark-box1-color': '#3a3b3c',
                        'dark-box2-color': '#3a3b3c',
                        'dark-box3-color': '#3a3b3c',
                        'dark-title-icon-color': '#ccc',
                        'table-header-bg': '#f1f5f9',
                        'table-row-even': '#f9fafb',
                        'table-row-odd': '#ffffff',
                        'table-header-text': '#1f2937',
                        'table-cell-text': '#4b5563'
                    },
                    transitionDuration: {
                        '05': '0.5s',
                        '03': '0.3s',
                        '02': '0.2s',
                    },
                    fontFamily: {
                        'custom': ['Arial', 'sans-serif'], // Add your desired font family
                    }
                },
            },
            plugins: [],
        }
    </script>
</head>
<!-- Header -->
<body class="bg-orange-100 min-h-screen">
    <div id="header" class="header fixed bg-white text-blue-800 px-10 py-2 z-10 top-0 left-0 rounded-b-lg">
        <div class="header-content">
            <div class="font-bold text-blue-900 text-xl">Admin<span class="text-orange-600">Panel</span></div>
            <div class="flex items-center space-x-4">
                <!-- Search Bar -->
                <div class="relative search-bar">
                    <input type="text" placeholder="Search..." />
                    <span class="material-icons">search</span>
                </div>
                <!-- Notifications Icon -->
                <span class="material-icons p-2 text-3xl">notifications</span>
                <div class="bg-center bg-cover bg-no-repeat rounded-full inline-block h-12 w-12 ml-2" style="background-image: url(https://i.pinimg.com/564x/de/0f/3d/de0f3d06d2c6dbf29a888cf78e4c0323.jpg)"></div>
            </div>
        </div>
    </div>
<!-- Navigator -->
    <div class="flex flex-col pt-24 px-4 md:px-10 pb-4">
        <div class="flex flex-col md:flex-row">
            <div class="md:w-2/12 md:mr-6">
                <div class="bg-white rounded-xl shadow-lg mb-6 px-6 py-4">
                    <a href="#" class="inline-block text-gray-600 hover:text-black my-4 w-full">
                        <span class="material-icons float-left pr-2">dashboard</span>
                        Home
                        <span class="material-icons float-right">keyboard_arrow_right</span>
                    </a>
                    <a href="#" class="inline-block text-gray-600 hover:text-black my-4 w-full">
                        <span class="material-icons float-left pr-2">tune</span>
                        Student List
                        <span class="material-icons float-right">keyboard_arrow_right</span>
                    </a>
                    <a href="#" class="inline-block text-gray-600 hover:text-black my-4 w-full">
                        <span class="material-icons float-left pr-2">file_copy</span>
                        Transferee
                        <span class="material-icons float-right">keyboard_arrow_right</span>
                    </a>
                </div>

                <!-- Action -->
                <div class="bg-white rounded-xl shadow-lg mb-6 px-6 py-4 h-[24rem] relative">
                    <a href="#" class="inline-block text-gray-600 hover:text-black my-4 w-full">
                        <span class="material-icons float-left pr-2">face</span>
                        Profile
                        <span class="material-icons float-right">keyboard_arrow_right</span>
                    </a>
                    <a href="#" class="inline-block text-gray-600 hover:text-black my-4 w-full">
                        <span class="material-icons float-left pr-2">settings</span>
                        Settings
                        <span class="material-icons float-right">keyboard_arrow_right</span>
                    </a>
                    <a href="#" class="inline-block text-gray-600 hover:text-black my-4 w-full" id="grade11-button">
                        <span class="material-icons float-left pr-2">school</span>
                        Grade 11
                        <span class="material-icons float-right">keyboard_arrow_right</span>
                    </a>
                    <a href="#" class="inline-block text-gray-600 hover:text-black my-4 w-full" id="grade12-button">
                        <span class="material-icons float-left pr-2">school</span>
                        Grade 12
                        <span class="material-icons float-right">keyboard_arrow_right</span>
                    </a>
                    <a href="#" class="inline-block text-gray-600 hover:text-black my-4 w-full">
                        <span class="material-icons float-left pr-2">power_settings_new</span>
                        Log out
                        <span class="material-icons float-right">keyboard_arrow_right</span>
                    </a>
                </div>
            </div>

            <div class="md:w-10/12">
                <div class="flex flex-col md:flex-row">
                    <div class="bg-no-repeat bg-red-200 border border-red-300 rounded-xl md:w-7/12 mb-4 md:mb-0 md:mr-2 p-6" style="background-image: url(https://previews.dropbox.com/p/thumb/AAvyFru8elv-S19NMGkQcztLLpDd6Y6VVVMqKhwISfNEpqV59iR5sJaPD4VTrz8ExV7WU9ryYPIUW8Gk2JmEm03OLBE2zAeQ3i7sjFx80O-7skVlsmlm0qRT0n7z9t07jU_E9KafA9l4rz68MsaZPazbDKBdcvEEEQPPc3TmZDsIhes1U-Z0YsH0uc2RSqEb0b83A1GNRo86e-8TbEoNqyX0gxBG-14Tawn0sZWLo5Iv96X-x10kVauME-Mc9HGS5G4h_26P2oHhiZ3SEgj6jW0KlEnsh2H_yTego0grbhdcN1Yjd_rLpyHUt5XhXHJwoqyJ_ylwvZD9-dRLgi_fM_7j/p.png?fv_content=true&size_mode=5); background-position: 90% center;">
                        <p class="text-5xl text-indigo-900">Welcome, <strong>Admin</strong></p>
                        <p class="text-[3rem]  text-indigo-900 font-bold text-center mt-6">Time Now</p>
                        <span id="current-time" class="bg-red-300 text-xl text-white inline-block rounded-full mt-12 px-8 py-2 w-full flex items-center justify-center"><strong>00:00:00</strong></span>
                    </div>

                    <div class="bg-no-repeat bg-orange-200 border border-orange-300 rounded-xl md:w-5/12 ml-0 md:ml-2 p-6" style="background-image: url(https://previews.dropbox.com/p/thumb/AAuwpqWfUgs9aC5lRoM_f-yi7OPV4txbpW1makBEj5l21sDbEGYsrC9sb6bwUFXTSsekeka5xb7_IHCdyM4p9XCUaoUjpaTSlKK99S_k4L5PIspjqKkiWoaUYiAeQIdnaUvZJlgAGVUEJoy-1PA9i6Jj0GHQTrF_h9MVEnCyPQ-kg4_p7kZ8Yk0TMTL7XDx4jGJFkz75geOdOklKT3GqY9U9JtxxvRRyo1Un8hOObbWQBS1eYE-MowAI5rNqHCE_e-44yXKY6AKJocLPXz_U4xp87K4mVGehFKC6dgk_i5Ur7gspuD7gRBDvd0sanJ9Ybr_6s2hZhrpad-2WFwWqSNkh/p.png?fv_content=true&size_mode=5); background-position: 100% 40%;">
                        <p class="text-5xl text-indigo-900 text-center font-bold">Inbox<br><br><strong class="flex items-center justify-center font-semibold">23</strong></p>
                        <a href="#" class="bg-orange-300 text-xl text-white w-full text-center hover:scale-[0.95] transition duration-[0.5s] inline-block rounded-full mt-12 px-8 py-2"><strong>Recent Students</strong></a>
                    </div>
                </div>

                <!-- Adjusted Section -->
                <div class="flex flex-col md:flex-col gap-4 mt-6 w-full justify-center items-center ">
                    <div class="overview bg-primary-color text-white p-4 rounded-lg md:w-7/12 lg:w-8/12">
                        <div class="title flex items-center space-x-4 ">
                            <i class="fas fa-gauge text-[3rem] text-title-icon-color transition duration-300 ease-in-out"></i>
                            <span class="text-xl font-semibold text-center">Overview</span>
                        </div>
                    </div>

                    <div class="dashboard flex flex-wrap md:flex-nowrap gap-4">
                        <!-- Total Students Card -->
                        <div class="bg-white rounded-xl shadow-lg px-6 py-4 flex-1 min-w-[250px] md:min-w-[300px] md:h-[200px] flex flex-col items-center justify-center text-center">
                            <i class="fas fa-user text-[3rem] mb-2 "></i>
                            <h2 class="text-xl font-semibold">Total Students</h2>
                            <p class=" text-[2rem] font-semibold mt-[1rem]">143</p>
                        </div>

                        <!-- Views Card -->
                        <div class="bg-white rounded-xl shadow-lg px-6 py-4 flex-1 min-w-[250px] md:min-w-[300px] md:h-[200px] flex flex-col items-center justify-center text-center">
                            <i class="fas fa-eye text-[3rem] mb-2"></i>
                            <h2 class="text-xl font-semibold">Views</h2>
                            <p class=" text-[2rem] font-semibold mt-[1rem]">143</p>
                        </div>

                        <!-- Time Card -->
                        <div class="bg-white rounded-xl shadow-lg px-6 py-4 flex-1 min-w-[250px] md:min-w-[300px] md:h-[200px] flex flex-col items-center justify-center text-center">
                            <i class="fas fa-clock text-[3rem] mb-2"></i>
                            <h2 class="text-xl font-semibold">Time</h2>
                            <p class=" text-[2rem] font-semibold mt-[1rem]">143</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- New Section for Student List -->
    <div class="px-4 md:px-10 py-6">
        <div class="bg-white rounded-xl shadow-lg p-6 font-custom">
            <h2 class="text-2xl font-semibold mb-4"><i class="fas fa-user mb-2 mr-10"></i>Student List</h2>
            <table class="min-w-full bg-white">
                <thead>
                    <tr class="bg-table-header-bg text-table-header-text">
                        <th class="py-2 px-4 text-left font-bold">ID</th>
                        <th class="py-2 px-4 text-left font-bold">Track</th>
                        <th class="py-2 px-4 text-left font-bold">Grade Level</th>
                        <th class="py-2 px-4 text-left font-bold">Status</th>
                        <th class="py-2 px-4 text-left font-bold">Expelled</th>
                        <th class="py-2 px-4 text-left font-bold">Community Service</th>
                        <th class="py-2 px-4 text-left font-bold">Date</th> <!-- New column for Date -->
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Rows -->
                    <tr class="bg-table-row-even">
                        <td class="py-2 px-4 text-table-cell-text">001</td>
                        <td class="py-2 px-4 text-table-cell-text">Science</td>
                        <td class="py-2 px-4 text-table-cell-text">10</td>
                        <td class="py-2 px-4 text-table-cell-text">Active</td>
                        <td class="py-2 px-4 text-table-cell-text">No</td>
                        <td class="py-2 px-4 text-table-cell-text">20 hours</td>
                        <td class="py-2 px-4 text-table-cell-text">2024-08-31</td> <!-- Example Date -->
                    </tr>
                    <tr class="bg-table-row-odd">
                        <td class="py-2 px-4 text-table-cell-text">002</td>
                        <td class="py-2 px-4 text-table-cell-text">Math</td>
                        <td class="py-2 px-4 text-table-cell-text">11</td>
                        <td class="py-2 px-4 text-table-cell-text">Inactive</td>
                        <td class="py-2 px-4 text-table-cell-text">Yes</td>
                        <td class="py-2 px-4 text-table-cell-text">15 hours</td>
                        <td class="py-2 px-4 text-table-cell-text">2024-08-31</td> <!-- Example Date -->
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
<script src="Admin.js"></script>
</body>
</html>