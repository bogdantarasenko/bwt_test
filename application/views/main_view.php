
<?//dd($data);?>


<?

foreach ($data as $days) {
	//dd($days);
	foreach ($days as $weather) {
		echo $weather."<br>";
	}
	echo "<br>";

}

?>