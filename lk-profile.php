<?php include('header.php'); ?>


<section class="s-page-title">
	<div class="container">
		<h1 class="h1">Личный кабинет</h1>
	</div>
</section>


<section class="s-lk-nav">
	<div class="container">
		<nav class="tabs">
			<a href="/lk-profile.php" class="tabs__item active">Профиль</a>
			<a href="/lk-history.php" class="tabs__item">Заказы</a>
			<button class="tabs__item tabs__item--exit">Выйти</button>
		</nav>
	</div>
</section>


<section class="s-auth s-def-bottom">
	<div class="container">
		<div class="row">

			<div class="grid-6 grid-12_s">
				<div class="form-block border-block">
					<div class="form-block__header">
						<p class="h2">Профиль</p>
					</div>
					<form class="vertical-form">
						<div class="error-block">
							<p>Неверный формат e-mail</p>
							<p>Пароли не совпадают</p>
						</div>
						<label class="input-group">
							<span class="input-group__label">Имя</span>
							<input type="text" name="xxasdasdx" placeholder="Имя" class="input-text">
						</label>
						<label class="input-group">
							<span class="input-group__label">Фамилия</span>
							<input type="text" name="xxx" placeholder="Фамилия" class="input-text">
						</label>
						<label class="input-group">
							<span class="input-group__label">Введите e–mail*</span>
							<input type="email" name="xxx" placeholder="E-mail*" class="input-text error">
						</label>
						<label class="input-group">
							<span class="input-group__label">Введите телефон</span>
							<input type="email" name="xxx" placeholder="Телефон" class="input-text">
						</label>
						<p class="form-block__pass-sep h3">Изменить пароль</p>
						<label class="input-group">
							<span class="input-group__label">Введите новый пароль*</span>
							<span class="pass-wrap">
								<input type="password" name="yyy" placeholder="Пароль*"  class="input-text">
								<i class="i-eye" title="Показать пароль"></i>
							</span>
						</label>
						<label class="input-group">
							<span class="input-group__label">Повторите пароль*</span>
							<span class="pass-wrap">
								<input type="password" name="ccc" placeholder="Повторите пароль*"  class="input-text">
								<i class="i-eye" title="Показать пароль"></i>
							</span>
						</label>
						<button type="submit" class="btn btn--red">Сохранить изменения</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</section>


<?php include('footer.php'); ?>
