<h5>Form Tambah Pengguna</h5>
<hr style="height: 12px; background-color: black; border-radius: 10px;">

<form action="Routes/proses.php" method="POST">
    <div class="form-group">
        <label for="">Nama :</label>
            <input class="form-control" type="text" name="username" placeholder="Masukkan Nama"><br>

                <label for="">Password :</label>
                <input class="form-control" type="password" name="password" placeholder="Masukkan Kata Sandi"><br>

<!-- 
                <label for="">Level :</label>
                <span>
                    <option value="" hidden>---</option>
                    <option value="petugas" >Petugas</option>
                    <option value="siswa" >Siswa</option>
                </span> -->

            <input class="btn btn-primary mb-3" type="submit" name="simpanusers" id="">

        <a class="btn btn-danger" href="dashboard.php?pages=users">Kembali</a>
    </div>
</form>




