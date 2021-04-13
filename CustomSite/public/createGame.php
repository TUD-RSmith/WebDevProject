<?php

/**
 * Use an HTML form to create a new entry in the
 * users table.
 *
 */


if (isset($_POST['submit'])) {
    require "config.php";
    require "common.php";

    try {
        $connection = new PDO($dsn, $username, $password, $options);

        $new_user = array(
            "gameTitle"  => $_POST['gameTitle'],
            "genre"     => $_POST['genre'],
            "price"       => $_POST['price']
        );

        $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "gameinfo",
            implode(", ", array_keys($new_user)),
            ":" . implode(", :", array_keys($new_user))
        );

        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }

}
?>

<?php require "../templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) { ?>
    > <?php echo $_POST['gameTitle']; ?> successfully added.
<?php } ?>

    <h2>Add a user</h2>

    <form method="post">
        <label for="gameTitle">Game Title</label>
        <input type="text" name="gameTitle" id="gameTitle">
        <label for="genre">Genre</label>
        <input type="text" name="genre" id="genre">
        <label for="price">Price</label>
        <input type="text" name="price" id="price">

        <input type="submit" name="submit" value="Submit">
    </form>

    <a href="index.php">Back to home</a>

<?php require "../templates/footer.php"; ?>