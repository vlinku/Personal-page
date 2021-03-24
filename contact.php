<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <title>CV-Vilius Linkūnaitis</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
   
</head>

<body>
    <header>
        <h1 class="name">VILIUS LINKŪNAITIS</h1>
        <div class="position">ENTRY LEVEL FULL-STACK DEVELOPER</div>
        <br>
        <nav>
            <a href="index.html">ABOUT ME</a>
            <a href="works.html">MY WORKS</a>
            <a href="game.html">GAME</a>
            <a href="contact.php">CONTACT</a>
        </nav>
    </header>
    <br>
    <main class = "main">
<?php
    $errors = array();
    if (empty($_POST) === false) {      
        if (empty($_POST['nameInput'])) {
            $errors['name_undefined'] = 'Please enter your name';
            
        }
        if (empty($_POST['emailInput'])) {
            $errors['email_undefined'] = 'Please enter your email address';
        }
        if (empty($_POST['messageInput'])) {
            $errors['message_undefined'] = 'Please write your message';
        }
        if (empty($_POST['subjectInput'])) {
            $errors['subject_undefined'] = 'Please write the subject';
        }
        if (count($errors) === 0) {
              echo '
              <p class="alert alert-success alert-dismissible fade show message_success" role="alert" >
              Message sent successfully!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </p>
              '; 
        }


        if (count($errors)===0){
            
            $name = $_POST['nameInput'];
            $email = $_POST['emailInput'];   
            $clean_email ="";  
            if ( filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $clean_email = filter_var($email,FILTER_SANITIZE_EMAIL);
            }

            $topic = $_POST['subjectInput'];
            $message = $_POST['messageInput'];
    

            
         $additionalInfo = 'From: ' . $name . ' <' . $clean_email . '>' . "\n";
        
         $sentTo = 'vilius.linkunaitis@gmail.com';
         mail($sentTo, $topic, $message, $additionalInfo);

        }
        
    }
       
?>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <form action="contact.php" method = "post">
                                <div class="mb-3">
                                    <label for="nameInput" class="form-label" > Your Name</label>
                                    <input type="text" class = "form-control <?php echo(isset($errors['name_undefined'])) ? 'is-invalid' : ''; ?>"  minlength ="3" maxlength = "30" id = "nameInput" name = "nameInput">
                                    <?php
                                    if (isset ($errors['name_undefined'])){
                                        echo '<div class="invalid-feedback">';
                                        echo $errors ['name_undefined'];
                                        echo '</div>';
                                    }
                                    ?>
                                </div>
                                <div class="mb-3">
                                    <label for="emailInput" class="form-label"> Your email address</label>
                                    <input type="email" class = "form-control <?php echo(isset($errors['email_undefined'])) ? 'is-invalid' : ''; ?>" minlength ="6" maxlength = "50" id = "emailInput" name = "emailInput">
                                    <?php
                                    if (isset ($errors['email_undefined'])){
                                        echo '<div class="invalid-feedback">';
                                        echo $errors ['email_undefined'];
                                        echo '</div>';
                                    }
                                    ?>
                                </div>
                                <div class="mb-3">
                                    <label for="subjectInput" class="form-label "> Message subject</label>
                                    <input type="text" class = "form-control <?php echo(isset($errors['subject_undefined'])) ? 'is-invalid' : ''; ?>" minlength ="3" maxlength = "50" id = "subjectInput" name = "subjectInput">
                                    <?php
                                    if (isset ($errors['subject_undefined'])){
                                        echo '<div class="invalid-feedback">';
                                        echo $errors ['subject_undefined'];
                                        echo '</div>';
                                    }
                                    ?>
                                </div>
                                <div class="mb-3">
                                    <label for="messageInput" class="form-label"> Your message</label>
                                    <textarea class = "form-control <?php echo(isset($errors['message_undefined'])) ? 'is-invalid' : ''; ?>" maxlength = "500" id = "messageInput" name = "messageInput"></textarea>
                                    <?php
                                    if (isset ($errors['message_undefined'])){
                                        echo '<div class="invalid-feedback">';
                                        echo $errors ['message_undefined'];
                                        echo '</div>';
                                    }
                                    ?>
                                </div>
                                <button type ="submit" class="btn btn-primary">Send message</button>  
                            </form>
                           
                                     
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </main>
    <footer>
        <div class="experience">
            <p>experience</p>
            <hr class="line">
        </div>
        <div class="job">
            <ul>
                <li class="li_first">Area Manager</li>
            </ul>
            <div class="years">2019-2021</div>
        </div>
        <p class="li_second">
        Managed 5 operators work, created weekly manufacture plans, prepared quality documents for production
            department, assesed losses, participated in new project implementations and partly worked as technologist.
        </p>

        <div class="job">
            <ul>
                <li class="li_first">Improvement Manager</li>
            </ul>
            <div class="years">2017-2019</div>
        </div>
        <p class="li_second">
        Substituted process engineer.
            Implemented 5S lean tool in part of factory and managed it.
            <br>
            Implemented projects:
            I. Line supervisor's workplace installation;
            II. Automated racks installation;
            III. Purchase of safety glasses;
            IV. Management of intercompany operators training at site.
        </p>
        <div class="job">
            <ul>
                <li class="li_first">Technologist - Quality manager</li>
            </ul>
            <div class="years">2011-2017</div>
        </div>
        <p class="li_second" class="technologist">
        Food safety and quality assurance according to BRC requirements.
            New product development. Ring tests between Internal and external laboratories. Product sensory analysis.
            Communication with clients regarding food safety and quality questions.
            Performance of internal food safety audit.
            Yearly food safety and quality reports for management.
            <br>
            Project: Creation of internal laboratory.
        </p>
        <div class="experience">
            <p>education</p>
            <hr class="line">
        </div>
        <div class="job">
            <ul>
                <li class="li_first">Vilnius Coding School</li>
            </ul>
            <div class="years">21.01.18 - 21.02.26</div>
        </div>
        <p class="li_second">
        72 hours FULL-STACK web development courses.
            <br>
            Intro to HTML, CSS and CSS bootstrap. Basic knowledge how PHP and JavaScript works. Programmed simple loops,
            arrays, condition if statements. Were introduced to WordPress and it`s manipulation with PHP.
            <br>
            Created 2 projects:
            I. Festivalis ABC - HTML and CSS project.
            II. Final project - Web page about myself. Which contain links to all my works, simple Rock/Paper and
            Scissors game created with JavaScript and contact form, which sends emails.
        </p>
        <div class="job">
            <ul>
                <li class="li_first">KTU</li>
            </ul>
            <div class="years">2005-2011</div>
        </div>
        <p class="li_second" id="last">
        Primary education at Kaunas University of Technology. Master`s degree in food engineering and technology.
            <br>
            In first years we were introduced to programming concept and MS Office applications. Done some calculations
            and graphics using MatLab program.
        </p>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>