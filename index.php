<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pinidu Ransika</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <style>
   
     body {
       overflow-x: hidden;
     }

    .custom-navbar {
      background-color: #1e56c3;
    }

    .custom-margin {
      margin-top: 8rem;
    }

    @media (max-width: 768px) {
      .custom-margin {
        margin-top: 3rem; /*Adjust margin for smaller devices*/
      }
      img {
        width: 100%; /* Make image fully responsive */
        height: auto; /* Maintain aspect ratio */
      }
    }
    .fs{
      width: 30px;
      height: 30px; 
     cursor: pointer;
      
    }
    
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-sm navbar-dark custom-navbar">
    <a href="index.php" class="navbar-brand" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Pinidu Ransika</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#ccsl">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="ccsl">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active" style="font-weight: bold;">
          <a href="index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="education/index.html" class="nav-link">Education</a>
        </li>
        <li class="nav-item">
          <a href="skills/index.html" class="nav-link">Skills</a>
        </li>
        <li class="nav-item">
          <a href="projects/index.html" class="nav-link">Projects</a>
        </li>
        <li class="nav-item">
          <a href="contactme/index.php" class="nav-link">ContactMe</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Content Section -->
  <div class="container">
    <div class="row align-items-center">
      <!-- Text Section -->
      <div class="col-12 col-lg-6 custom-margin text-center text-lg-left mt-lg-3">
        <h1 class="font-weight-bold" style="color: #1e56c3;">Hi! I'm Pinidu</h1>
        <p>
          I'm an undergraduate student specializing in Software Engineering at SLIIT. 
          I'm passionate about learning new skills. Recently, I have held a Pearson Assured Diploma in English from the ESOFT Metro Campus. 
          I have done my A/L's in the Physical Science stream and got 2C & 1S 
          (Subjects - Combined Mathematics, Physics, and Chemistry).
        </p>
      </div>
      <!-- Image Section -->
      <div class="col-12 col-lg-6 text-center mt-3 mt-lg-5 "  >
        <img src="images/img3.png" alt="Profile Picture" 
             class="img-fluid rounded-circle border border-primary ml-lg-5"  
             style="max-width: 350px;">
      </div>
    </div>
    <!--Education Section-->
    <div class="row mt-3">
      <div class="jumbotron mt-5">
        <h1 class=" font-weight-bold" style="color: #1e56c3; ">Education</h1>
        <h5>Sri Lanka Institute of Information Technology</h5>
        <p class="lead">Undergraduate student specializing in Software Engineering </p>
        <p class = "pb-4">Software engineering is the discipline of designing, creating and maintaining software by applying technologies and practices from computer science, project management, engineering, application domains, interface design, digital assets management and other fields.</p>
        <hr>
        <h5>Esoft Metro Campus</h5>
        <p class="lead">Successfully completed a diploma in English.</p>
        <p>Proficiency in English is essential for career success and confidence in business and social interactions. This course enhances listening, speaking, reading, and writing skills using interactive sessions and the latest communicative teaching methods. The syllabus ensures students can use English effectively and confidently</p>
        <a href="" class = "btn btn-outline-primary">Show More</a>
      </div>
    </div>

    <!--Skills Section-->
    
    <div style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
    <h1 class="font-weight-bold mt-3" style="color: #1e56c3; margin: 0;">Skills</h1>
    <a href="skills/index.html" class="btn btn-outline-primary mt-3" style="margin-left: auto;">Show More</a>
    </div>


    <div class="row" >
      
      
    
    <div class="card-deck mt-4">
      
      <!--First Skill-->
      <div class="card" style="background-color: #deeaf6; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <img src="images/img14.png" alt="" class="card-img-top">
        <div class="card-body"> 
          <h5 class="card-title font-weight-bold" style="color: #1e56c3;">Photoshop</h5>
          <p class="card-title">Competent in using essential tools for photo editing, color correction, and simple graphic design tasks. Familiar with layers, masks, and adjustment tools.
          </p>
        </div>
      </div>
      <!--Second skill-->
      <div class="card" style="background-color: #deeaf6; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <img src="images/img35.png" alt="" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title font-weight-bold" style="color: #1e56c3;">Microsft Excel</h5>
          <p class="card-title">Skilled in creating complex formulas, using advanced functions (e.g., VLOOKUP, INDEX-MATCH, PivotTables), automating tasks with macros and VBA, and analyzing data effectively through charts and conditional formatting.</p>
        </div>
      </div>
      <!--Third skill-->
      
      <div class="card" style="background-color: #deeaf6; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <img src="images/img11.png" alt="" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title font-weight-bold" style="color: #1e56c3;">Bootstrap</h5>
          <p class="card-title"> Proficient in using Bootstrap for responsive web design, including grid systems, components, and utilities. Familiar with customizing styles and layouts using CSS overrides.</p>
        </div>
      </div>
    </div>
    </div>
    
  <!--Projects section-->
  

  <!-- Project Section 1 -->
  <div style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
    <h1 class="font-weight-bold mt-3" style="color: #1e56c3; margin: 0;">Projects</h1>
    <a href="projects/index.html" class="btn btn-outline-primary mt-5" style="margin-left: auto;">Show More</a>
    </div>
  <div class="row mt-4 mb-4 align-items-center" style="background-color: #dfe7f9; border-radius: 5px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    <div class="col-lg-6 col-md-6 col-12">
    <h2 class="pt-3 pl-2 text-md-start">Content Creation</h2>
    <p class="pt-2 pl-2" >
      As the creator of a thriving TikTok channel, I have successfully built a community of 10K followers and amassed 84.2K likes, 
      demonstrating my ability to create engaging and relevant content. My channel focuses on diverse topics such as technology tips, 
      gaming, and historical facts, attracting a wide audience. Consistently growing viewership and engagement, building a reputable online presence.
    </p>
    <div class=" text-md-start pb-3 pl-2">
      <a href="#" class="btn btn-outline-primary">Visit Here</a>
    </div>
  </div>
  <div class="col-lg-6 col-md-6 col-12 d-flex justify-content-center align-items-center p-3 ">
    <img src="images/img46.png" alt="Content Creation" class="img-fluid" style="border-radius: 10px; max-width: 100%;">
  </div>
