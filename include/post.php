
<?php include './include/koneksi.php' ?>
 

<?php
   $sql = 'select * from post' ;
   $rs = mysqli_query($conn, $sql);
   

   if ($rs->num_rows > 0) 
   { 
    while ($row = mysqli_fetch_row($rs)) 
    {
           $title[] = $row["title"] ;
           $author[] = $row["author_id"];
           $konten[] = $row["konten"];
           $tgl_post[] = $row["tgl_post"];
     }   
    }
else
{
  echo "0 result";
}
 
?>

<?php 
for ($i = 0; $i < $rs->num_rows ; $i++)
echo ('
  <div class="panel" style="border-radius: 0">

        	<div class="header-post Asap">
       		
        		<div class="line-primary"><label><a href="" > '.$title[$i].' </a></label></div>
  	            
  	            <div class="line-secondary s-text"> '.$author[$i].'Farid Wazdi <span style="text-align: right;">'. $tgl_post[$i].'</span></div>

   				<hr/>
        	</div>
	                            
            <div class="body-post" style="display: inline-flex;">
      		          <div class="thumb">
      		        		<img src="./images/header.jpg" class="img-circle" width="120" height="120">
      		          </div>	

      		        	<div class=" post">     		
      		            
                      '.$konten[$i].'

                    </div>
	           
              </div>

            <div class="footer-post">
            
            </div>

 </div>
 <hr>
 ');
 ?>