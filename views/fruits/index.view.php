<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<lable>filter by less calories than</lable>
<form method="GET">
  <input name='Calories' value='<?= ($_GET["Calories"] ?? "") ?>'/>
  <button>Filter by calories</button>
</form>

<?php
$caloriesFilter = isset($_GET['Calories']) ? (int)$_GET['Calories'] : null;
foreach($posts as $post) {
  if ($caloriesFilter === null || $post["Calories"] < $caloriesFilter) { ?>
    <li>
      <a href="/show?id=<?= $post["id"]?>"><?= htmlspecialchars($post["fruit_name"])?><?=" has "?><?= htmlspecialchars($post["Calories"])?></a>
      <form class="delete-form" method="POST" action="/delete"><button name="id" value="<?= $post["id"] ?>">Delete</button></form>
    </li>
<?php } elseif ($post["Calories"] < $caloriesFilter) { ?>
    <li>
      <a href="/show?id=<?= $post["id"]?>"><?= htmlspecialchars($post["fruit_name"])?></a>
      <form class="delete-form" method="POST" action="/delete"><button class="delete-button" name="id" value="<?= $post["id"] ?>">Delete</button></form>
    </li>
<?php } } ?>

</ul>
<?php require "views/components/footer.php" ?>