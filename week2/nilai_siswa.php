<?php 
        // ambil data yang dikirim dari form
        // panggil file function untuk menggunakan code yang ada di file tersebut
        require_once 'function.php';
        $name = isset($_POST['name']) ? $_POST['name'] : "";
        $mata_kuliah = isset($_POST['matkul']) ? $_POST['matkul'] : "";
        $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : "";
        $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : "";
        $nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : "";
        $nilai_rata = isset($_POST['nilai_uts']) && isset($_POST['nilai_uas']) ? ($nilai_uts + $nilai_uas + $nilai_uas) / 3 : "";
        $keterangan = $nilai_rata != "" ? kelulusan($nilai_rata) : "";
        $grade = $nilai_rata != ""  ? grade($nilai_rata):"";


        // mencetak nilai variable
        echo "Nama Anda : $name";
        echo "<br> Mata Kuliah : $mata_kuliah";
        echo "<br> Nilai UTS : $nilai_uts";
        echo "<br> Nilai UAS : $nilai_uas";
        echo "<br> Nilai Tugas : $nilai_tugas";
        echo "<br> Rata-Rata : $nilai_rata";
        echo "<br> Keterangan : $keterangan";
        echo "<br> Grade : $grade";
        ?>