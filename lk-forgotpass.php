<?php include('header.php'); ?>


<section class="s-page-title">
	<div class="container">
		<h1 class="h1">Личный кабинет</h1>
	</div>
</section>


<section class="s-auth s-def-bottom">
	<div class="container">
		<div class="row">

			<div class="grid-6 grid-12_s">
				<div class="form-block border-block">
					<div class="form-block__header">
						<p class="h2">Восстановление пароля</p>
						<p>Для восстановления пароля укажите ваш E-mail. На него мы вышлем дальнейшие инструкции.</p>
					</div>
					<form class="vertical-form">
						<div class="error-block">
							<p>Неверный e-mail</p>
						</div>
						<label class="input-group">
							<span class="input-group__label">Введите логин / e–mail*</span>
							<input type="text" name="xxx" placeholder="Логин / E-mail*" class="input-text error">
						</label>
						<button type="submit" class="btn btn--red">Отправить</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</section>


<?php include('footer.php'); ?>
