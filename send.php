<?php 
$PATH =$_SERVER['DOCUMENT_ROOT'];
$ROOT = array(
    'path'          => $PATH,
    'wolf05'        => $PATH.'/wolf05',
    'application'   => $PATH.'/wolf05/application',
    'system'        => $PATH.'/wolf05/application/system/Wofl05require.php',
    'autoload'      => $PATH.'/wolf05/vendor/',
    'package'       => __DIR__.'/SendDestroyLoader.php',
);
require_once($ROOT['system']);
use wolf05\helper\tatiyeNet;
use wolf05\helper\tatiyeNetmodal;
/*
|--------------------------------------------------------------------------
| Initializes ESPLOID IF POST GET 
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Sel 21 Apr 2020 02:53:53  WITA
*/
  $EXPLODE= $_GET['tn'];
  $SEGMENT=explode('/',$EXPLODE);
  $DIR=$ROOT['package'];
/*
|--------------------------------------------------------------------------
| Initializes CEK SESS_MEMBER_ID LOGIN  
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Sel 21 Apr 2020 02:54:08  WITA
*/
 if (isset($_SESSION['SESS_MEMBER_ID'])) { 
/*
|--------------------------------------------------------------------------
| Initializes IF GET POST 
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Sel 21 Apr 2020 02:41:38  WITA
*/
    if($SEGMENT[0] == tatiyeNetmodal::validasi('update')) { 
       /*
       |--------------------------------------------------------------------------
       | Initializes UPDATE ACCOUNT
       |--------------------------------------------------------------------------
       | Develover Tatiye.Net 2018
       | @Date Sel 21 Apr 2020 12:45:57  WITA
       */

             $ID=tatiyeNet::paramDecrypt($_POST['id']);
             $data = new tatiyeNet();     
             $arr = array();                   
             $arr["FirstName"]      =tatiyeNet::XSS($_POST['a1']);                    
             $arr["UserName"]       = $_POST['a2'];
             $arr["Password"]       = $_POST['a3'];
             $arr["md5"]            = md5($_POST['a3']); 
             $arr["Gender"]         = $_POST['a4'];
             $arr["nama_file"]      = $_POST['a5'];
             $arr["ContactNo"]      = $_POST['a6'];
             $arr["Birthdate"]      = $_POST['a7'];
             $arr["Address"]        = $_POST['a8'];
             $arr["created"]        =tatiyeNet::Format("Time"); 
             $count=$data->update(" members ", $arr, " `member_id` = '".$ID."'","row='1'"); 


     } elseif ($SEGMENT[0] == tatiyeNetmodal::validasi('section')){
       /*
       |--------------------------------------------------------------------------
       | Initializes  POST UPDATE
       |--------------------------------------------------------------------------
       | Develover Tatiye.Net 2018
       | @Date Sel 21 Apr 2020 12:45:57  WITA
       */
           $ID=explode('/',$_POST['id']);
           $En = new tatiyeNet();
           $count  =  $En->select_Group(" * ", "panel", " `data_id` = '".$SEGMENT[1]."' ","AND user_id='".ID."' ");
           $Cek = $En->getObjectResults();
           switch ($Cek->data_id) {

               case $SEGMENT[1]:
                   $data = new tatiyeNet();     
                   $arr = array();    
                   $arr["name"]     = $ID[1];    
                   $arr["ketulr"]   = $ID[0];  
                   $arr["kategori"]   = $ID[2];  
                   $arr["data_id"]  = $SEGMENT[1];   
                   $arr["status"]   =$_POST['id']; 
                   $arr["user_id"]   =ID; 
                   $arr["client"]  = 'section'; 
                   $arr["date"]     =tatiyeNet::Format("Time");
                   $count=$data->update(" panel ", $arr, " `id` = '".$Cek->id."'","data_id='".$SEGMENT[1]."'"); 
                   break;
               default:
                   $data = new tatiyeNet();     
                   $arr = array();    
                   $arr["name"]     = $ID[1];    
                   $arr["ketulr"]   = $ID[0];
                   $arr["kategori"]   = $ID[2];   
                   $arr["data_id"]  = $SEGMENT[1];   
                   $arr["client"]  = 'section';   
                   $arr["user_id"]   =ID; 
                   $arr["status"]   =$_POST['id']; 
                   $arr["date"]     =tatiyeNet::Format("Time");
                   $count=$data->insert(" panel ", $arr );

           }
           

    
     } elseif ($SEGMENT[0] == tatiyeNetmodal::validasi('sosmed')){
       /*
       |--------------------------------------------------------------------------
       | Initializes  POST UPDATE
       |--------------------------------------------------------------------------
       | Develover Tatiye.Net 2018
       | @Date Sel 21 Apr 2020 12:45:57  WITA
       */
           $data = new tatiyeNet();     
           $arr = array();    
           $arr["name"]     = $_POST['a1'];    
           $arr["ketulr"]   = $_POST['a2'];  
           $arr["kategori"] = $_POST['a3'];
           $arr["data_id"]  = 'sosmed';   
           $arr["user_id"]   =ID; 
           $arr["date"]     =tatiyeNet::Format("Time");
           $count=$data->insert(" panel ", $arr );
    





     } elseif ($SEGMENT[0] == 'delete'){
      /*
      |--------------------------------------------------------------------------
      | Initializes DELETE POST ID 
      |--------------------------------------------------------------------------
      | Develover Tatiye.Net 2018
      | @Date Sel 21 Apr 2020 01:28:33  WITA
      */
      $ID=tatiyeNet::paramDecrypt($_POST['id']); 
      $data = new tatiyeNet();     
      $count  =  $data->delete("panel", " `id` = '".$ID."'","user_id='".ID."'");
     } 
/*
|--------------------------------------------------------------------------
| Initializes AND  SESS_MEMBER_ID
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date 
*/
}
require_once($ROOT['package']);
?>
