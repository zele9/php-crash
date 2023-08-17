<?php
//--- $GET & $POST Superglobals
//We can pass data through urls and forms using
//$_GET and $_POST only through forms
//get is preferable in forms when searching for data and not when submitting

if(isset($_POST['submit'])){
    echo $_POST['name'];
    echo $_POST['age'];
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Emmanuel&
age=23">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Your name">
    </div>
    <div>
        <label for="age">Age</label>
        <input type="text" name="age" placeholder="Your age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>



