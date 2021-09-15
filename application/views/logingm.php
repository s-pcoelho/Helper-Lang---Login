<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/login.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="offset-4 col-4">
				<div class="jumbotron form-login">
					<h1 class="display-4"><?=$data['titel']=$this->lang->line('titel')?></h1>
					<hr class="my-4">
						<form action="<?=base_url('entrar')?>" method="post">
						<div class="form-group">
							<div class="row">
								<label for="email"><?=$data['labelEmail']=$this->lang->line('labelEmail')?></label>
								<input type="email" id="email" name="email" class="form-control" placeholder="<?=$data['placeEmail']=$this->lang->line('placeEmail')?>">
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label for="senha"><?=$data['labelPssw']=$this->lang->line('labelPssw')?></label>
								<input type="password" id="senha" class="form-control" name="senha">
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<button class="btn btn-success btn-block" type="submit"><?=$data['btnReink']=$this->lang->line('btnReink')?></button>
							</div>
						</div>
						</form>
						<hr class="my-4">
						<div class="form-group">
							<div class="row">
								<a href="<?=base_url()?>cadastro" class="btn btn-primary btn-block"><?=$data['btnRegistri']=$this->lang->line('btnRegistri')?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
