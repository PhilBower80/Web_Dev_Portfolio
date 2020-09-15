<?php 

include('inc/functions.php');

$forename = $surname = $email = $telephone = $subject = $message = '';
$errors = array('forename'=>'', 'surname'=>'', 'email'=>'', 'telephone'=>'', 'subject'=>'', 'message'=>'');

// Add data to database after checking user entries.

if(isset($_POST['submit'])){

    // check forename
    if(empty($_POST['forename'])){
        $errors['forename'] = 'A forename is required <br />';
    } else {
        $forename = $_POST['forename'];
        
        if(!preg_match('/^[a-zA-Z\s]+$/', $forename)){
            $errors['forename'] = 'Forename must be letters and spaces only!';
        }
    }

    // check surname
    if(empty($_POST['surname'])){
        $errors['surname'] = 'A surname is required <br />';
    } else {
        $surname = $_POST['surname'];
        
        if(!preg_match('/^[a-zA-Z\s]+$/', $surname)){
            $errors['surname'] = 'Surname must be letters and spaces only!';
        }
    }

    // check email
    if(empty($_POST['email'])){
        $errors['email'] = 'An email is required';
    } else {
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'Email must be a valid email address';
        }
    }

    // check telephone
    if(empty($_POST['telephone'])){
        $errors['telephone'] = 'Telephone number is required! <br />';
    } else {
        $telephone = $_POST['telephone'];

       if(!is_numeric($_POST['telephone'])){
            $errors['telephone'] = 'Telephone number must be a numeric value';
        }
    }

    // check subject
    if(empty($_POST['subject'])){
        $errors['subject'] = 'A subject is required <br />';
    } else {
        $subject = $_POST['subject'];

        if(!preg_match('/^[a-zA-Z\s]+$/', $subject)){
            $errors['subject'] = 'Name must be letters and spaces only!';
        }
    }

    // check message
    if(empty($_POST['message'])){
        $errors['message'] = 'Message is required! <br />';
    } else {
        $message = $_POST['message'];
    }
        
    // save to db and check
    if(array_filter($errors)){
        // echo 'errors in the form';
    } else {
    $forename = trim(filter_input(INPUT_POST, 'forename', FILTER_SANITIZE_STRING));
    $surname = trim(filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    $telephone = trim(filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_NUMBER_INT));
    $subject = trim(filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING));
    $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));

    sendMessage($forename, $surname, $email, $telephone, $subject, $message);

    
    
    header('Location: index.php?success=true');
    }

} // end of post check
?>

<?php 
$pageTitle = 'Philip Bower | Contact me';

// include('inc/head.php'); 
// include('inc/header.php');

// include('inc/connection.php');

?>


<section id="contact-me" class="contact-me">

    <div class="section-title">
        <h1 class="section-title">Contact me</h1>
    </div>


    <div class="container contact-container">

        <form class="order-1" action="index.php" method="POST">
            <div class="form-row">
                <div class="form-group">
                    <label for="forename">Forename:</label>
                    <input type="text" name="forename" value="<?php echo htmlspecialchars($forename) ?>">
                    <div class="errorMsg"><?php echo $errors['forename']; ?></div>
                </div>

                <div class="form-group">
                    <label for="surname">Surname:</label>
                    <input type="text" name="surname" value="<?php echo htmlspecialchars($surname) ?>">
                    <div class="errorMsg"><?php echo $errors['surname']; ?></div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
                    <div class="errorMsg"><?php echo $errors['email']; ?></div>
                </div>

                <div class="form-group">
                    <label for="telephone">Telephone number</label>
                    <input type="text" name="telephone" value="<?php echo htmlspecialchars($telephone) ?>">
                    <div class="errorMsg"><?php echo $errors['telephone']; ?></div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input class="form-input" type="text" name="subject" value="<?php echo htmlspecialchars($subject) ?>">
                    <div class="errorMsg"><?php echo $errors['subject']; ?></div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10"><?php echo htmlspecialchars($message) ?></textarea>
                    <div class="errorMsg"><?php echo $errors['message']; ?></div>
                </div>
            </div>

            <div class="form-row">
                <button type="submit" name="submit">Send Message</button>
                <span>
                    <?php
                    if ( isset($_GET['success']) && $_GET['success']==true ) {
                        echo "Message Sent Successfully";
                    } 
                    ?>
                </span>
            </div>

        </form>

        <div class="order-2">
            <img class="mailbox" src="./img/contact-me.jpg" alt="contact me image">
        </div>

    </div>
</section>