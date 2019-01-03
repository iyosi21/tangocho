<?php
    $csv = array();
    $fg = fopen("word.csv", "r");
    while(($data = fgetcsv($fg, 0, ","))!== FALSE){
        $csv[] = $data;
    }
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>単語帳</title>
<body>

<?php
    $key_id = mt_rand(1,count($csv)) - 1;
    print_r($csv[$key_id][1]);
    echo nl2br("\n");
?>
    
<p id="p1">
    <?php
    print_r($csv[$key_id][2]);
    ?>    
</p>

<input type="button" value="意味を表示" onclick="btn1_click()" /><br/>
<input type="button"  value="更新" onclick="koshin()"><br/>
    
<script>
//初期表示は非表示
document.getElementById("p1").style.display ="none";

function btn1_click(){
	var y1 = document.getElementById("p1");

	if(y1.style.display=="block"){
		// noneで非表示
		y1.style.display ="none";
	}else{
		// blockで表示
		y1.style.display ="block";
	}
}
    
function koshin(){
  location.reload();
}

</script>
        
</body>
</html>
