<html>

<head></head>

<body>
    <h2>Daftar Program Kerja BEM</h2>
    <a href="controller=m_programKerja/c_programKerja">Tambah Proker</a>
	<br><br>

    <table border="1">
        <tr>
            <td>No</td>
            <td>Nama Program Kerja</td>
            <td>Surat Keterangan</td>
        </tr>

        <?php
        $count = 0;
        foreach ($queryAllMhs as $row) {
            $count = $count + 1;
        ?>
            <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $row->nim ?></td>
                <td><?php echo $row->nama ?></td>
                <td><?php echo $row->jurusan ?></td>
            </tr>
        <?php } ?>
</html>