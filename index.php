<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="jpg" href="images/icon/logo.jpg">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comaptible" content="IE=edge">
	<title>Gate Crack</title>
	<meta name="desciption" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script> 
		$(window).on('scroll', function(){
  			if($(window).scrollTop()){
  			  $('nav').addClass('black');
 			 }else {
 		   $('nav').removeClass('black');
 		 }
		})
	</script>
</head>
<body>
<!-- Navigation Bar -->
	<header id="header">
		<nav>
			
			<div class="logo"> <img src="images/icon/name.png" alt="logo"></div>
			<ul>
				<li><a class="active" href="">Home</a></li>
				<li><a href="#team_section">Team</a></li>
				<li><a href="#services_section">Services</a></li>
				<li><a href="#contactus_section">Contact</a></li>
			</ul>
			<div class="srch"><input type="text" class="search" placeholder="Search here..."><img src="images/icon/search.png" alt="search" onclick=slide()></div>
			<a class="get-started" href="signup.php">Get Started</a>
			<img src="images/icon/menu.png" class="menu" onclick="sideMenu(0)" alt="menu">
		</nav>
		<div class="head-container">
			<div class="quote">
				<p>The beautiful thing about learning is that nobody can take it away from you</p>
				<h5>Education is the process of facilitating learning, or the acquisition of knowledge, skills, values, beliefs, and habits. Educational methods include teaching, training, storytelling, discussion and directed research!</h5>

			</div>
			<div class="svg-image">
				<img src="images/extra/svg1.jpg" alt="svg">
			</div>
		</div>
		<div class="side-menu" id="side-menu">
			<div class="close" onclick="sideMenu(1)"><img src="images/icon/close.png" alt=""></div>
			<div class="user">
				<img src="images\icon\logo.jpg" alt="Username">
				<p>Gate Crack</p>
			</div>
			<ul>
				<li><a href="#about_section">About</a></li>
				<li><a href="#team_section">Team</a></li>
				<li><a href="#services_section">Services</a></li>
				<li><a href="#contactus_section">Contact</a></li>
				<li><a href="#feedback">Feedback</a></li>
			</ul>
		</div>
	</header>


<!-- Some Popular Subjects -->
	<div class="title">
		<span>Popular Subjects on Gate Crack</span>
	</div>
	<br><br>
	<div class="course">
		<center><div class="cbox">
		<div class="det"><a href="subjects/gate.php"><img src="images/courses/book.png">Syllabus</a></div>
		<div class="det"><a href="subjects/gate_preparation.php"><img src="images/courses/d1.png">GATE Preparation</a></div>
		<div class="det"><a href="subjects/gate_preparation.php#sample_papers"><img src="images/courses/paper.png">Sample Papers</a></div>
		<div class="det"><a href="subjects/gate_preparation.php#books"><img src="images/courses/d1.png">Books & Notes</a></div>
		</div></center>
		
	</div>

	
<!-- ABOUT -->
	<div class="diffSection" id="about_section">
		<center><p style="font-size: 50px; padding: 100px">About</p></center>
		<div class="about-content">
				<div class="side-image">
					<img class="sideImage" src="images/extra/e3.jpg">
				</div>
				<div class="side-text">
					<h2>What you think about us ?</h2>
					<p>Education is the process of facilitating learning and acquiring knowledge, skills, values, and habits. In the context of GATE (Graduate Aptitude Test in Engineering) preparation, education plays a crucial role in helping students build a strong foundation in their chosen engineering discipline.<br> <br>Effective GATE preparation involves structured learning through teaching, self-study, problem-solving, discussions, and the use of reliable study materials. Various resources such as topic-wise notes, previous years' question papers, mock tests, and revision strategies contribute to a more focused and result-oriented approach.<br><br>Educational platforms and study aids can make GATE preparation more engaging and efficient. By using interactive content, well-organized study plans, and consistent practice, students can strengthen their concepts, improve accuracy, and enhance their overall performance in the exam.

