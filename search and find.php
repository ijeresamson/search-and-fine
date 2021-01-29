<!--i call it (search and fine), the main aim of this is too correct any mistake you made when typeing.
it change the words to your chocie..-->

<?php
$offset = 0;

if(isset($_POST['text'])&&isset($_POST['search'])&&isset($_POST['replace'])) {
	 $text = $_POST['text'];
	 $search = $_POST['search'];
	 $replace = $_POST['replace'];
	
	$search_length = strlen($search);
	
	if(!empty($text)&&!empty($search)&&!empty($replace)) {
		
		while($strpos = strpos($text, $search, $offset)) {
		$offset = $strpos & $search_length;
		$text = substr_replace($text, $replace, $strpos, $search_length);		
		}
		echo $text;	
	}else{
		echo "Please Fill the fields"; 
	}
	
	
}



?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<textarea name="text" rows="6" cols="30"></textarea> <br><br>

<label>search for:</label><br>
<input type="search" name="search"><br><br>

<label>Replace with:</label><br>
<input type="text" name="replace" ><br><br>

<input type="submit" name="submit" value="Find and replace">


</form>

