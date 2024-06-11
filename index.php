<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data Tabel MySQL</title>
    <style>
        body {font-family: "verdana", arial;}
        table {border-collapse: collapse;}
        th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030;}
        th {background: #33FFD7; font-size: 13px; border-color: #B0B0B0;}
    </style>
</head>
<body>
    <center><h1>Koperasi Sejahtera</h1></center>
    <h3>Tabel anggota</h3>
    <table>
        <thead>
            <tr>
                <th>ID anggota</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Nomer Telepon</th>
                <th>Status Keanggotaan</th>
                <th>Tanggal Bergabung</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $sql = 'SELECT * FROM anggota';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['ID_Anggota'] ?></td>
                    <td><?php echo $row['Nama'] ?></td>
                    <td><?php echo $row['Alamat'] ?></td>
                    <td><?php echo $row['Tanggal_Lahir'] ?></td>
                    <td><?php echo $row['nomor_telepon'] ?></td>
                    <td><?php echo $row['Status_keanggotaan'] ?></td>
                    <td><?php echo $row['Tanggal_Bergabung'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel jenis Pegawai</h3>
    <table>
        <thead>
            <tr>
                <th>ID Pegawai</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Nomor Telepon</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM pegawai';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['ID_Pegawai'] ?></td>
                    <td><?php echo $row['Nama'] ?></td>
                    <td><?php echo $row['Jabatan'] ?></td>
                    <td><?php echo $row['Nomor_Telepon'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Simpanan</h3>
    <table>
        <thead>
            <tr>
                <th>ID Simpanan</th>
                <th>ID Anggota</th>
                <th>ID Pegawai</th>
                <th>Tanggal Simpanan</th>
                <th>Jumlah Simpanan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM simpanan';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['ID_Simpanan'] ?></td>
                    <td><?php echo $row['ID_Anggota'] ?></td>
                    <td><?php echo $row['ID_Pegawai'] ?></td>
                    <td><?php echo $row['Tanggal_Simpanan'] ?></td>
                    <td><?php echo $row['Jumlah_Simpanan'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Pinjaman</h3>
    <table>
        <thead>
            <tr>
                <th>ID Pinjaman</th>
                <th>ID Anggota</th>
                <th>ID Pegawai</th>
                <th>ID Jenis Pinjaman</th>
                <th>Tanggal Pinjaman</th>
                <th>Jumlah Pinjaman</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM Pinjaman';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['ID_Pinjaman'] ?></td>
                    <td><?php echo $row['ID_Anggota'] ?></td>
                    <td><?php echo $row['ID_Pegawai'] ?></td>
                    <td><?php echo $row['ID_Jenis_Pinjaman'] ?></td>
                    <td><?php echo $row['Tanggal_Pinjaman'] ?></td>
                    <td><?php echo $row['Jumlah_Pinjaman'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Jenis Pinjaman</h3>
    <table>
        <thead>
            <tr>
                <th>ID Jenis Pinjaman</th>
                <th>Nama Jenis Pinjaman</th>
                <th>Bunga</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM jenis_pinjaman';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['ID_Jenis_Pinjaman'] ?></td>
                    <td><?php echo $row['Nama_Jenis_Pinjaman'] ?></td>
                    <td><?php echo $row['Bunga'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Keanggotaan</h3>
    <table>
        <thead>
            <tr>
                <th>ID Keanggotaan</th>
                <th>ID Anggota</th>
                <th>Status Keanggotaan</th>
                <th>Tanggal Bergabung</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM keanggotaan';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['ID_Keanggotaan'] ?></td>
                    <td><?php echo $row['ID_Anggota'] ?></td>
                    <td><?php echo $row['Status_Keanggotaan'] ?></td>
                    <td><?php echo $row['Tanggal_Bergabung'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

</body>
</html>

