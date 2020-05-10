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
          'tabel'   =>'members',
          'post'    =>[
                              'a1'=>'FirstName',
                              'a2'=>'UserName',
                              'a3'=>'Password',
                              'a4'=>'Gender',
                              'a5'=>'nama_file',
                              'a6'=>'ContactNo',
                              'a7'=>'Birthdate',
                              'a8'=>'Address',
                         
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
<div class="media">
  <a class="pull-left" href="#">
    <img style="width: 250px;" class="img-circle" src="<?php echo tatiyeNet::IMG('account');?>" alt="Image">
  </a>
  <div class="media-body">
<!--===========================
=            Forum            =
============================-->
<div class="row">
          <div class="col-md-12 form-group">
            <label id="a1">Nama </label>
            <input type="text" class="form-control" name="a1" placeholder="Input field" value=""  >
          </div>

          <div class="col-md-8 form-group">
            <label id="a2">Email</label>
            <input type="email" class="form-control" name="a2" placeholder="Input field" value=""  >
          </div>

          <div class="col-md-4 form-group">
            <label id="a3">Password</label>
            <input type="text" class="form-control" name="a3" placeholder="Input field" value=""  >
          </div>

           <div class="col-md-4 form-group">
            <label id="a4">Gender</label>
            <select name="a4"class="form-control">
                <option value="">Gender</option>
                <option value="P">Perempuan</option>
                <option value="L">Laki-Laki</option>
            </select>
          </div>
            <div class="col-md-4 form-group">
                <label id="a5">Status ID</label>
                 <input type="text" class="form-control" name="a5" placeholder="Input field" value=""  >
            </div>
          <div class="col-md-4 form-group">
            <label id="a6">No Hp</label>
            <input type="text" class="form-control" name="a6" placeholder="Input field" value=""  >
          </div>
         <div class="col-md-12 form-group">
            <label id="a7">Perusahaan</label>
            <input type="text" class="form-control"name="a7" placeholder="Input field"value="">
          </div>
         <div class="col-md-12 form-group">
            <label id="a8">Alamat </label>
            <input type="text" class="form-control"name="a8" placeholder="Input field"value="">
          </div>

    </div>

<!--====  End of Forum  ====-->

  </div>
</div>