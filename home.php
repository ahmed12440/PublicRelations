<?php

session_start();
include('inc/connections.php');
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
    $id = $_SESSION['id'];
    $user = $_SESSION['username'];
}

$info = mysqli_query($conn,"select * from users where username='$user'");
while($data = mysqli_fetch_array($info)){

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public Relations</title>
</head>
<body>
    

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <title>العلاقات العامة</title>
    <script src=".script.js"></script>
</head>

<body>

    <header>
        <a href="#" class="logo">My Project</a>
        <nav class="navigation">
            <a href="#services">Services</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
            <a href="logout.php">Log out</a>

        </nav>
    </header>


    <section class="main">
        <div>
            <h2>Hello, we are the team<br><span>Public Relations</span></h2>
            <h3>A website for teaching public relations PR</h3>
            <a href="#projects" class="main-btn">View my work</a>
            <div class="social-icons">
            <a href="https://eg.linkedin.com/"><i class="fab fa-linkedin"></i></a>
            <a href="https://x.com/?lang=ar"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
            <a href="https://www.facebook.com/madina.academy.eg?mibextid=ZbWKwL"><i class="fab fa-facebook"></i></a>
            </div>
        </div>
    </section>

    <section class="cards" id="services">
        <h2 class="title">Services</h2>
        <div class="content">
            <div class="card">
                <div class="icon">
                    <i class="fas fa-edit"></i>
                </div>
                <div class="info">
                    <h3>Important articles</h3>
                    <p>We provide important articles and solutions to all PR problems within companies and institutions</p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fas fa-video"></i>
                </div>
                <div class="info">
                    <h3>Scientific videos</h3>
                    <p>We also present some scientific videos from international experts in the field of public relations (PR).</p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="info">
                    <h3>Courses for students</h3>
                    <p>On our website, we offer free paid courses in the field of public relations (PR).</p>
                </div>
            </div>
        </div>
    </section>

    <section class="projects" id="projects">
        <h2 class="title">Projects</h2>
        <div class="content">
            <div class="project-card">
                <div class="project-image">
                    <img src="images/images (6).jpeg" />
                </div>
                <div class="project-info">
                    <p class="project-category">In this section we will learn about the field of public relations (PR).</p>
                    <strong class="project-title">
                        <span>What is the field of public relations (PR) in detail?</span>
                        <a href="page1.html" class="more-details">More details</a>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="images/30.jpg" />
                </div>
                <div class="project-info">
                    <p class="project-category">In this section, we will learn about the field of business administration in general</p>
                    <strong class="project-title">
                        <span>Business administration</span>
                        <a href="page2.html" class="more-details">More details</a>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="images/image.jpg.jpg" />
                </div>
                <div class="project-info">
                    <p class="project-category">We offer a solution to all psychological problems facing the employee and HR</p>
                    <strong class="project-title">
                        <span>Psychological problems</span>
                        <a href="page3.html" class="more-details">More details</a>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="images/img.jpg.jpg" />
                </div>
                <div class="project-info">
                    <p class="project-category">In this section, we offer paid courses and paid books for free. We also display some videos that are offered for free on YouTube but are paid from an educational standpoint about the field of public relations (PR).</p>
                    <strong class="project-title">
                        <span>Educational courses and videos</span>
                        <a href="page4.html" class="more-details">More details</a>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="images/860.jfif" />
                </div>
                <div class="project-info">
                    <p class="project-category">We offer solutions to the employee's problems with HR when applying for a job and how to overcome this stage in order to accept the job</p>
                    <strong class="project-title">
                        <span>Employee problem with HR</span>
                        <a href="page5.html" class="more-details">More details</a>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="images/10.jfif" />
                </div>
                <div class="project-info">
                    <p class="project-category">We offer solutions to the problems that HR faces with employees within the company</p>
                    <strong class="project-title">
                        <span>HR problem with employees</span>
                        <a href="page6.html" class="more-details">More details</a>
                    </strong>
                </div>
            </div>
        </div>
    </section>

    <section class="cards contact" id="contact">
        <h2 class="title">Let's work together</h2>
        <div class="content">
            <div class="card">
                <div class="icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="info">
                    <h3>Phone</h3>
                    <p>+201112345678</p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="info">
                    <h3>Email</h3>
                    <p>Madina Academy.com</p>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="footer">
        <p class="footer-title">Copyrights @ <span>Madina Academy</span></p>
        <div class="social-icons">
            <a href="https://eg.linkedin.com/"><i class="fab fa-linkedin"></i></a>
            <a href="https://x.com/?lang=ar"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
            <a href="https://www.facebook.com/madina.academy.eg?mibextid=ZbWKwL"><i class="fab fa-facebook"></i></a>
        </div>
    </footer>

</body>
</html>