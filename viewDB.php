<?php
include "connectToDB.php";
$result = mysqli_query($mysqli, "SELECT * FROM `images`");
?>
</php>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фомин 221-361 лабораторная 5</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>
    <header>
        <div>
            <h1 id="title"> Лабораторная 5 </h1>
        </div>
        <div>
            <ul class="listHeader">
                <li>
                    <a href="index.php">PageConnection</a>
                </li>
                <li>
                    <a href="viewDB.php" class="currentPage">PageView</a>
                </li>
            </ul>
        </div>
    </header>
    <main>
        <div class="box">
            <?php
            while ($name = mysqli_fetch_assoc($result)) {

                $query = "SELECT * FROM terms ORDER BY RAND() LIMIT 1";
                $termResult = mysqli_query($mysqli, $query);
                $term = mysqli_fetch_assoc($termResult);
            ?>
    
                <div class="filters__img">
                    <img title="<?php echo $name['path']; ?>" src="<?php echo $name['path']; ?>" />

                    <div class="container">
                        <form>
                            <?php echo $term['name']; ?> 
                        </form>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        </div>
    </main>
</body>

</html>