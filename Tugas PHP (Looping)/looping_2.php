<?php
    for ($i=9; $i >= 1 ; $i--) { //inisialisasi pada variabel i yaitu 9, Maka loop dimulai dari 9 kemudian melakukan pengecekan kondisi apakah nilai pada variabel i >= 1, jika kondisi benar maka akan menjalankan inner loop, kemudian terjadi proses decrement.
        for ($j=1; $j <= $i ; $j++) { //inisialisasi pada variabel j yaitu 1, Maka loop dimulai dari 1 kemudian melakukan pengecekan kondisi apakah nilai j lebih kecil dari nilai i pada outer loop, jika kondisi benar makan akan mencetak nilai dari variabel j, kemudian increment dan looping kembali sampai memenuhi kondisi akhir j <= i 
             echo "*"; //mencetak bintang
        }
        echo "<br>";//mencetak baris
    }
?>