</p>
				</div>
		</div>
	</div>




<!-- TEAM -->
	<div class="diffSection" id="team_section">
		<center><p style="font-size: 50px; padding-top: 100px; padding-bottom: 60px;">We're the Creators</p></center>
		<div class="totalcard">
			<div class="card">
				<center><img src="images/creator/Imran.jpeg"></center>
				<center><div class="card-title">Imran Azmi</div>
				<div id="detail">
					<p>“ You can teach a student a lesson for a day; but if you can teach him to learn by creating curiosity, he will continue the learning process as long as he lives “</p>
					<div class="duty"></div>
					<a href="https://www.linkedin.com/in/imranyazmi/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank"><button class="btn-imran">Follow +</button></a>
				</div>
				</center>
			</div>
			<div class="card">
				<center><img src="images/creator/Gaurav.jpeg"></center>
				<center><div class="card-title">Gaurav Diware</div>
				<div id="detail">
					<p>“ Real education should consist of drawing the goodness and the best out of our own students. What better books can there be than the book of humanity “</p>
					<div class="duty"></div>
					<a href="https://www.linkedin.com/in/gaurav-diware-433311204/_blank"><button class="btn-gaurav">Follow +</button></a>
				</div>
				</center>
			</div>
			<div class="card">
				<center><img src="images/creator/Nikhil.jpeg"></center>
				<center><div class="card-title">Nikhil Badgujar</div>
				<div id="detail">
					<p>“ Real education should consist of drawing the goodness and the best out of our own students. What better books can there be than the book of humanity “</p>
					<div class="duty"></div>
					<a href="https://in.linkedin.com/in/nikhil-badgujar-995ab9252" target="_blank"><button class="btn-nikhil">Follow +</button></a>
				</div>
				</center>
			</div>
		</div>
	</div>


<!-- SERVICES -->
	<div class="service-swipe">
		<div class="diffSection" id="services_section">
		<center><p style="font-size: 50px; padding: 100px; padding-bottom: 40px; color: #fff;">Services</p></center>
		</div>
		<a href="subjects/computer_courses.php"><div class="s-card"><img src="images/icon/computer-courses.png"><p>Free Online Computer Courses</p></div></a>
		<a href="subjects/gate_preparation.php"><div class="s-card"><img src="images/icon/brainbooster.png"><p>Building Concepts for Gate Exams</p></div></a>
		<a href="#"><div class="s-card"><img src="images/icon/online-tutorials.png"><p>Online Video Lectures</p></div></a>
		<a href="subjects/gate_preparation.php#sample_papers"><div class="s-card"><img src="images/icon/papers.jpg"><p>Sample Papers of Various Competitive Exams</p></div></a>
		<a href="#"><div class="s-card"><img src="images/icon/p3.png"><p>Performance and Ranking Report</p></div></a>
		<a href="#contactus_section"><div class="s-card"><img src="images/icon/discussion.png"><p>Discussion with Our Tutors & Mentors</p></div></a>
		<a href="#"><div class="s-card"><img src="images/icon/q1.png"><p>Daily Brain Teasing Questions to Improve IQ</p></div></a>
		<a href="#"><div class="s-card"><img src="images/icon/help.png"><p>24x7 Online Support</p></div></a>
	</div>

<!-- Reviews by Students -->
<div id="makeitfull">
	<a href="#review_section"><img src="images/icon/makeitfull.png"></a>
