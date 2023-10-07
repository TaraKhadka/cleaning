<html>
<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "cleaning";

$conn = mysqli_connect($server, $user, $password, $database);
if (!$conn) {
    die("Connection Error" . mysqli_connect_error());
} else {
    echo "Connection Successful";
}
echo "<br>";

$sql = "SELECT * FROM `login` ";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
echo "$num";
?>

<table border="1">
    <tr>
        <td>S.N</td>
        <td>name/email</td>
        <td>password</td>
    </tr>

    <?php
    if ($num > 0) {
    ?>
        <tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                <td><?php echo ($row['id']) ?></td>
                <td><?php echo ($row['name']) ?></td>
                <td><?php echo ($row['password']) ?></td>

        </tr>
    <?php
            }}
    ?>

</table>

</html>