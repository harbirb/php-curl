<?php require "header.html" ?>

<h1>New Repository</h1>

<form action="create.php" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">

    <label for="description">Description</label>
    <textarea name="description" id="description"></textarea>

    <button>Submit</button>
</form>

<?php require "footer.html" ?>