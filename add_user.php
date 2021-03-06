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
    htmlspecialchars() converts into html encoded characters

    - Form Validation
    built in empty() function
*/

if(isset($_POST['submit'])) {
    if(empty($_POST['firstName'])){
        echo('A first name is required! <br>');
    } else {
        /* echo htmlspecialchars($_POST['firstName ']); */
        $firstName = $_POST['firstName'];
        if(!preg_match('/^[a-zA_Z]+$/', $firstName)) {
            echo('First name can contain only letters & spaces <br>');
        }
    }
    if(empty($_POST['lastName'])){
        echo('Last name is required! <br>');
    } else {
       /*  echo htmlspecialchars($_POST['lastName']); */
       $lastName = $_POST['lastName'];
       /* 
        - Inside delimiter / /
        - from start ^
        - including range a-z
        - A_Z ?
        - one or more +
        - to end $
        */
       if(!preg_match('/^[a-zA_Z]+$/', $lastName)) {
        echo('Last name can contain only letters & spaces <br>');
    }
    }
    if(empty($_POST['email'])) {
        echo('A valid email address is required <br>');
    } else {
        /* echo htmlspecialchars($_POST['email']); */
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo('Not a valid email address, please try again <br>');
        }else{}
    }
    if(empty($_POST['select-dev-level'])){
        echo('Your developer level is required! <br>');
    } else {
        echo htmlspecialchars($_POST['select-dev-level']);
    }
    if(empty($_POST['select-skill-level'])){
        echo('Your skill level is required! <br>');
    } else {
        echo htmlspecialchars($_POST['select-skill-level']);
    }
}



?>

<!-- HTML DOM --> 
<!DOCTYPE html>

<html lang="en">
    
<?php include('./templates/header.php') ?>
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
                    <select name="select-dev-level" class="form-control custom-select" id="profLevelSel">
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
                    <select name="select-skill-level" class="form-control custom-select" id="xpLevelSel">
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
<?php include('./templates/footer.php') ?>