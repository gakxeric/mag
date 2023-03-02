<?php
require("../includes/db_conection.php");
    $db=mysql_select_db("mag1",$dbconection);
    error_reporting(0);
$files=glob("../uploads/*.*");
           for ($i=1; $i < count($files); $i++) { 
           	$image=$files[$i];
           	$supported_file=array('gif','jpg','jpeg','png');
            $ext=strtolower(pathinfo($image,PATHINFO_EXTENSION));
            if (in_array($ext, $supported_file)) {
            	
            	echo '<a href="#"><img style="width:145px;,height:145px;margin-top:5px;margin-left:5px;" src="'.$image.'" alt="Random image"/></a>';
            	 mysql_query("INSERT INTO images (paths)VALUES ('$image')");
            }else {
            	continue;
            }
           }
           if(isset($_POST['select'])){

           }
			if ($_FILES['image']['size']>250000000){
	$msg=$msg."Your uploaded file size is
	more than 250MB so please reduce the
	file size and then upload.<BR>";
	$file_upload="false";
	}
	$file_upload="true";
	$file_up_size=$_FILES['image']['size'];
if ($_FILES['image']['size']>250000000){
	$msg=$msg."Your uploaded file size is more
	than 250mb
	 so please reduce the file size and then
	upload.<BR>";
	$file_upload="false";
}
	$file_name=$_FILES['image']['name'];
	$add="../uploads/$file_name";
 if($file_upload=="true")
{
  if(move_uploaded_file ($_FILES['image']['tmp_name'], $add))
	{
		 
	}
else{echo "Failed to upload file Contact
Site admin to fix the problem";}
}
else{
echo $msg;
}
  echo '<a href="#"><img style="width:145px;,height:145px;margin-top:5px;margin-left:5px;" src="'.$add.'" alt="Random image"/></a>';
echo '<script>
document.getElementById("image").onchange=function(){
	document.getElementById("form").submit();
};
</script>';

		?>