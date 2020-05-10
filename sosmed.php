<?php 
  $path =$_SERVER['DOCUMENT_ROOT'];
  $config = array(
      'path'          => $path,
      'wolf05'        => $path.'/wolf05',
      'application'   => $path.'/wolf05/application',
      'system'        => $path.'/wolf05/application/system/Wofl05require.php',
      'autoload'      => $path.'/wolf05/vendor/',
  );
  require_once($config['system']);
  use wolf05\helper\tatiyeNet;
  use wolf05\helper\tatiyeNetmodal;
/*
|--------------------------------------------------------------------------
| Initializes ESPLOID IF POST GET 
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Sel 21 Apr 2020 02:53:53  WITA
*/
   $explode= $_GET['tn'];
   $sgmt=explode('/',$explode);
   tatiyeNetmodal::value([
          'token'   =>$sgmt[0],
          'status'  =>$sgmt[1],
          'tabel'   =>'panel',
          'post'    =>[

                            'a1'=>'name',
                            'a2'=>'ketulr',
                            'a3'=>'kategori',
                      ],
   ]);

/*
|--------------------------------------------------------------------------
| Initializes FORUM
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Sel 21 Apr 2020 02:53:53  WITA
*/
?>
 <div class="card" id="panelsosmed">
   <div class="card-body no-padding">
    <!-- Recommended Page -->
    <div id="scrollbarID">
<?php 
  foreach(tatiyeNet::Icon('Flaticon') as $x => $x_value) {
 ?>
    <div class="page-block transition-block">
      <img id="img"src="<?php echo tatiyeNet::Icon('svg',$x_value)?>" alt="">
      <div class="page-meta">
        <span ><?php echo $x_value?></span>
      </div>
      <div class="add-page add-transition">
       <a class="page-scroll" onClick="Getdata('<?php echo $x_value?>');">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus inactive-icon"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
       </a>
      </div>
    </div>
<?php }?>
</div>
  </div>
</div>
<div id="forumSosmed"class="media">
  <a class="pull-left" href="#">
    <img id="forumSosmedIMG"style="width: 110px;"  class="media-object" src="" alt="Image">
  </a>
  <div class="media-body">
      <div class="row">
        <div class="form-group col-md-12">
          <label id="a1">Nama</label>
          <input type="text" class="form-control" name="a1" placeholder="Input field" value="">
        </div>
        <div class="form-group col-md-12">
          <label id="a2">Alamat ulr </label>
          <input type="text" class="form-control" name="a2" placeholder="Input field" value="">
          <input type="hidden" class="form-control" name="a3" placeholder="Input field" value="">
         
        </div>
      </div>
  </div>
</div>


<script type="text/javascript">
    $('#forumSosmed').css('display', 'none');
   function Getdata(id) {
        var data =id; 
        var result=data.split('/');
        $("#panelsosmed").hide();
        $("#scrollbarID").fadeOut();
        $("#forumSosmed").fadeIn();
        $('.modal-footer').css('display', 'block');
        $('#scrollbarID').css('height', '0px;');
        $('#a1').html('Nama '+result[0]); // Set
        $('#a2').html('Alamat ulr '+result[0]); // Set
        $('input[name=a3]').val(result[0]); // Set
        var imagesicon="<?php echo tatiyeNet::URL()?>/wolf05/application/assets/img/"+result[0]+".svg";
        $("#forumSosmedIMG").attr('src', ''+imagesicon+'');
        $('input[name=a4]').val(imagesicon); // Set

t
  }
</script>
<style type="text/css">
 #scrollbarID {
  height: 300px;
  overflow: scroll;
  width: 100%;
  max-width: 600px;
}
#scrollbarID::-webkit-scrollbar {
  width: 6px;
}
#scrollbarID::-webkit-scrollbar-track {
  border-radius: 0;
}
#scrollbarID::-webkit-scrollbar-thumb {
  margin: 2px;
  border-radius: 10px;
  background: rgba(0, 0, 0, 0.2);
}
</style>