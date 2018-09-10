<form action=" rekursif.php" method="POST">
            input n : <input type="text" name="n" min="1"><br>
                <input type="submit" name="submit" value="tampil">
        </form>

<?php


function baris ($n){
	if ($n >= 1) {
		kolom($n);
		echo "<br>";
		$n--;
		baris ($n);
	}
}
function kolom ($baris,$kolom =1){
	echo "*";
	$kolom++;
	if ($kolom <=$baris)
		kolom ($baris,$kolom);
	
}
if (isset($_POST ["submit"])) {

		$n = $_POST ["n"];
		baris($n);
		// genap_ganjil($n);



	echo "<br>";
	echo "-------------------------------------------------";
	echo "<br>";
}
function baris2($awal, $batas){
	kolom2(1, $awal);
	echo "<br>";
	$awal++;
	if($awal <= $batas)	
		baris2($awal, $batas);
}
function kolom2($awal, $batas){
	echo $awal;
	$awal++;
	if($awal <= $batas)
		kolom2($awal,$batas);
}

if (isset($_POST ["submit"])) {
	$n = $_POST["n"]; //10
	baris2(1,$n);
	echo "-------------------------------------------------";
}


?>
