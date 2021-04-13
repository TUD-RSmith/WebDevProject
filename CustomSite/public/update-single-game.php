<?php

require "config.php";
require "common.php";

if (isset($_POST['submit'])) {
    try {
        $connection = new PDO($dsn, $username, $password, $options);
        $gameuser =[
            "gameID"     => $_POST['gameID'],
            "gameTitle"  => $_POST['gameTitle'],
            "genre"      => $_POST['genre'],
            "price"      => $_POST['price'],
        ];

        $sql = "UPDATE databasetest.gameinfo
            SET gameID = :gameID,
                gameTitle = :gameTitle,
                genre = :genre,
                price = :price,
            WHERE gameID = :gameID";

        $statement = $connection->prepare($sql);
        $statement->execute($gameuser);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

if (isset($_GET['gameID'])) {
    try {
        $connection = new PDO($dsn, $username, $password, $options);
        $gameID = $_GET['gameID'];
        $sql = "SELECT * FROM databasetest.gameinfo WHERE databasetest.gameID = :gameID";
        $statement = $connection->prepare($sql);
        $statement->bindValue(':gameID', $gameID);
        $statement->execute();

        $user = $statement->fetch(PDO::FETCH_ASSOC);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
} else {
    echo "Something went wrong!";
    exit;
}
?>

<?php require "../templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) : ?>
    <?php echo escape($_POST['gameTitle']); ?> successfully updated.
<?php endif; ?>

    <h2>Edit a user</h2>

    <form method="post">
        <?php foreach ($gameuser as $key => $value) : ?>
            <label for="<?php echo $key; ?>"><?php echo ucfirst($key); ?></label>
            <input type="text" name="<?php echo $key; ?>" id="<?php echo $key; ?>" value="<?php echo escape($value); ?>" <?php echo ($key === 'id' ? 'readonly' : null); ?>>
        <?php endforeach; ?>
        <input type="submit" name="submit" value="Submit">
    </form>

    <a href="index.php">Back to home</a>

<?php require "../templates/footer.php"; ?>