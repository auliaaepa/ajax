<?php
    include 'koneksi.php';

    $provinsi = $_POST['provinsi'];

    echo "<option value=''>Pilih Kota/Kabupaten</option>";

    $query = "SELECT * FROM cities WHERE prov_id=? ORDER BY city_name ASC";
    $exec = $db->prepare($query);
    $exec->bind_param("i", $provinsi);
    $exec->execute();
    $kotakab = $exec->get_result();
    
    while ($row = $kotakab->fetch_assoc()) {
        echo "<option value='" . $row['city_id'] . "'>" . $row['city_name'] . "</option>";
    }
?>