<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1><?="Fruit name: "?><?=htmlspecialchars($post["fruit_name"]) ?><?=". calorie amount: "?><?=htmlspecialchars($post["Calories"]) ?></h1>

<a href="/edit?id=<?= $post["id"] ?>">edit</a>

<?php require "views/components/footer.php" ?>