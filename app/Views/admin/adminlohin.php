<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="public/assets/css/login.css">
</head>
<body>

    <section class="home">
	</section>
	<section id="login">
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100 p-t-85 p-b-20">
					<form class="login100-form validate-form" action="<?= base_url('adminlogin') ?>" method="POST">
						<span class="login100-form-title p-b-70">
							Login Here
						</span>
						<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter Email">
							<input class="input100" type="email" name="email">
							<span class="focus-input100" data-placeholder="email"></span>
						</div><br><br>

						<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
							<input class="input100" type="password" name="password">
							<span class="focus-input100" data-placeholder="Password"></span>
						</div><br>

						<div class="container-login100-form-btn">
							<button class="login100-form-btn">
								Login
							</button>
						</div>

					</form>
				</div>
			</div>
        </div>
	</section>
    
        </body>
</html>