<?php
  
?>
<!DOCTYPE html>

<html lang="en">
    
<?php include('./templates/header.php') ?>
<section id="add-user-form" class="container">

<h4 >Add a User to DataBase</h4>
    <form action="">
        <fieldset>
            <legend>Use form below to add a user</legend>

                <div class="form-group row">
                    <label for="firstName"  class="col-sm-2 col-form-label">First Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="firstName" class="form-control-plaintext" id="firstName" value="Sir Bobbington">
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>

                <div class="form-group">
                <label for="exampleSelect1">Example select</label>
                <select class="form-control" id="exampleSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                </div>

                <div class="form-group">
                <label for="exampleSelect2">Example multiple select</label>
                <select multiple="" class="form-control" id="exampleSelect2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                </div>

                <fieldset class="form-group">
                <legend>Checkboxes</legend>
                <div class="form-check">
                    <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="" checked="">
                    Option one is this and that—be sure to include why it's great
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="" checked="">
                    Option two is this and that—be sure to include why it's great
                    </label>
                </div>
                </fieldset>

              

                <button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
        </form>
    
</section>
<?php include('./templates/footer.php') ?>