//mendeklarasikan dan menmpilkan array
<?php
$arrBuah=array("Mangga", "Apel", "Pisang", "Jeruk");
echo $arrBuah [0]. "<br>"; //Mangga
echo $arrBuah [3]. "<br><br>"; //Jeruk
$arrwarna=array();
$arrwarna[]="Merah";
$arrWarna[]="BIru";
$arrwarna[]="Hijau";
$arrwarna[]="Putih";
echo $arrwarna [0]. "<br>"; //Merah
echo $arrwarna [2]. "<br>"; //Hijau
?>

//Array assosiatif (indeks selain angka)
<?php
$arrNilai=array("Fulan"=>80, "Fulin"=>90, "Fulun"=>75, "Falan"=>85);
echo $arrNilai ['Fulan']."<br>"; //80
echo $arrNilai ['Fulin']."<br><br>"; //90
$arrNilai=array();
$arrNilai ['Amin']=80;
$arrNilai ['Aman']=95;
$arrNilai ['Amen']=77;
echo $arrNilai ['Aman']."<br>"; //95
echo $arrNilai ['Amin']."<br>"; //80
?>

//menampilkan seluruh isi array dengan for dan foreach 
<?php
$arrwarna = array("Red", "Orange", "Yellow", "Green", "Blue", "Purple");
echo "Menampilkan isi array dengan FOR: <br>";
for ($i = 0; $i < count($arrWarna); $i++) {
  echo "Warna pelangi <font color=$arrwarna[$i]>" . $arrWarna[$i] . "</font><br>";
}

echo "<br>Menampilkan isi array dengan FOREACH: <br>";
foreach ($arrwarna as $warna) {
  echo "Warna Pelangi <font color=$warna>". $warna."</font><br>";
}
?>

//menampilkan seluruh isi array asosiatif dengan  foreach & while-list
<?php
$arrNilai = array("Fulan" => 80, "Fulin" => 90, "Fulun" => 75, "Falan" => 85);

echo "Menampilkan isi array asosiatif dengan foreach: <br>";
foreach($arrNilai as $nama => $nilai) {
  echo "Nilai $nama = $nilai<br>";
}
echo "<br>Menampilkan isi array asosiatif dengan WHILE dan LIST:<br>";
$keys = array_keys($arrNilai);
$i = 0;
while ($i < count($keys)) {
  $nama = $keys[$i];
  $nilai = $arrNilai[$nama];
  echo "Nilai $nama = $nilai<br>";
  $i++;
}
?>

//mencetak struktur array
<?php
$arrWarna = array("Blue", "Black", "Red", "Yellow", "Green");
$arrNilai = array("Fulan"=>80, "Fulin"=>90, "Fulun"=>75, "Falan"=>85);

echo "<pre>";
print_r($arrWarna);
echo "<br>";
print_r($arrNilai);
echo "</pre>";
?>

//mengurutkan array dengan sort() & rsort()
<?php
$arrNilai=array("Fulan"=>80, "Fulin"=>90, "Fulun"=>75, "Falan"=>85);
echo "<b>Array sebelum diurutkan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
sort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diurutkan dengan sort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
rsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diurutkan dengan rsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
?>

//mengurutkan array dengan assort() & arsort()
<?php
$arrNilai=array("Fulan"=>80, "Fulin"=>90, "Fulun"=>75, "Falan"=>85);
echo "<b>Array sebelum diurutkan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
asort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diurutkan dengan asort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
arsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diurutkan dengan arsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
?>

//mengrutkan array dengan ksort() &krsort()
<?php
$arrNilai=array("Fulan"=>80, "Fulin"=>90, "Fulun"=>75, "Falan"=>85);
echo "<b>Array sebelum diurutkan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
asort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diurutkan dengan asort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
arsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diurutkan dengan arsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
?>

<?php
$arrNilai=array("Fulan"=>80, "Fulin"=>90, "Fulun"=>75, "Falan"=>85);

echo "<b>Array sebelum diurutkan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

ksort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diurutkan dengan ksort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

krsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diurutkan dengan krsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

asort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diurutkan dengan asort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

arsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diurutkan dengan arsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
?>

//mengatur posisi pointer dalam
<?php
$transport=array('Jalan kaki', 'Onthel', 'Mobil', 'Pesawat');
echo "<pre>";
print_r($transport);
echo "</pre>";
$mode=current($transport);
echo $mode."<br>";
$mode=next($transport);
echo $mode."<br>";
$mode=current($transport);
echo $mode."<br>";
$mode=prev($transport);
echo $mode."<br>";
$mode=end($transport);
echo $mode."<br>";
$mode=current($transport);
echo $mode."<br>";
?>

//mencari elemen array
<?php
$arrBuah=array("Mangga","Apel","Pisang", "Kedondong","Jeruk");
if(in_array("Kedondong", $arrBuah)){
echo "Ada buah Kendodong di dalam array tsb!";
}else {
echo "Tidak ada buah Kedondong di array tersebut";
}
?>

//fungsi tanpa: return value & parameter
<?php
//fungsi ini tanpa return value, & tanpa paramater
function cetak_ganjil(){
for($i = 0; $i < 100; $i++){
if($i%2==1){
echo "$i, ";
}
}
}
//Pemanggilan fungsi
cetak_ganjil();
?>
//fungsi tanpa return value tapi dengan parameter
<?php
//fungsi ini dengan return value, & paramater
function cetak_ganjil_dengan_batas($awal, $akhir){
for($i = $awal; $i <$akhir; $i++){
if($i%2==1){
echo "$i, ";
}
}
}
//Pemanggilan fungsi
$a=10;
$b=50;
echo "<b>Bilangan ganjil dari $a sampai $b, adalah: </b><br>";
cetak_ganjil_dengan_batas($a,$b);
?>

//fungsi dengan return value & parameter
<?php
//Fungsi dengan return value dan parameter
function luas_lingkaran($jari){
  return 3.14 * $jari * $jari;
}
//Pemanggilan fungsi
$r=10;
echo "Luas Lingkaran dengan jari-jari $r = ";
echo luas_lingkaran($r);
?>

//passing by value & reference
<?php
function tambah_string($str){
$str=$str. ", Yogyakarta";
return $str;
}
$string="Universitas Ahmad Dahlan";
echo "\$string = $string<br>";
echo tambah_string($string). "<br>";
echo "\$string = $string<br>";
?>

// tampilkan udf dan fungsi yang didukung php versi saat ini
<?php
// function luas_lingkaran ($jari){
// return 3.14*$jari*$jari;
// }
$arr=get_defined_functions();
echo "<pre>";
print_r($arr);
echo "</pre>";
?>

//cek keberadaan fungsi di versi php saat ini
<?php
// function luas_lingkaran ($jari){
// return 3.14*$jari*$jari;
// }
$arr=get_defined_functions();
echo "<pre>";
print_r($arr);
echo "</pre>";
?>

<?php
// function luas_lingkaran_($jari){
//     return 3.14 * $jari * $jari;
// }

// Mendapatkan daftar fungsi yang didefinisikan
$arr = get_defined_functions();

// Memeriksa apakah fungsi 'luas_lingkaran' didefinisikan
$fungsi_luas_lingkaran_ada = in_array('luas_lingkaran', $arr['user']);
echo "/n";
echo "fungsi luas lingkaran ada:";
echo "$fungsi_luas_lingkaran_ada";
// print_r($arr);