<div class="col-md-4 col-md-offset-4">
	  <h2 style="text-transform:capitalize !important;"><?php echo $kadi; ?></h2>
	  <?php 
	  if($avatar!=''){echo '<style>
.yuvarlak {
	width: 200px;
	height: 200px;
	border-radius: 150px;
	-webkit-border-radius: 150px;
	-moz-border-radius: 150px;
	background: url('.$avatar.') no-repeat center;
	box-shadow: 0 0 8px rgba(0, 0, 0, .8);
	-webkit-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
	-moz-box-shadow: 0 0 8px rgba(0, 0, 0, .8);	
	margin-bottom:30px;
	}

.yuvarlak img {
	opacity: 0;
	filter: alpha(opacity=0);
	}
</style><center><div class="yuvarlak"><img style="width:150px;height:auto" src="'.$avatar.'"/></div></center>  ';}else{ echo '<style>
.yuvarlak {
	width: 200px;
	height: 200px;
	border-radius: 150px;
	-webkit-border-radius: 150px;
	-moz-border-radius: 150px;
	background: url(profilfoto/varsayilan_profil.jpg) no-repeat center;
	box-shadow: 0 0 8px rgba(0, 0, 0, .8);
	-webkit-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
	-moz-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
	margin-bottom:30px;
	}

.yuvarlak img {
	opacity: 0;
	filter: alpha(opacity=0);
	}
</style><center><div class="yuvarlak"><img style="width:150px;height:auto" src="profilfoto/varsayilan_profil.jpg"/></div></center>'; }
	  if($twitter!=''){echo '<img style="width:32px;height:auto;" src="web/images/twitter.png"/> <a target="_blank" href="http://twitter.com/'.$twitter.'">@'.$twitter.' </a><br><br>';} 
	  if($facebook!=''){echo '<a target="_blank" href="http://facebook.com/'.$facebook.'"><img style="width:32px;height:auto;" src="web/images/facebook.png"/> '.$facebook.' </a><br><br>';}
	  if($instagram!=''){echo '<a target="_blank" href="http://instagram.com/'.$instagram.'"><img style="width:32px;height:auto;" src="web/images/instagram.png"/> @'.$instagram.' </a><br><br>';}
	  if($gplus!=''){echo '<img style="width:32px;height:auto;" src="web/images/google-plus.png"/> '.$gplus.' <br><br>';}
	  if($email!=''){echo '<img style="width:32px;height:auto;" src="web/images/email.png"/> <a target="_blank"  href="mailto:'.$email.'">'.$email.' </a><br><br>';}
	  if($hakkinda!=''){echo '<center><h4>Hakkında</h4>'.$hakkinda.'</center>';}?>
	  </div>