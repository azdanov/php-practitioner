<?php require __DIR__.'/partials/head.php'; ?>

    <h1>All Users</h1>

<?php foreach ($users as $user) : ?>
    <li><?php echo $user->name; ?></li>
<?php endforeach; ?>

<h1>Submit Your Name</h1>

<form method="POST" action="/users">
    <input name="name" title="Name">
    <button type="submit">Submit</button>
</form>

<?php require __DIR__.'/partials/footer.php';
