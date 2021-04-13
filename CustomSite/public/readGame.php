<?php

/**
 * Function to query information based on
 * a parameter: in this case, location.
 *
 */

if (isset($_POST['submit'])) {
    try {
        require "config.php";
        require "common.php";
        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT *
    FROM databasetest.gameinfo
    WHERE genre = :genre";

        $genre = $_POST['genre'];

        $statement = $connection->prepare($sql);
        $statement->bindParam(':genre', $genre, PDO::PARAM_STR);
        $statement->execute();

        $result = $statement->fetchAll();
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>
<?php require "../templates/header.php"; ?>

<?php
if (isset($_POST['submit'])) {
    if ($result && $statement->rowCount() > 0) { ?>
        <h2>Results</h2>

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
            <?php foreach ($result as $row) { ?>
                <tr>
                    <td><?php echo escape($row["gameID"]); ?></td>
                    <td><?php echo escape($row["gameTitle"]); ?></td>
                    <td><?php echo escape($row["genre"]); ?></td>
                    <td><?php echo escape($row["price"]); ?></td>

                </tr>
            <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        > No results found for <?php echo escape($_POST['genre']); ?>.
    <?php }
} ?>

    <h2>Find user based on location</h2>

    <form method="post">
        <label for="genre">Genre</label>
        <input type="text" id="genre" name="genre">
        <input type="submit" name="submit" value="View Results">
    </form>

    <a href="index.php">Back to home</a>

<?php require "../templates/footer.php"; ?>