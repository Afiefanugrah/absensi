<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-dashboard.css" />
    <title>Dashboard Admin</title>
</head>
<body>
    <div>
        <table class="table">
            <tr class="tr">
                <th class="th">No.</th>
                <th class="th">Nama</th>
                <th class="th">Jabatan</th>
                <th class="th">Tanggal</th>
                <th class="th">Clock In</th>
                <th class="th">Clock Out</th>
            </tr>
        

        <?php
        include("../connection.php");
        session_start();
        $user_id = $_SESSION['user_id'];


        $sql = "SELECT * FROM users JOIN absensi ON users.user_id = absensi.user_id";
        
        $result = $db->query($sql);
        $no = 1;

        while ($data = $result->fetch_assoc()) {
            echo "<tr class='tr'>";
            echo "<td class='td'>" . $no++ . "</td>";
            echo "<td class='td'>" . $data['nama_lengkap'] . "</td>";
            echo "<td class='td'>" . $data['role'] . "</td>";
            echo "<td class='td'>" . $data['tgl'] . "</td>";
            echo "<td class='td'>" . $data['jam_masuk'] . "</td>";
            echo "<td class='td'>" . $data['jam_keluar'] . "</td>";
            echo "</tr>";
        }
        ?>
        </table>
    </div>
    <div class="div_print">
        <button class="div_print" onclick="window.print()">CETAK LAPORAN</button>
    </div>
</body>
</html>