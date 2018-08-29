<?php include "partials/header.php"; ?>

<h1>Add new player</h1>
<p>Add a new Heat player for the contest</p>

<form action="index.php?page=heat&action=submit" method="post">
    <input type="text" name="name" placeholder="Name" required /><br/><br/>
    <input type="number" name="age" placeholder="Age" required /><br/><br/>
    <input type="number" name="accuracy" placeholder="Accuracy" required /><br/><br/>
    
    <input class="btn btn-primary" type="submit" value="Create"/>
    <a class="btn btn-default" href="index.php?page=heat">Go Back</a>
</form>

<?php include "partials/footer.php"; ?>
