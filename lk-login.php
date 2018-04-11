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
						<p class="h2">Вход в личный кабинет</p>
						<p>Для упрощения регистрации и входа Вы можете связать свой аккаунт в соц.сети с личным кабинетом</p>
					</div>
					<div class="social-links social-links--black">
						<a href="#" target="_blank"><i class="i-soc-vk"></i></a>
						<a href="#" target="_blank"><i class="i-soc-fb"></i></a>
					</div>
					<form class="vertical-form">
						<div class="error-block">
							<p>Неверный логин</p>
							<p>Неверный пароль</p>
						</div>
						<label class="input-group">
							<span class="input-group__label">Введите логин / e–mail*</span>
							<input type="text" name="xxx" placeholder="Логин / E-mail*" class="input-text error">
						</label>
						<label class="input-group">
							<span class="input-group__label">Введите пароль*</span>
							<span class="pass-wrap">
								<input type="password" name="yyy" placeholder="Пароль*"  class="input-text">
								<i class="i-eye" title="Показать пароль"></i>
							</span>
						</label>
						<button type="submit" class="btn btn--red">Вход</button>
						<a href="/lk-forgotpass.php" class="form-block__forgot">Забыли пароль?</a>
					</form>
				</div>
			</div>

			<div class="grid-6 grid-12_s">
				<div class="auth-descr-block user-content">
					<p class="h2">Я — новый покупатель</p>
					<p>Регистрация позволит получать бонусы и экономить время при следующих покупках, а так же у вас будет доступ к истории своих заказов.</p>
					<a href="/lk-registration.php" class="btn btn--blue">Зарегистрироваться</a>
					<br><br>
					<p>Это займет не более минуты.</p>
				</div>
			</div>

		</div>
	</div>
</section>


<?php include('footer.php'); ?>
