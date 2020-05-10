
<?php
 use wolf05\helper\tatiyeNet;
 $ID=explode('/',$_POST['id']);
 if($SEGMENT[0] == 'section') {

 	 	switch ($ID[0]) {
 	 	    case "on":
 	 	        $info="Mengaktifkan";
 	 	        break;
 	 	    case "off":
 	 	        $info="Nonaktifkan";
 	 	        break;
 	 	}
 	 if($SEGMENT[1] == 'Notif') {?>
     <!-- 
 	 	|--------------------------------------------------------------------------
 	 	| Initializes NOTIFIKASI 
 	 	|--------------------------------------------------------------------------
 	 	| Develover Tatiye.Net 2018
 	 	| @Date Min 26 Apr 2020 08:30:14  WITA
      -->
		<script type="text/javascript">
		    $(document).ready(function() {
		        $("#notificationIMG").attr('src', '<?php echo tatiyeNet::IMG('url-assets','bell.svg');?>');
		        $('#notificationTITEL').html('<b>NOTIFIKASI</b><br> Anda <?php echo $info?> notifikasi <br> <small>1 detik </small>');
		        $('#chatAudio').trigger('play');
		        $('#notification').fadeIn('slow').delay(1100).fadeOut('slow');

		    });
		</script>
 	<?php } elseif ($SEGMENT[1] == 'Sound'){?>
     <!-- 
 	 	|--------------------------------------------------------------------------
 	 	| Initializes SOAUD CLICK 
 	 	|--------------------------------------------------------------------------
 	 	| Develover Tatiye.Net 2018
 	 	| @Date Min 26 Apr 2020 08:30:14  WITA
      -->
		<script type="text/javascript">
		    $(document).ready(function() {
		        $("#notificationIMG").attr('src', '<?php echo tatiyeNet::IMG('url-assets','mute.svg');?>');
		        $('#notificationTITEL').html('<b>Sound Click </b><br> Anda <?php echo $info?> Sound Click  <br> <small>1 detik </small>');
		        $('#chatAudio').trigger('play');
		        $('#notification').fadeIn('slow').delay(1100).fadeOut('slow');


		    });
		</script>
	<?php } elseif ($SEGMENT[1] == 'Dialog'){?>
     <!-- 
 	 	|--------------------------------------------------------------------------
 	 	| Initializes SOAUD DIALOG 
 	 	|--------------------------------------------------------------------------
 	 	| Develover Tatiye.Net 2018
 	 	| @Date Min 26 Apr 2020 08:30:14  WITA
      -->
		<script type="text/javascript">
		    $(document).ready(function() {
		        $("#notificationIMG").attr('src', '<?php echo tatiyeNet::IMG('url-assets', $ID[1].'.svg');?>');
		        $('#notificationTITEL').html('<b><?php echo $ID[1]?> </b><br> Anda Mengaktifkan mode <?php echo $ID[1]?> dialog  <br> <small>1 detik </small>');
		        $('#chatAudio').trigger('play');
		        $('#notification').fadeIn('slow').delay(1100).fadeOut('slow');


                                var destroyLoader = setTimeout(function(){
                                    location.reload();
                                }, 2100);

		    });
		</script>
 	<?php }?>


<?php } else {?>
	<script type="text/javascript">
		$(document).ready(function(){
	         location.reload();
		});
	 </script>
<?php }

?>