</div>

<!-- Project Section 2 -->
<div class="row mt-4 mb-4 " style="background-color: #dfe7f9; border-radius: 5px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
  <div class="col-lg-6 col-md-6 col-12 ">
    <h2 class="pt-3  text-md-start pl-2">Meeting Room Booking System</h2>
    <p class="pt-2 pl-2" >
      I developed a Meeting Room Booking System using PHP, JavaScript, HTML, CSS, and Bootstrap, showcasing my expertise in full-stack web development. This system is designed to streamline the process of reserving meeting rooms by offering an intuitive interface and efficient booking functionality.
    </p>
    <div class=" text-md-start pl-2 pb-3">
      <a href="#" class="btn btn-outline-primary">Visit Here</a>
    </div>
  </div>
  <div class="col-lg-6 col-md-6 col-12 order-lg-1 d-flex justify-content-center align-items-center p-3">
    <img src="images/img28.png" alt="Content Creation 2" class="img-fluid" style="border-radius: 20px; max-width: 100%;">
  </div>
</div>


<!--Contact me section-->
<h1 class="font-weight-bold mt-5" style="color: #1e56c3;">ContactMe</h1>
<form action="contact.php" method="post" id = "myForm" >
  <?php
  //display error messages
  if(isset($_GET["err"]))
  {
    if($_GET["err"]=="empty_inputs")
    {
      echo "<div class='alert alert-danger text-center' style = ''>
      Fill the all form filelds
      </div>";
    }
    else if($_GET["err"]=="invalid_first_name")
    {
      echo "<div class='alert alert-danger text-center' style = ''>
      Enter Correct First Name (Contain only letters)
      </div>";
    }

    else if($_GET["err"]=="invalid_last_name")
    {
      echo "<div class='alert alert-danger text-center' style = ''>
       Enter Correct Last Name (Contain only letters)
      </div>";
    }

    else if($_GET["err"]=="invalid_email")
    {
      echo "<div class='alert alert-danger text-center' style = ''>
      Enter Correct Email (Ex:ex@gmail.com)
      </div>";
    }
    else if($_GET["err"]=="no_errors")
    {
      echo "<div class='alert alert-success text-center' style = ''>
      Thanks! We will contact you later
      </div>";
    }
  }
  ?>
  <div class="row mt-3 pt-4 mb-3 " >
    <div class="form-group col-md-6 col-sm-12">
      <label for="">First Name</label>
      <input type="text" name="firstname"  class="form-control" placeholder="Enter your first name">
    </div>
    <div class="form-group col-md-6 col-sm-12">
      <label for="">Last Name</label>
      <input type="text" name="lastname" class="form-control" placeholder="Enter your last name">
    </div>
    <div class="form-group col-md-6 col-sm-12">
      <label for="">Email Address</label>
      <input type="email" name="email"  class="form-control" placeholder="Enter your email address">
    </div>
    <div class="form-group col-md-6 col-sm-12">
      <label for="">Message</label>
      <input type="text" name="msg"  class="form-control" placeholder="Enter your message">
    </div>
    <div class="form-group col-md-12">
      <button type = "submit" class="btn btn-success col-md-12" name="btn" >Submit</button>
    </div>

  </div>
