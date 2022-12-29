  <body class="background">
	  <div>
		  <div class="formBackground" >
		<?php if(!empty($_GET['gagal'])){?>

		<?php if($_GET['gagal']=="userKosong"){?>
			<script>alert('tolong isi kolom username')</script>
		<?php } else if($_GET['gagal']=="passKosong"){?>
			<script>alert('tolong isi kolom password')</script>
		<?php } else {?>
			<script>alert('akun tidak ditemukan')</script>
		<?php }?>
		<?php }?>
			  
			  <div>
				  <img src="public/img/login.png" class="topicon">
			  </div>
			  <div>
				  <p class="memberlogin">LOGIN</p>
			  </div>
			  <div class="formnew">
				  <form action="index.php?include=login" method="POST">
    				<div class="input-group" id="inputz">
      					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      					<input id="email" type="text" class="form-control" name="username" placeholder="Username" required>
    				</div>
    				<div class="input-group">
      					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      					<input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
    				</div>
					  <button type="submit" value="submit" id="btnnew" class="btn btn-info">Login</button>
  				</form>
				
			  </div>
		  </div>
	  </div>