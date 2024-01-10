<?php

//koneksi ke database
$koneksi = mysqli_connect("localhost","root","","absensi");

function tambah($data) {
    //ambil data dari elemen, lalu masukan ke dalam variabel
    global $koneksi;

    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $jk = htmlspecialchars($data["jk"]);
    $keterangan = htmlspecialchars($data["keterangan"]);

    $tambah = "INSERT INTO siswa (nama, nis, jk, keterangan, waktu_pengisian) VALUES ('$nama', '$nis', '$jk', '$keterangan', NOW())";

    mysqli_query($koneksi, $tambah);

    return mysqli_affected_rows($koneksi);

}

function ubah($data) {
    global $koneksi;

    //ambil data dari elemen, lalu masukan ke dalam variabel
    $id = htmlspecialchars($data["id"]);
    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $jk = htmlspecialchars($data["jk"]);
    $keterangan = htmlspecialchars($data["keterangan"]);

    //fungsi ubah data
    $ubah = "UPDATE siswa SET nama = '$nama', keterangan = '$keterangan'
    
    WHERE id=$id";

    mysqli_query($koneksi,$ubah);

    return mysqli_affected_rows($koneksi);
}

?>