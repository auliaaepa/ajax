<?php
    include 'koneksi.php';

    $kecamatan = $_POST['kecamatan'];

    echo "<option value=''>Pilih Kelurahan</option>";

    $query = "SELECT * FROM subdistricts WHERE dis_id=? ORDER BY subdis_name ASC";
    $exec = $db->prepare($query);
    $exec->bind_param("i", $kecamatan);
    $exec->execute();
    $kelurahan = $exec->get_result();

    while ($row = $kelurahan->fetch_assoc()) {
        echo "<option value='" . $row['subdis_id'] . "'>" . $row['subdis_name'] . "</option>";
    }
?>