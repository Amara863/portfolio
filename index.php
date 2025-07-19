<?php 
$host="localhost";
$username="root";
$password="";
$database="portfolio";
//connect to database
$conn=new mysqli($host,$username,$password,$database);
//check
if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);

}
//get user data
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

//insert to db
$sql="INSERT INTO myport (name,email, message) VALUES ('$name','$email','$message')";
if($conn->query($sql)==TRUE){
    echo"Message sent successfully";

}else{
    echo "Error: ".$sql."<br>".$conn->error;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Sticky Navbar -->
    <header>
        <nav class="navbar">
            <div class="logo">Amara's Portfolio</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </header>

    <!-- Home Section -->
    <section id="home" class="home">
        <div class="home-content">
            <div class="text-content">
                <h1>Hello, This is <span>Amara Firdous</span></h1>
                <div class="animated-text">
                    <span class="fade-in-out">Full Stack Web Developer</span>
                </div>
                <a href="#contact" class="hire-me-btn">Hire Me</a>
            </div>
            <div class="image-content">
                <div class="profile-pic-container">
                    <img src="images/profile.jpg" alt="Amara Firdous" class="profile-pic">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <h2 class="section-title">About <span>Me</span></h2>
        <div class="about-content">
            <p>I'm a passionate Full Stack Web Developer with expertise in both front-end and back-end technologies. I love creating responsive, user-friendly websites and applications that solve real-world problems.</p>
            <p>With a strong foundation in computer science and hands-on experience through internships, I bring both technical skills and creative problem-solving to every project I work on.</p>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills">
        <h2 class="section-title">My <span>Skills & Experience</span></h2>
        <div class="skills-container">
            <div class="skill-category">
                <h3>Programming Languages</h3>
                <div class="skill-tags">
                    <span>Java</span>
                    <span>JavaScript</span>
                    <span>C</span>
                    <span>C++</span>
                </div>
            </div>
            <div class="skill-category">
                <h3>Web Development</h3>
                <div class="skill-tags">
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>Bootstrap</span>
                    <span>PHP</span>
                </div>
            </div>
            <div class="skill-category">
                <h3>Database</h3>
                <div class="skill-tags">
                    <span>MySQL</span>
                    <span>DBMS</span>
                </div>
            </div>
            <div class="skill-category experience">
                <h3>Experience</h3>
                <div class="experience-item">
                    <!-- <h4>Web Development Intern</h4> -->
                    <!-- <p class="company">Tech Solutions Inc. | 2023 - Present</p> -->
                    <p class="exp-desc">IIISc in Software Development (Internship)</p>
                </div>
                <div class="experience-item">
                    <!-- <h4>Software Development Intern</h4> -->
                    <!-- <p class="company">Digital Innovations Ltd. | 2022 - 2023</p> -->
                    <p class="exp-desc"></p>CIT in Web Deveopment (Internship) </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <h2 class="section-title">My <span>Projects</span></h2>
        <div class="projects-grid">
            <div class="project-card">
                <img src="images/recruitment.jpg" alt="Recruitment Portal">
                <div class="project-info">
                    <h3>Recruitment Portal</h3>
                    <p>A platform connecting job seekers with employers with advanced filtering options.</p>
                    <a href="https://getjobwithus.great-site.net/" class="project-link">View Project</a>
                </div>
            </div>
            <div class="project-card">
                <img src="images/portfolio.jpg" alt="Portfolio Website">
                <div class="project-info">
                    <h3>Portfolio Website</h3>
                    <p>My Portfolio using HTML, CSS, JS, and PHP</p>
                    <a href="#" class="project-link">View Project</a>
                </div>
            </div>
            <div class="project-card">
                <img src="images/gym.jpg" alt="GYM Website">
                <div class="project-info">
                    <h3>GYM Website</h3>
                    <p>A fitness center website with class schedules, trainer profiles, and membership options.</p>
                    <a href="#" class="project-link">View Project</a>
                </div>
            </div>
            <!-- <div class="project-card">
                <img src="images/food.jpg" alt="Food Delivery Website">
                <div class="project-info">
                    <h3>Food Delivery Website</h3>
                    <p>An online food ordering system with real-time tracking and payment integration.</p>
                    <a href="#" class="project-link">View Project</a>
                </div>
            </div> -->
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <h2 class="section-title">Contact <span>Me</span></h2>
        <div class="contact-container">
            <div class="contact-info">
                <h3>Get In Touch</h3>
                <p><i class="fas fa-envelope"></i> amara262006@gmail.com</p>
                <p><i class="fas fa-phone"></i> +91 6202545085</p>
                <p><i class="fas fa-map-marker-alt"></i> New Delhi, India</p>
                <div class="social-icons">
                    <a href="https://github.com/Amara863/localrepo"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/amara-firdous-6b602b237?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <form class="contact-form" action="index.php" method="POST">
                <div class="form-group">
                    <input type="text" placeholder="Your Name" name="name" required>
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Your Email"  name="email" required>
                </div>
                <div class="form-group">
                    <textarea placeholder="Your Message" name="message" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <p>&copy; <span id="year"></span> Amara Firdous. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>