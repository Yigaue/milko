

 <?php require 'partials/head.php';?>

         <h1>All Users</h1>
    <?php foreach ($users as $user): ?>

       <li>  <?= $user->name?></li>

    <?php endforeach ?>

        <h1>Submit Your Name</h1>

        <form action="/users" method="post">
            <input type="text" name="name">
            <button type="submit">Post</button>

        </form>
    

   <?php require 'partials/footer.php';
