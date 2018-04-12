<?php include('header.php'); ?>


<section class="s-page-title">
	<div class="container">
		<h1 class="h1">Личный кабинет</h1>
	</div>
</section>


<section class="s-lk-nav">
	<div class="container">
		<nav class="tabs">
			<a href="/lk-profile.php" class="tabs__item">Профиль</a>
			<a href="/lk-history.php" class="tabs__item active">Заказы</a>
			<button class="tabs__item tabs__item--exit">Выйти</button>
		</nav>
	</div>
</section>


<section class="s-def-bottom">
	<div class="container">
		<div class="border-block">
			<p class="h2">У вас еще нет заказов</p>
		</div>
	</div>
</section>


<section class="s-history">
	<div class="container">
		<div class="error-block">
			<p>Невозможно повторить заказ или другие ошибки</p>
		</div>
	</div>
</section>



<?php include('footer.php'); ?>
