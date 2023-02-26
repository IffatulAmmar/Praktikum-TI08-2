<<<<<<< HEAD
<?php
// =================
// array indexing
$ar_buah = ['pisang','jambu','pepaya'];

// mencetak salah satu index array
echo $ar_buah[2];

// mencetak total daya array
echo '<br> Jumlah Buah : ' .count($ar_buah);

// menambah data array
$ar_buah[] = "durian";

// menghapus 1 data index ke-1
unset($ar_buah[1]); 

// merubah index ke-2 menjadi buah manggis
$ar_buah[2] = "manggis";

// mencetak seluruh data array
echo "<ol>";
foreach ($ar_buah as $buah){
    echo "<li>$buah</li>";
}
echo "</ol>";

// array asosiatif
$buah = ["P"=>'pisang',"J"=>'jambu',"A"=>'pepaya'];
=======
<?php
// =================
// array indexing
$ar_buah = ['pisang','jambu','pepaya'];

// mencetak salah satu index array
echo $ar_buah[2];

// mencetak total daya array
echo '<br> Jumlah Buah : ' .count($ar_buah);

// menambah data array
$ar_buah[] = "durian";

// menghapus 1 data index ke-1
unset($ar_buah[1]); 

// merubah index ke-2 menjadi buah manggis
$ar_buah[2] = "manggis";

// mencetak seluruh data array
echo "<ol>";
foreach ($ar_buah as $buah){
    echo "<li>$buah</li>";
}
echo "</ol>";

// array asosiatif
$buah = ["P"=>'pisang',"J"=>'jambu',"A"=>'pepaya'];
>>>>>>> 7071fe434baeb69c876afa3b38ab0f290ce4b32d
?>