<pre>
<?php 
    //------------------------ SELECT ---------------------------
    require_once 'config/database.php';

    $id = 3;

    $res = $pdo->prepare("SELECT * FROM person WHERE id = :id");
    $res->bindParam(":id", $id);
    $res->execute();

    $response = $res->fetch(PDO::FETCH_ASSOC);

    foreach ($response as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }

?>
</pre>