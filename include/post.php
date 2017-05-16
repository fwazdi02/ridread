
<?php include './include/koneksi.php' ?>
 

<?php
   $sql = "select title,author_id,konten,DATE(tgl_post) from post where status='publish' LIMIT 5" ;
   $rs = mysqli_query($conn, $sql);
   

   if ($rs->num_rows > 0) 
   { 
    while ($row = mysqli_fetch_assoc($rs)) 
    {
           $title[] = $row["title"] ;
           $author[] = $row["author_id"];
           $konten[] = $row["konten"];
           $tgl_post[] = $row["DATE(tgl_post)"];
          
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
  	            
  	            <div class="line-secondary s-text col-1"> '.$author[$i].'Farid Wazdi <span style="text-align: right;">'. $tgl_post[$i].'</span></div>

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

            <div class="panel">
            <div class="pull-right">
              <div class="sociallinepbt">
              share :
              <a href="#" target="_blank" title="Facebook"><i class="fa fa-facebook fa-lg "> </i></a>
              <a href="#" target="_blank" title="Twitter"><i class="fa fa-twitter fa-lg "> </i></a>
              <a href="#" target="_blank" title="Google Plus"><i class="fa fa-google-plus fa-lg "> </i></a>
              <a href="#" target="_blank" title="Pinterest"><i class="fa fa-pinterest fa-lg"> </i></a>
              <a href="#" target="_blank" title="Tumblr"><i class="fa fa-tumblr fa-lg"> </i></a>
              
            </div>
            </div>
            </div>

            </div>

 </div>
 ');



// <div class="sociallinepbt">
//               <a href="#" target="_blank" title="Facebook"><i class="fa fa-lg fa-facebook"> </i></a>
//               <a href="#" target="_blank" title="Twitter"><i class="fa fa-lg fa-twitter"> </i></a>
//               <a href="#" target="_blank" title="Google Plus"><i class="fa fa-lg fa-google-plus"> </i></a>
//               <a href="#" target="_blank" title="Linkedin"><i class="fa fa-lg fa-linkedin"> </i></a>
//               <a href="#" target="_blank" title="Instagram"><i class="fa fa-lg fa-instagram"> </i></a>
//               <a href="#" target="_blank" title="YouTube"><i class="fa fa-lg fa-youtube"> </i></a>
//               <a href="#" target="_blank" title="Pinterest"><i class="fa fa-lg fa-pinterest"> </i></a>
//               <a href="#" target="_blank" title="Tumblr"><i class="fa fa-lg fa-tumblr"> </i></a>
              
//             </div>

 ?>