<html>

<head>
    <title>Tampil Data Matakuliah</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Matakuliah
                </th>
            </tr>
            <tr>
                <td colspan="3">
                     <hr>
                </td>
            </tr>
            <tr>
                <td>kode MTK</td>
                <th>:</th>
                <td>
                     <?= $kode; ?>
                </td>
             </tr>
             <tr>
                <td>nama MTK</td>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td>
                    <?= $sks; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                     <a href="<?= base_url('matakuliah'); ?>">kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>