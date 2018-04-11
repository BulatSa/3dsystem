<?php include('header.php'); ?>


<section class="s-page-title">
	<div class="container">
		<h1 class="h1">Регистрация</h1>
	</div>
</section>


<section class="s-auth s-def-bottom">
	<div class="container">
		<div class="row">

			<div class="grid-6 grid-12_s">
				<div class="form-block border-block">
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
							<span class="input-group__label">Введите пароль*</span>
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
						<label class="style-check-ios">
							<input type="checkbox" name="user_policy" value="yes" checked required>
							<span>Даю свое согласие на&nbsp;обработку моих персональных данных и&nbsp;соглашаюсь с&nbsp;<a href="#" target="_blank">политикой конфиденциальности</a></span>
						</label>
						<button type="submit" class="btn btn--red">Зарегистрироваться</button>
					</form>
				</div>
			</div>

			<div class="grid-6 grid-12_s">
				<div class="auth-descr-block user-content">
					<p class="h2">Зачем нужна регистрация?</p>
					<p>Зарегистрировавшись на сайте Вы сможете получить личный кабинет, что позволит Вам отслеживать историю заказов, быстрее оформлять заказы в нашем Интернет магазине, так как вся информация о Вас будет доступна и ее не нужно будет повторно вносить.</p>
					<p>Уже есть аккаунт?</p>
					<a href="/lk-login.php" class="btn btn--blue">Войти</a>
				</div>
			</div>

		</div>
	</div>
</section>


<?php include('footer.php'); ?>
