        <?php 
      use wolf05\helper\tatiyeNet;
      tatiyeNet::Modal([
          'status'    =>'dialog',
          'package'   =>SEGMENT_2,
          'model'     =>'auto', //Facebook Mac ,Bootstrap ,auto
          'view'      =>'guide1', //guide
       ]);

        tatiyeNet::options('validasi',[
        'categori' =>'checkbox',
        'token'    =>KEY,
        'tabel'    =>'panel',
        'file'     =>'kategori',
      ]);

         ?>
            <div class="container is-custom">
                <div id="pages-about" class="view-wrap is-headless">
                    <div class="columns has-portrait-padding">
                        <div class="column is-4">
                        <?php  
                            tatiyeNet::Format("Calender",[
                             'style'=>[
                                  'width'     =>'100%',
                                  'background'=>'#2F62FF',
                                  'color'     =>'#FFF'
                              ],
                              'SendDestroyLoader'=>[
                                  'send'     =>'off', //on ,off
                                  'format'   =>'IN', // IN,EN
                                  'url'      =>'Account/calenderData.php',
                                  'resultsID'=>'#LiID',
                              ]
                            ]);
                        ?>



                            <div class="card">
                                <div class="card-heading is-bordered">
                                    <h4> Pages Sosial Media</h4>
                                    <div class="dropdown is-spaced is-neutral is-right dropdown-trigger">
                                        <div>
                                            <div class="button">
                                            <a onclick="WFinsert('Sosial Media Account/sosmed/Simpan Account/sosmed/off/X/120x600x0');"><i data-feather="plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body no-padding">
                                    <?php
                                    $no=0;
                                    $data = new tatiyeNet();
                                    $count  =  $data->select_Group(" * ", " panel ", " `user_id` = '".ID."' ","AND data_id='sosmed' ");
                                    while ($ngi = $data->getObjectResults()){
                                        $Key=tatiyeNet::paramEncrypt($ngi->id);
                                        $no=$no+1;
                                    ?>
                                    <div class="page-block transition-block" id="page<?php echo $Key?>">
                                        <i class="WFsvg1<?php echo $no .' '. $ngi->kategori?> 50"></i>
                                        <div class="page-meta">
                                            <span><?php echo $ngi->name;?></span>
                                            <span><?php echo $ngi->ketulr;?> <br><small>waktu: <?php echo tatiyeNet::Format("stamp-$ngi->date");?></small></span>
                                        </div>
                                        <div class="add-page add-transition">
                                           <a onclick="WFdelete('delete/id/<?php echo $Key?>');"><i data-feather="trash-2"></i></a>
                                        </div>
                                    </div>
                                   <?php }?>
                                   <div id="PagesSosialMedia"></div>
                                </div>
                            </div>





                        </div>
                        <div class="column is-8">
                               <div class="stats-wrapper">
                                <div class="stats-header">
                                    <div class="avatar-wrapper">
                                        <img class="avatar" src="<?php echo tatiyeNet::IMG('account');?>" data-demo-src="#" data-user-popover="0" alt="">
                                        <div class="badge">
                                            <i data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="user-info">
                                        <h4><?php echo tatiyeNet::Account('name');?></h4>
                                        <a class="button is-follow"onclick="WFupdate('Account/forum/Update Account/update/on/<?php echo KEY?>/120x600x0');">Update</a>
                                    </div>
                                    <div class="main-stats">
                                        <div class="stat-block">
                                            <h4>Access</h4>
                                            <p><?php echo tatiyeNet::UserAgents('Session','VISIT');?></p>
                                        </div>
                                        <div class="stat-block is-centered">
                                            <h4>package</h4>
                                            <p><?php echo tatiyeNet::UserAgents('Session','PAC');?></p>
                                        </div>
                                     <svg class="sparkline sparkline--blue sparkline--filled" width="160" height="70" stroke-width="2"></svg>
                                    </div>
                                </div>
                            </div>
 <!--=====================================
 =            Section comment            =
 ======================================-->
 <div id="pages-about" class="view-wrap is-headless">
                    <div class="columns has-portrait-padding">
                        <div class="column is-12">
                            <div class="card page-about-card">
                                <div class="card-title">
                                    <h4>About <?php echo tatiyeNet::Account('name');?></h4>
                                    <a href="<?php echo tatiyeNet::URL('home')?>" target="_blank" class="button is-solid grey-button raised">Go to Website</a>
                                </div>
                                <div class="about-body">
                                    <div class="columns">
                                        <div class="column is-5">
                                            <div class="about-block">
                                                <div class="block-header">
                                                    <h4>Contact Info </h4>
                                                </div>
                                                <div class="block-content">
                                                    <div class="flex-inner">
                                                        <i data-feather="mail"></i>
                                                        <span><?php echo tatiyeNet::Account('email');?></span>
                                                    </div>
                                                    <div class="flex-inner">
                                                        <i data-feather="layers"></i>
                                                        <span><?php echo tatiyeNet::options('password',ID);?></span>
                                                    </div>
                                                        <div class="flex-inner">
                                                        <i data-feather="phone"></i>
                                                        <span>Call <a><?php echo tatiyeNet::Account('contact');?></a></span>
                                                    </div>


                                                    <div class="flex-inner">
                                                        <i data-feather="map-pin"></i>
                                                        <span><?php echo tatiyeNet::Account('address');?></span>
                                                    </div>
                                                    <div class="flex-inner">
                                                        <i data-feather="globe"></i>
                                                        <span><a><?php echo tatiyeNet::URL()?></a></span>
                                                    </div>
                                                </div>
                                            </div>
            
                                            <div class="about-block">
                                                <div class="block-header">
                                                    <h4>More Info</h4>
                                                </div>
                                                <div class="block-content">
                                                    <div class="flex-inner has-meta">
                                                        <i class="mdi mdi-office-building"></i>
                                                        <div class="meta">
                                                            <span>Company</span>
                                                              <span><?php echo tatiyeNet::Account('company');?></span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-inner has-meta">
                                                        <i class="mdi mdi-earth"></i>
                                                        <div class="meta">
                                                            <span>Oauth Provider</span>
                                                            <span><?php echo tatiyeNet::Account('oauth_provider');?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="column is-6">
                                            <div class="about-block">
                                                <div class="block-header">
                                                    <h4>History</h4>
                                                </div>
                                                <div class="block-content">
                                                    <div class="history-block">
                                                        <div class="date">Acces </div>
                                                        <div class="timeline">
                                                            <ul>
                                                                <li>IP:<?php echo tatiyeNet::UserAgents('Session','IP');?></li>
                                                                <li>Platform :<?php echo tatiyeNet::UserAgents('Session','PFM')?></li>
                                                                <li>Browser : <?php echo tatiyeNet::UserAgents('Session','BWR');?></li>
                                                                <li>OS : <?php echo tatiyeNet::UserAgents('Session','OS');?></li>
                                                                <li>Date : <?php echo tatiyeNet::UserAgents('Session','DTE');?></li>
                                                                <li>time : <?php echo tatiyeNet::UserAgents('Session','TIM');?></li>
                                                            </ul>
                                                        </div>
                                                    </div>
            
                                                    <div class="history-block">
                                                        <div class="date">Package</div>
                                                        <div class="timeline">
                                                            <ul>
                                                             <?php 
                                                             $add=tatiyeNet::CURL([
                                                                'api' =>'api?tn=OAuth/user/'.TOKEN.'/',
                                                                'data'=>'json',
                                                            ]);
                                                             foreach ($add[0]['package'] as $value) {
                                                               $PAC=$value['data'];
                                                               ?>
                                                                <li><?php echo $value['name']?> <br><small><?php echo $value['date']?></small></li>
                                                            <?php }?>
                                                            </ul>
                                                        </div>
                                                    </div>
            
             
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="column is-12">
                                            <div class="row">
                                              <div class="col-md-6">
                                                <div class="date">Dialog <br><small>Silahkan pilih salah satu mode dialog</small></div>
                                                <hr>
                                                     <div class="col-md-12 form-group">
                                                        <span class="margin-r"><i class="WFsvg1 Mac 20"></i> Mac</span>
                                                        <label class="el-switch el-switch-sm pull-right">
                                                           <input onClick="WFcheckboxID('a1<?php echo ID;?>/Mac/section/Dialog/<?php echo KEY;?>');"type="checkbox"name="a1<?php echo ID;?>" value="">
                                                            <span class="el-switch-style "></span>
                                                        </label>
                                                    </div>
                                                     <div class="col-md-12 form-group">
                                                        <span class="margin-r"><i class="WFsvg2 Facebook 20"></i> Facebook</span>
                                                        <label class="el-switch el-switch-sm pull-right">
                                                           <input onClick="WFcheckboxID('a2<?php echo ID;?>/Facebook/section/Dialog/<?php echo KEY;?>');"type="checkbox"name="a2<?php echo ID;?>" value="">
                                                            <span class="el-switch-style "></span>
                                                        </label>
                                                    </div>
                                                     <div class="col-md-12 form-group">
                                                        <span class="margin-r"><i class="WFsvg3 Bootstrap 20"></i>Bootstrap</span>
                                                        <label class="el-switch el-switch-sm pull-right">
                                                           <input onClick="WFcheckboxID('a3<?php echo ID;?>/Bootstrap/section/Dialog/<?php echo KEY;?>');"type="checkbox"name="a3<?php echo ID;?>" value="">
                                                            <span class="el-switch-style "></span>
                                                        </label>
                                                    </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="date">Option <br><small>Pengaturan Sound Click dan Notifikasi</small></div>
                                                <hr>
                                                     <div class="col-md-12 form-group">
                                                        <span class="margin-r"><i class="WFsvg4 bell 20"></i> Notifikasi</span>
                                                        <label class="el-switch el-switch-sm  pull-right">
                                                           <input onClick="WFcheckboxID('a4<?php echo ID;?>/Notifikasi/section/Notif/<?php echo KEY;?>');"type="checkbox"name="a4<?php echo ID;?>" value="">
                                                            <span class="el-switch-style "></span>
                                                        </label>
                                                    </div>
                                                     <div class="col-md-12 form-group">
                                                        <span class="margin-r"><i class="WFsvg5 mute 20"></i> Click</span>
                                                        <label class="el-switch el-switch-sm  pull-right">
                                                           <input onClick="WFcheckboxID('a5<?php echo ID;?>/Click/section/Sound/<?php echo KEY;?>');"type="checkbox"name="a5<?php echo ID;?>" value="">
                                                            <span class="el-switch-style "></span>
                                                        </label>
                                                    </div>
                                                  <div id="nugi"></div>
                                              </div>
                                            </div>
                                            <div class="about-block">
                                                <div class="block-header">
                                                    <h4>API Info</h4>
                                                </div>
                                                <div class="block-content">

                                                        <div class="field">
                                                            <label><i class="mdi mdi-account-key"></i> Key</label>
                                                            <div class="control has-validation has-success">
                                                                <input type="text" class="input"value="<?php echo KEY;?>" />
                                                                <div class="error-icon">
                                                                    <i data-feather="x"></i>
                                                                </div>
                                                                <div class="success-icon">
                                                                    <i data-feather="link-2"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field">
                                                            <label> <i class="mdi mdi-auto-fix"></i> Secret</label>
                                                            <div class="control has-validation has-success">
                                                                <input type="text" class="input"value="<?php echo TOKEN;?>" />
                                                                <div class="error-icon">
                                                                    <i data-feather="x"></i>
                                                                </div>
                                                                <div class="success-icon">
                                                                    <i data-feather="link-2"></i>
                                                                </div>
                                                            </div>
                                                        </div>



                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 <!--====  End of Section comment  ====-->
 

                        </div>
                    </div>
                </div>
            </div>

