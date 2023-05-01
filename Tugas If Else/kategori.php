   <h2>Kalkulator BMI</h2>
    <form action="">
        <Label>Nama :</Label><br>
        <input type="text" name="nama"><br>
        <Label>Berat Badan :</Label><br>
        <input type="number" name="bb"><br>
        <label>Tinggi Badan :</label><br>
        <input type="number" name="tb"><br>
        <button type="submit" name="proses">Proses</button>
    </form>

    <?php 
    if(isset($_GET['proses'])){
        $nama = $_GET['nama'];
        $tb = $_GET['tb'];
        $bb = $_GET['bb'];

        $tb = $tb/100;
        $hitung = $bb / ($tb * $tb);
        if($hitung <= 18.4){
            echo "Halo $nama. Nilai BMI anda adalah ";
            echo round($hitung, 2);
            echo ", anda termasuk kurus";
        }elseif($hitung <= 25){
            echo "Halo $nama. Nilai BMI anda adalah ";
            echo round($hitung, 2);
            echo ", anda termasuk sedang";
        }elseif($hitung <= 27){
            echo "Halo $nama. Nilai BMI anda adalah ";
            echo round($hitung, 2);
            echo ", anda termasuk gemuk";
        }
    }
    ?>