</div>
<div class="review">
	<div class="diffSection" id="review_section">
		<center><p style="font-size: 40px; padding: 100px; padding-bottom: 40px; color: #2E3D49;">What the Students Say About Us?</p></center>
	</div>
	<div class="rev-container">
		<div class="rev-card">
			<div class="identity">
				<img src="images/creator/mohit.jpg"><p>Mohitsing Chaudhari</p>
				<h6>Aspirant</h6>
				<div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					The website provides well-structured content and covers the entire GATE syllabus effectively.
					I really liked the mock tests—they’re very similar to the real exam.
					It helped me build confidence and track my progress consistently.
				</p>
			</div>
		</div>
		<div class="rev-card">
			<div class="identity">
				<img src="images/creator/pankajk.jpg"><p>Pankaj Koli</p>
				<h6>Aspirant</h6>
				<div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					While the lectures are good, the doubt-clearing system needs improvement.
					Sometimes responses are delayed, which breaks the study flow.
					Adding live sessions with instant interaction would be a big plus.


				</p>
			</div>
		</div>
		<div class="rev-card">
			<div class="identity">
				<img src="images/creator/rohan.jpg"><p>Rohan Ingle</p>
				<h6>Aspirant</h6>
				<div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					This site is a great option for students on a tight budget.
    				You get access to quality materials without spending too much.
					The downloadable notes are also very useful for quick revisions
				</p>
			</div>
		</div>
		<div class="rev-card">
			<div class="identity">
				<img src="images/creator/abhay.jpg"><p>Abhay Chavhan</p>
				<h6>Aspirant</h6>
				<div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					The interface is user-friendly, but the video buffering is sometimes slow.
					Some topics are explained in detail, while others feel rushed.
					With a few updates, it could become one of the best GATE prep platforms.
				</p>
			</div>
		</div>
	</div>
</div>


<!-- FEEDBACK -->
	<!-- feedback.php -->
<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fname'];
    $email = $_POST['mail'];
    $details = $_POST['additional'];

    $stmt = $conn->prepare("INSERT INTO feedback (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $details);

    if ($stmt->execute()) {
        $feedback_msg = "Thank you! Your feedback has been received.";
    } else {
        $feedback_msg = "Something went wrong. Please try again.";
    }
}
?>

<div class="title2" id="feedBACK">
    <span>Give Feedback</span>
    <div class="shortdesc2">
        <p>Please share your valuable feedback with us</p>
    </div>
</div>

<div class="feedbox">
    <div class="feed">
        <?php if (isset($feedback_msg)) echo "<p class='msg'>$feedback_msg</p>"; ?>
        <form action="" method="post">
            <label>Your Name</label><br>
            <input type="text" name="fname" class="fname" required><br>
            <label>Email</label><br>
            <input type="email" name="mail" required><br>
            <label>Additional Details</label><br>
            <textarea name="additional"></textarea><br>
            <button type="submit" id="csubmit">Send Message</button>
        </form>
    </div>
</div>


	<footer>
		<div class="footer-container">
			<img src="images/icon/name.png" style="width: 200px;">
			<div class="left-col">
				<div class="logo"></div>
				<div class="social-media">
					<a href="#"><img src="images/icon\fb.png"></a>
					<a href="#"><img src="images/icon\insta.png"></a>
					<a href="#"><img src="images/icon\tt.png"></a>
					<a href="#"><img src="images/icon\ytube.png"></a>
					<a href="#"><img src="images/icon\linkedin.png"></a>
				</div><br><br>
				<p class="rights-text">have a good day learners</p>
				<br><p><img src="images/icon/location.png">LSP Government College of Engineering Ratnagiri<br>Ratnagiri-415612</Ratnagiri-415612></p><br>
				<p><img src="images/icon/phone.png"> +91-8080-187-067<br><img src="images/icon/mail.png">&nbsp;gauravdiware920@gmail.com</p>
			</div>
			<div class="right-col">
				<h1 style="color: #fff">Our Newsletter</h1>
				<div class="border"></div><br>
				<p>Enter Your Email to get our News and updates.</p>
				<form class="newsletter-form">
					<input class="txtb" type="email" placeholder="Enter Your Email">	
					<input class="btn" type="submit" value="Submit">
				</form>
			</div>
		</div>
	</footer>

</body>
</html>