<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="js/main.js">
    <title>Daftar Makanan</title>
</head>

<body>
    <div class="container">
        <p class="fs-2 fw-bold">Unsorted List</p>
        <div id="unsortedlist" class="unsortedlist">
            <?php
            $semua_data = array(
                array("Cerita Rasa Nusantara", 1.3),
                array("Shabu Hachi Ampera", 2.2),
                array("Roti Bakar Kemang", 2.8),
                array("McDonald's Jatipadang", 3.0),
                array("Pagi Sore", 3.1),
                array("Roti Bakar Wiwied", 3.6),
                array("Bebek Kaleyo Cilandak", 4.1),
                array("Bulaf Cafe", 4.6),
                array("DeLoRet Resto", 4.7),
                array("Mie Ayam Sari Rasa Pak Rudi", 5.1)
            );
            for ($row = 0; $row < count($semua_data); $row++) {
                for ($col = 0; $col < 1; $col++) {
                    $antrian = rand(1, 10);
                    $estimasi_jarak = $semua_data[$row][1] * 3; //Asumsi 1 km = 3 menit                 
                    $estimasi_antrian = $antrian * 5; //Asumsi 1 antrian = 5 menit
                    $total_waktu = $estimasi_antrian + $estimasi_jarak;
                }
                $angka[$row] = ($antrian);
                $total[$row] = ($total_waktu);
            }

            for ($row = 0; $row < count($semua_data); $row++) {
                $semua_data[$row][2] = $angka[$row];
                $semua_data[$row][3] = $total[$row];
                $data[$row] = $semua_data[$row][3];
            }

            for ($row = 0; $row < count($semua_data); $row++) {
                for ($col = 0; $col < 1; $col++) {
                    echo "<div class=" . "card" . " style=" . "width: 18rem;" . ">";
                    echo "<div class=" . "card-body" . ">";
                    echo "<h5 class=" . "card-title" . ">" . $semua_data[$row][0] . "</h5>";
                    echo "<p class=" . "card-text" . ">Jarak: " . $semua_data[$row][1] . " km</p>";
                    echo "<p class=" . "card-text" . ">Antrian: " . $semua_data[$row][2] . "</p>";
                    echo "<p class=" . "card-text" . ">Waktu Pengiriman: " . $semua_data[$row][3] . " menit</p>";
                    echo "</div>";
                    echo "</div>";
                    echo "<br>";
                }
                $angka[$row] = ($antrian);
                $total[$row] = ($total_waktu);
            }
            ?>
        </div>
        <p>======================================================================================================</p>
        <p class="fs-2 fw-bold">Sorted List</p>
        <div id="sortedlist" class="sortedlist">
            <?php
            function quick_sort($data)
            {
                if (!count($data))
                    return $data;
                $pivot = $data[0];
                $low = $high = array();
                $n = count($data);
                for ($i = 1; $i < $n; $i++) {
                    if ($data[$i] <= $pivot) {
                        $low[] = $data[$i];
                    } else {
                        $high[] = $data[$i];
                    }
                }
                return array_merge(quick_sort($low), array($pivot), quick_sort($high));
            }

            for ($row = 0; $row < count(quick_sort($data)); $row++) {
                for ($i = 0; $i < count(quick_sort($data)); $i++) {
                    if (quick_sort($data)[$row] == $semua_data[$i][3]) {
                        echo "<div class=" . "card" . " style=" . "width: 18rem;" . ">";
                        echo "<div class=" . "card-body" . ">";
                        echo "<h5 class=" . "card-title" . ">" . $semua_data[$i][0] . "</h5>";
                        echo "<p class=" . "card-text" . ">Jarak: " . $semua_data[$i][1] . " km</p>";
                        echo "<p class=" . "card-text" . ">Antrian: " . $semua_data[$i][2] . "</p>";
                        echo "<p class=" . "card-text" . ">Waktu Pengiriman: " . $semua_data[$i][3] . " menit</p>";
                        echo "</div>";
                        echo "</div>";
                        echo "<br>";
                    }
                }
            }
            ?>
        </div>
    </div>
</body>

</html>