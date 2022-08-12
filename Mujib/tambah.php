<body>
    <form action="proses_tambah.php" method="post">
        <div>
            <label>NIS</label>
            <input type="text" name="nis">
        </div>
        <div>
            <label>Nama</label>
            <input type="text" name="nama">
        </div>
        <div>
            <label>Kelas</label>
            <select name="kelas" id="">
                <option value="1">12 RPL</option>
                <option value="2">11 RPL</option>
                <option value="2">10 RPL</option>
            </select>   
        </div>
        <input type="submit" value="simpan">
    </form>
</body>
</html>