<?php
    include 'koneksi.php';

    echo "<option value=''>Pilih Provinsi</option>";

    $query = "SELECT * FROM provinces ORDER BY prov_name ASC";
    $exec = $db->prepare($query);
    $exec->execute();
    $provinsi = $exec->get_result();

    while ($row = $provinsi->fetch_assoc()) {
        echo "<option value='" . $row['prov_id'] . "'>" . $row['prov_name'] . "</option>";
    }
?>