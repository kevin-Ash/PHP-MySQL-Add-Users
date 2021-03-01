<?php
/* 
    - Everytime user returns to add user page, we must check if any data has been submitted.
    - Therefore; 
    if data submitted then return the required page,
    else return the empty form submission page.

    - isset($_GET['key name']) - checks if variable value has been set
    if any data has been sent via the GET/POST methods.

    - $_GET - global var (array where name of input is stored)

    - XSS attacks
    Adding JS to an entry field such as
    <script>window.location="url"</script>
    redirects to urls
    htmlspecialchars() converts into html entities, e.g. tags <p></p> gets converted into special html characters

    - Form Validation
    built in empty() function
*/

/* 
    - Associative (key => value) array for error messages
    initialize with empty value to store value for set key
*/
$errors = array(
    'firstName' => '', 
    'lastname' => '', 
    'email' => '',
    'dev-level' => '', 
    'skill-level' => '');

if(isset($_POST['submit'])) {
    if(empty($_POST['firstName'])){
        $errors['firstName'] = 'A first name is required! <br>';
    } else {
        /* echo htmlspecialchars($_POST['firstName ']); */

         /* 
        - Inside delimiter / /
        - from start ^
        - including range a-z
        - A_Z ?
        - one or more +
        - to end $
        */

        $firstName = $_POST['firstName'];
        if(!preg_match('/^[a-zA_Z]+$/', $firstName)) {
            $errors['firstName'] = 'First name can contain only letters & spaces <br>';
        }
    }
    if(empty($_POST['lastName'])){
        $errors['lastName'] = 'Last name is required! <br>';
    } else {
       /*  echo htmlspecialchars($_POST['lastName']); */

       $lastName = $_POST['lastName'];      
       if(!preg_match('/^[a-zA_Z]+$/', $lastName)) {
        $errors['lastName'] = 'Last name can contain only letters & spaces <br>';
    }
    }
    if(empty($_POST['email'])) {
        $errors['email'] = 'A valid email address is required <br>';
    } else {
        /* echo htmlspecialchars($_POST['email']); */
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'Not a valid email address, please try again <br>';
        }
    }
    if(empty($_POST['select-dev-level'])){
        $errors['dev-level'] = 'Your developer level is required! <br>';
    } 
    /* echo htmlspecialchars($_POST['select-dev-level']); */
    
    if(empty($_POST['select-skill-level'])){
        $errors['dev-level'] = 'Your skill level is required! <br>';
    }
    /*  echo htmlspecialchars($_POST['select-skill-level']); */
   
}



?>

<!-- HTML DOM --> 
<!DOCTYPE html>

<html lang="en">
<!-- Head template -->   
<?php include('./templates/header.php') ?>

<!-- Form -->
<section id="add-user-form" class="container">

<h4>Add a User to Database</h4>

    <form action="add_user.php" method="POST" style="margin: 2rem 0;">
        <fieldset class="form-group">
                <div class="form-group row">
                    <label for="firstName"  class="col-sm-3 col-form-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="firstName" class="form-control" id="firstName" placeholder="First name here">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="lastName"  class="col-sm-3 col-form-label">Last Name</label>
                    <div class="col-sm-9">
                        <!-- Input type as, 'text', rather than, 'email' for custom validation with PHP FILTERs-->
                        <input type="text" name="lastName" class="form-control" id="firstName" placeholder="Last name here">
                    </div>
                </div>

                <div class="form-group">
                    <label for="emailAddress" class="col-form-label">Email address</label>
                    <input type="text" name="email" class="form-control" id="emailAddress" aria-describedby="inputEmail" placeholder="example@address.com">
                    <small id="inputEmail" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                
                <div class="form-group">
                <label for="profession" class="col-form-label">Profession</label>
                    <select name="select-dev-level" class="form-control custom-select" id="profLevelSelect">
                        <option value="" selected>Select your developer level</option>
                        <option>Entry level developer</option>
                        <option>Junior developer</option>
                        <option>Senior developer</option>
                        <option>Software engineer</option>
                        <option>Software architect</option>
                    </select>
                </div>

                <div class="form-group">
                <label for="skill-level" class="col-form-label">Skill Level</label>
                    <select name="select-skill-level" class="form-control custom-select" id="xpLevelSelect">
                        <option value="" selected>Select your skill level</option>
                        <option>Beginner</option>
                        <option>Intermediate</option>
                        <option>Advanced</option>
                    </select>
                </div>
                <button id="submit" value="submit" name="submit" type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
        </form>
    
</section>
<!-- Footer template -->
<?php include('./templates/footer.php') ?>