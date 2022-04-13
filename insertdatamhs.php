<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tamabah data  mahasiswa</title>
</head>
<body>
    <h3>Tambah data mahasiswa</h3>
    <form action="dbinsertdatamhs.php" method="POST">
        NIM
        <div>
            <input type="text" name="tXNIM">
        </div>
        NAMA
        <div>
            <input type="text" name="tXNAMA">
        </div>
        Jenis Kelamin
        <div>
            <select name="txJk" id="">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        JURUSAN
        <div>
            <select name="txJUR" id="">
                <option value="MTI">MTI</option>
                <option value="KAB">KAB</option>
            </select>
        </div>
        Tgl Lahir
        <div>
            <input type="date" name="txTALAG">
        </div>
        PASSCODE
        <div>
            <input type="password" name="txPASS">
        </div>

        <div>
            <button type="submit">Simpan Data</button>
        </div>
    </form>
</body>
</html>