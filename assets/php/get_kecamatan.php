<?php
    include 'koneksi.php';

    $kabupaten = $_POST['kabupaten'];

    echo "<option value=''>Pilih Kecamatan</option>";

    $query = "SELECT * FROM districts WHERE city_id=? ORDER BY dis_name ASC";
    $exec = $db->prepare($query);
    $exec->bind_param("i", $kabupaten);
    $exec->execute();
    $kecamatan = $exec->get_result();
    
    while ($row = $kecamatan->fetch_assoc()) {
        echo "<option value='" . $row['dis_id'] . "'>" . $row['dis_name'] . "</option>";
    }
?>