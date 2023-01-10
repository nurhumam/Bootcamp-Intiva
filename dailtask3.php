<?php 

$source = [
	[
		"name" => "Terry Medhurst", 
		"age" => 50, 
		"university" => "Capitol University" 
	], 
	[
		"name" => "Sheldon Quigley", 
		"age" => 28, 
		"university" => "Stavropol State Technical University" 
	], 
	[
		"name" => "Terrill Hills", 
		"age" => 38, 
		"university" => "University of Cagayan Valley" 
	], 
	[
		"name" => "Miles Cummerata", 
		"age" => 49, 
		"university" => "Shenyang Pharmaceutical University" 
	], 
	[
		"name" => "Mavis Schultz", 
		"age" => 38, 
		"university" => "Estonian University of Life Sciences" 
	], 
	[
		"name" => "Alison Reichert", 
		"age" => 21, 
		"university" => "Universidade da Beira Interior" 
	], 
	[
		"name" => "Oleta Abbott", 
		"age" => 31, 
		"university" => "Institut Sains dan Teknologi Al Kamal" 
	], 
	[
		"name" => "Ewell Mueller", 
		"age" => 29, 
		"university" => "Wenzhou Medical College" 
	], 
	[
		"name" => "Demetrius Corkery", 
		"age" => 22, 
		"university" => "Nanjing University of Economics" 
	], 
	[
		"name" => "Eleanora Price", 
		"age" => 37, 
		"university" => "Melaka City Polytechnic" 
	], 
	[
		"name" => "Marcel Jones", 
		"age" => 39, 
		"university" => "Hodeidah University" 
	], 
	[
		"name" => "Assunta Rath", 
		"age" => 42, 
		"university" => "Kiev Slavonic University" 
	], 
	[
		"name" => "Trace Douglas", 
		"age" => 26, 
		"university" => "Dallas Christian College" 
	], 
	[
		"name" => "Enoch Lynch", 
		"age" => 21, 
		"university" => "University of Sri Jayawardenapura" 
	], 
	[
		"name" => "Jeanne Halvorson", 
		"age" => 26, 
		"university" => "Donghua University, Shanghai" 
	], 
	[
		"name" => "Trycia Fadel", 
		"age" => 41, 
		"university" => "Technical University of Mining and Metallurgy Ostrava" 
	], 
	[
		"name" => "Bradford Prohaska", 
		"age" => 43, 
		"university" => "Technical University of Mining and Metallurgy Ostrava" 
	], 
	[
		"name" => "Arely Skiles", 
		"age" => 42, 
		"university" => "Universidade Estadual do Ceará" 
	], 
	[
		"name" => "Gust Purdy", 
		"age" => 46, 
		"university" => "Xinjiang University" 
	], 
	[
		"name" => "Lenna Renner", 
		"age" => 41, 
		"university" => "Moraine Valley Community College" 
	], 
	[
		"name" => "Doyle Ernser", 
		"age" => 23, 
		"university" => "Nanjing University of Traditional Chinese Medicine" 
	], 
	[
		"name" => "Tressa Weber", 
		"age" => 41, 
		"university" => "Universitat Rámon Llull" 
	], 
	[
		"name" => "Felicity O'Reilly", 
		"age" => 46, 
		"university" => "University of lloilo" 
	], 
	[
		"name" => "Jocelyn Schuster", 
		"age" => 19, 
		"university" => "Bashkir State Medical University" 
	], 
	[
		"name" => "Edwina Ernser", 
		"age" => 21, 
		"university" => "Wuhan University of Technology" 
	], 
	[
		"name" => "Griffin Braun", 
		"age" => 35, 
		"university" => "Universitas Bojonegoro" 
	], 
	[
		"name" => "Piper Schowalter", 
		"age" => 47, 
		"university" => "Sultanah Bahiyah Polytechnic" 
	], 
	[
		"name" => "Kody Terry", 
		"age" => 28, 
		"university" => "Science University of Tokyo" 
	], 
	[
		"name" => "Macy Greenfelder", 
		"age" => 45, 
		"university" => "Fuji Women's College" 
	], 
	[
		"name" => "Maurine Stracke", 
		"age" => 31, 
		"university" => "Poznan School of Banking" 
	] 
]; 

// Buatlah syntax code dari nomor-nomor di bawah ini:

/**
* Nomor 1
*
* Tampilkan jumlah total data di atas.
*/ echo "nomor 1 <br/>";
	echo "jumlah total data adalah ". count($source);
	echo "<br/>";
	echo "<br/>";


/**
 * Nomor 2
 * 
 * Tampilkan semua data $source di atas dengan format string:
 * Saya $name berumur $age. Saya berkuliah di $university.
 */ echo "nomor 2 <br/>";
	echo "semua data : <br/>";
	foreach($source as $key => $val) {
  echo "Saya " . $val['name'] . " berumur " . $val['age'] . ". Saya berkuliah di " . $val['university'] . ". <br>";
}
echo "<br/>";

/**
* Nomor 3
*
* Tampilkan semua data yang hanya berumur kurang dari 30 tahun dengan format string
* Saya $name berumur $age. Saya berkuliah di $university.
*/ echo "nomor 3 <br/>";
	echo "semua data yang umurnya di bawah 30 tahun : <br/>";
	foreach($source as $key => $val) {
	if ($val['age'] <= 30) {
  echo "Saya " . $val['name'] . " berumur " . $val['age'] . ". Saya berkuliah di " . $val['university'] . ". <br>";
	}
}
echo "<br/>";

/**
* Nomor 4
*
* Tampilkan rata-rata umur dari semua data di atas.
*/ echo "nomor 4 <br/>";
 $total_age = 0;
foreach($source as $key => $val) {
	$total_age = $total_age + $val['age'];
}
$rata_age = $total_age / count($source);
	echo "rata-rata umur ". $rata_age ."<br/>";
echo "<br/>";

/**
* Nomor 5
*
* Buat berdasarkan kondisi di bawah ini:
* - Jika berumur kurang dari atau sama dengan 30 tahun, maka tambah dengan angka 7 kemudian jumlahkan semua;
* - Jika berumur lebih dari 30 tahun maka kurangi dengan angka 10 kemudian jumlahkan semua;
* Tampilkan dengan format string:
* - Hasil pengolahan umur <= 30 adalah $total_age
* - Hasil pengolahan umur > 30 adalah $total_age
*/ echo "nomor 5 <br/> ";
	$total_age_under = 0;
	$total_age_over = 0;
	foreach($source as $key => $val) {
	if ($val['age'] <= 30) {
		$total_age_under = $total_age_under + $val['age'] + 7;
	} else {

		$total_age_over = $total_age_over + $val['age'] - 10;
		 } 	}
	echo "hasil pengolahan umur <= 30 adalah ". $total_age_under. "<br/>";
	echo "hasil pengolahan umur > 30 adalah ". $total_age_over. "<br/>";