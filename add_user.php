<?php
  
?>
<!DOCTYPE html>

<html lang="en">
    
<?php include('./templates/header.php') ?>
<section id="add-user-form" class="container">

<h4>Add a User to Database</h4>
    <form action="" style="margin: 1rem 0;">
        <fieldset class="form-group">
                <div class="form-group row">
                    <label for="firstName"  class="col-sm-3 col-form-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="firstName" class="form-control" id="firstName" value="First name here">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="lastName"  class="col-sm-3 col-form-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="firstName" class="form-control" id="firstName" value="Last name here">
                    </div>
                </div>

                <div class="form-group">
                    <label for="emailAddress" class="col-form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="emailAddress" aria-describedby="inputEmail" placeholder="example@address.com">
                    <small id="inputEmail" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                    <label for="passwordInput" class="col-form-label">Password</label>
                    <input type="password" class="form-control" id="passwordInput" placeholder="Password">
                </div>

                <div class="form-group">
                <label for="profession" class="col-form-label">Profession</label>
                    <select class="form-control" id="exampleSelect1">
                        <option>Entry level developer</option>
                        <option>Junior developer</option>
                        <option>Senior developer</option>
                        <option>Software engineer</option>
                        <option>Software architect</option>
                    </select>
                </div>

    
                <fieldset class="form-group">
                   <label for="skill-level" class="col-form-label">Current Skill level</label>

                   <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                        Beginner
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                        Intermediate
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3">
                        Advanced
                        </label>
                    </div>
                </fieldset>

                <button id="submit" value="submit" name="submit" type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
        </form>
    
</section>
<?php include('./templates/footer.php') ?>