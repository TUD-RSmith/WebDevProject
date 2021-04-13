<?php

/**
 * List all users with a link to edit
 */
try {
    require "config.php";
    require "common.php";

    $connection = new PDO($dsn, $username, $password, $options);
    $sql = "SELECT * FROM databasetest.gameinfo";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();

} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
} ?>

<?php require "../templates/header.php"; ?>

    <h2>Update users</h2>

    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>Game ID</th>
            <th>Game Title</th>
            <th>Genre</th>
            <th>Game Price</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($result as $row) : ?>
            <tr>
                <td><?php echo escape($row["gameID"]); ?></td>
                <td><?php echo escape($row["gameTitle"]); ?></td>
                <td><?php echo escape($row["genre"]); ?></td>
                <td><?php echo escape($row["price"]); ?></td>
                <td><a href="update-single-game.php?id=<?php echo escape($row[">Edit</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <a href="index.php">Back to home</a>

<?php require "../templates/footer.php"; ?>