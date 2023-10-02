
    <h1>Sistem Parkir</h1>
    <form action="proses.php" method="post">
        <label for="no_plat">Nomor Plat Kendaraan:</label>
        <input type="text" name="no_plat" id="no_plat" required><br><br>

        <label for="jenis_kendaraan">Jenis Kendaraan:</label>
        <select name="jenis_kendaraan" id="jenis_kendaraan" required>
            <option value="motor">Motor</option>
            <option value="mobil">Mobil</option>
            <option value="sepeda">Sepeda</option> <!-- Tambahkan pilihan "Sepeda" -->
        </select><br><br>

        <label for="jam_masuk">Jam Masuk:</label>
        <input type="text" name="jam_masuk" id="jam_masuk" placeholder="HH:MM" required><br><br>

        <label for="jam_keluar">Jam Keluar:</label>
        <input type="text" name="jam_keluar" id="jam_keluar" placeholder="HH:MM" required><br><br>

        <input type="submit" value="Hitung Biaya Parkir">
    </form>

