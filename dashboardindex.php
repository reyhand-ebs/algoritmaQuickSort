<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="js/main.js">
</head>

<body>
    <!-- NAVIGATION BAR -->
    <nav class="navbar navbar-expand-lg navbar-light p-3 justify-content-end">
        <a href="index.php"><button class="btn btn-danger">Keluar</button></a>
    </nav>

    <div class="container my-5 border-bottom">
        <?php
        echo "<h1 class="."fw-bold".">Halo, ". $_POST['nama'] . "!</h1>";
        ?>
        <p>Lokasi: Menara 165</p>
    </div>
    <!-- BODY -->
    <?php
    $pages_dir = 'pages';
    if (!empty($_GET['p'])) {
        $pages = scandir($pages_dir, 0);
        unset($pages[0], $pages[1]);

        $p = $_GET['p'];
        if (in_array($p . '.php', $pages)) {
            include($pages_dir . '/' . $p . '.php');
        } else {
            echo 'Halaman tidak ditemukan! :(';
        }
    } else {
        include($pages_dir . '/QuickSort.php');
    }
    ?>
</body>

</html>