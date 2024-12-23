<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		html, body{
			height: 100%;
		}
	</style>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body style="color: white; font-weight: lighter;">
	<div class="col-12  p-3" style="background-color: #171A21;">
		<div class="col-8 mx-auto" >
			<div class="row">
				<div class="col-3" >
					<a href="index.html">
						<img src="logo.png" class="w-100">
					</a>
				</div>
				<div class="col-9 pt-4" >
					<a href="" class="text-light ms-4 text-uppercase">Магазин</a>
					<a href="" class="text-light ms-4 text-uppercase">Сообщество</a>
					<a href="" class="text-light ms-4 text-uppercase">O STEAM</a>
					<a href="" class="text-light ms-4 text-uppercase">Поддержка</a>					
				</div>
			</div>			
		</div>
	</div>
	<div class="col-12" style="background-color: #212429; height: 100%;">
		<div class="col-8 mx-auto p-5 d-flex" style="background-color: #222431; height: 100%;">
			<div class="col-8 d-flex" style="height: 800px;">
				<div>
					<img src="profile.jfif">
				</div>
				<div style="margin-left: 30px;">
					<h1 class="text-light"><?php echo $_GET['name'] ?></h1>
					<h4 class="text-light">Электронная почта: <?php echo $_GET['email'] ?></h4>
					<h4 class="text-light">Возраст: <?php echo $_GET['age'] ?></h4>

						<?php
							if($_GET['age']>=18) {
								echo "<p class='text-success'>Ограничении нету</p>";
							}else{
								echo "<p class='text-warning'>Ограничении нету</p>";
							}	
						?>

				</div>
			</div>
			<div class="col-4" style="height: 800px;">
				<div style="margin-left: 5px;">
					<h1 class="text-light">Уровень 1</h1>
					<h5 class="text-light">Вы можете отобразить один из ваших значков здесь.</h5>
					<h5 class="text-light">Выберите его на странице редактирования профиля.</h5>
					<button type="button" class="btn btn-dark">
						<a  href="edit.php">Редактировать профиль</a>
					</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>