</form>

</div>

<div class="container-fluid">
  <div class="row align-items-center mt-5" style="background-color: #1e56c3;">
    <div class="col-md-4 col-sm-4 d-flex flex-column justify-content-center align-items-center">
      <a href="index.php"><h4 style="color: white;" class="mt-2 mt-sm-2">Pinidu Ransika</h4></a>
    </div>
    <div class="col-md-4 col-sm-4 d-flex flex-column justify-content-center align-items-center mt-3 mb-3 mb-sm-3">
      <a href="index.php" style="color: white;" >Home</a>
      <a href="education/index.html" style="color: white;" class="pt-2">Education</a>
      <a href="skills/index.html" style="color: white;" class="pt-2">Skills</a>
      <a href="projects/index.html" style="color: white;" class="pt-2">Projects</a>
      <a href="contactme/index.php" style="color: white;" class="pt-2">ContactMe</a>
    </div>
    <div class="col-md-4 col-sm-4 d-flex flex-column justify-content-center align-items-center">
      <h4 style="color: white;">Follow Me ON</h4>
      <div style="display: flex; justify-content: center; gap: 15px;" class="pb-2 ">
        <a href="https://www.instagram.com/_.pinidu._/profilecard/?igsh=MXc4cGVpMjBnaDRmYg==" target="blank"><img src="images/img29ins.png" alt="Instagram" class="fs "></a>
        <a href="https://web.facebook.com/pinidu.ransika.39" target = "blank"><img src="images/img30fac.png" alt="Facebook" class="fs "></a>
        <a href="https://www.tiktok.com/@mindzone123" target = "blank"><img src="images/img31tik.png" alt="TikTok" class="fs "></a>
        <a href="https://www.youtube.com/@mindzone321" target = "blank"><img src="images/img32yt.png" alt="YouTube" class="fs "></a>
      </div>
    </div>
  </div>
</div>

<!-- <script>
  document.querySelector("form").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent default form submission
    const formData = new FormData(event.target);
    // You can handle the form data here (e.g., send via AJAX)
    console.log("Form submitted with:", Object.fromEntries(formData));
    
  });
</script> -->

<!-- <script>
    const form = document.getElementById('myForm'); // Reference your form by ID

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent page reload
        const formData = new FormData(form);

        fetch('submit_form.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            console.log('Response:', data);
            // Optionally, display a success message or handle the response
        })
        .catch(error => console.error('Error:', error));
    });
</script> -->




</body>
</html>
