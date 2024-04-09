<?php require "views/components/head.php";?>
<?php require "views/components/navbar.php";?>

<h1><?= isset($post) ? 'Edit a post' : 'Create a post' ?></h1>

<form method="POST">
    <?php if(isset($post)): ?>
        <input name="id" value="<?= $post["id"] ?>" type="hidden" />
    <?php endif; ?>
    <label>fruit name:
        <input name="fruit_name" value="<?= $_POST["fruit_name"] ?? ($post["fruit_name"] ?? '') ?>">
        <?php if (isset($errors["fruit_name"])){ ?>
            <p class="invalid-data"><?= $errors["fruit_name"] ?></p>
        <?php } ?>
    </label>

    <label>Calorie amount:
        <input name="Calories" value="<?= $_POST["Calories"] ?? ($post["Calories"] ?? '') ?>">
        <?php if (isset($errors["Calories"])){ ?>
            <p class="invalid-data"><?= $errors["Calories"] ?></p>
        <?php } ?>
    </label>
   
    <button>Save</button>
</form>

<?php require "views/components/footer.php";?>