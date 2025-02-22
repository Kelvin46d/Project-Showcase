<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.html"); // Redirect if not logged in
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Main Page</title>
    <link rel="stylesheet" href="styles_panels.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Header with Logout -->
    <header class="buttoncontainerOut">
        <a href="logout.php">Log Out</a>
    </header>

    <!-- Introduction Section -->
    <section class="container">
        <h1>KELVIN PAGE</h1>
        <p>Web Developer</p>
        <div class="project-panel" onclick="navigateToProject('Project/CV/index.html')">
           <p> About Me </p>
        </div>
    </section>

    <!-- Project Showcase Section -->
    <section class="showcase-container">
        <h1>Project Showcase</h1>
        <div class="showcase-grid">
            <?php
            // Project data for reuse
            $projects = [
                [
                    'title' => 'To Do List',
                    'image' => './Project/todo/todoList.jpg',
                    'link'  => 'Project/todo/toDoList.html',
                    'alt'   => 'To Do List'
                ],
                [
                    'title' => 'Calculator',
                    'image' => './Project/calculator/calculator.jpg',
                    'link'  => 'Project/calculator/indexCalculator.html',
                    'alt'   => 'Calculator'
                ],
                [
                    'title' => 'Weather Forecast',
                    'image' => 'Project/weather/weather.jpeg',
                    'link'  => 'Project/weather/indexWeather.php',
                    'alt'   => 'Weather Forecast'
                ],
                [
                    'title' => 'Ndaya Hire',
                    'image' => 'Project/transportation/image/Ndaya.jpg',
                    'link'  => 'Project/transportation/index.php',
                    'alt'   => 'Ndaya Hire'
                ],
                [
                    'title' => 'Personal Trainer',
                    'image' => 'Project/personal-trainer/persornalTrainer.jpg',
                    'link'  => 'Project/personal-trainer/index.html',
                    'alt'   => 'Personal Trainer'
                ],
                
                [
                    'title' => 'Password Generator',
                    'image' => 'Project/passwordGenerator/passwordGenerator.jpg',
                    'link'  => 'Project/passwordGenerator/index.html',
                    'alt'   => 'passwordGenerator'
                ],

                  
                [
                    'title' => 'Pop Up Modal Box',
                    'image' => 'Project/popUpmodaBox/popUpmodaBox.jpg',
                    'link'  => 'Project/popUpmodaBox/index.html',
                    'alt'   => 'popUpmodaBox'
                ],

  
                [
                    'title' => 'Password Show And Hide',
                    'image' => 'Project/passwordShowAndHide/passwordShowAndHide.jpg',
                    'link'  => 'Project/passwordShowAndHide/index.html',
                    'alt'   => 'passwordShowAndHide'
                ],

                [
                    'title' => 'musicPlayerApp',
                    'image' => 'Project/musicPlayerApp/musicPlayerApp.jpg',
                    'link'  => 'Project/musicPlayerApp/index.html',
                    'alt'   => 'musicPlayerApp'
                ]

            ];

            // Generate project panels dynamically
            foreach ($projects as $project) {
                echo "
                <div class='project-panel' onclick=\"navigateToProject('{$project['link']}')\">
                    <div class='project-title'>
                        <h2>{$project['title']}</h2>
                    </div>
                    <div class='project-image'>
                        <img src='{$project['image']}' alt='{$project['alt']}'>
                    </div>
                </div>";
            }
            ?>
        </div>
    </section>

    <!-- JavaScript -->
         <script src="showcase.js"></script>
</body>

</html>



<?php
// session_start();

// if (!isset($_SESSION['email'])) {
//     header("Location: login.html"); // Redirect if not logged in
//     exit();
// }
// ?>
<!-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Main Page</title>
    <link rel="stylesheet" href="styles_panels.css">
    <link rel="stylesheet" href="styles.css">
</head> -->

<!-- <body>
    <div class="buttoncontainerOut">
        <a href="logout.php">Log Out</a>
    </div>

    <div class="container">
        <h1>KELVIN PAGE</h1>
        <p>Web Developer</p>
        <div class="project-panel" onclick="navigateToProject('Project/CV/resume.html')">
            About Me
        </div>
    </div> -->
<!-- 
    <div class="showcase-container">
        <h1>Project Showcase</h1>
        <div class="showcase-grid"> -->
            <!-- To Do List -->
            <!-- <div class="project-panel" onclick="navigateToProject('Project/todo/toDoList.html')">
                <div class="project-title">
                    <h2>To Do List</h2>
                </div>
                <div class="project-image">
                    <img src="./Project/todo/todoList.jpg" alt="To Do List">
                </div>
            </div> -->

            <!-- Calculator -->
            <!-- <div class="project-panel" onclick="navigateToProject('Project/calculator/indexCalculator.html')">
                <div class="project-title">
                    <h2>Calculator</h2>
                </div>
                <div class="project-image">
                    <img src="./Project/calculator/calculator.jpg" alt="Calculator">
                </div>
            </div> -->

            <!-- Weather Forecast -->
            <!-- <div class="project-panel" onclick="navigateToProject('Project/weather/indexWeather.php')">
                <div class="project-title">
                    <h2>Weather Forecast</h2>
                </div>
                <div class="project-image">
                    <img src="Project/weather/weather.jpeg" alt="Weather Forecast">
                </div>
            </div> -->

            <!-- Ndaya Hire -->
            <!-- <div class="project-panel" onclick="navigateToProject('Project/transportation/index.php')">
                <div class="project-title">
                    <h2>Ndaya Hire</h2>
                </div>
                <div class="project-image">
                    <img src="Project/transportation/image/Ndaya.jpg" alt="Ndaya Hire">
                </div>
            </div> -->

            <!-- Personal Trainer -->
            <!-- <div class="project-panel" onclick="navigateToProject('Project/personal-trainer/index.html')">
                <div class="project-title">
                    <h2>Personal Trainer</h2>
                </div>
                <div class="project-image">
                    <img src="Project/personal-trainer/persornalTrainer.jpg" alt="Personal Trainer">
                </div>
            </div>
        </div>
    </div> -->
<!-- 
    <script src="showcase.js"></script>
</body>

</html> -->



