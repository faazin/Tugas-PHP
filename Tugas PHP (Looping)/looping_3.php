<?php
    for ($i=0; $i < 9 ; $i++) { //inisialisasi pada variabel i yaitu 0, Maka loop dimulai 0 kemudian melakukan pengecekan dengan kondisi apakah nilai i < 9, jika kondisi benar maka akan menjalankan inner loop, kemudian terjadi proses increment.
        for ($j=0; $j <= $i ; $j++) { //inisialisasi pada variabel j yaitu 0, Maka loop dimulai dari 0 kemudian melakukan pengecekan dengan kondisi apakah nilai j lebih kecil dari nilai i pada outer loop, jika kondisi benar makan akan mencetak nilai j, kemudian increment dan looping kembali sampai memenuhi kondisi akhir j <= i 
            echo "$j";//mencetak nilai j
        }
        echo "<br>"; //mencetak baris
    }
?>