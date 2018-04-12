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


<section class="s-history s-def-bottom">
	<div class="container">
		<div class="error-block">
			<p>Невозможно повторить заказ или другие ошибки</p>
		</div>

		<div class="history-list">

			<div class="history-item">
				<div class="history-item__left">
					<p class="h2 history-item__title">Заказ #121 от 01.02.2018</p>
					<table class="history-item__table">
						<tr>
							<th></th>
							<th>Описание</th>
							<th>Цена</th>
							<th>Кол-во</th>
							<th>Стоимость</th>
						</tr>
						<tr>
							<td><p class="h3">1</p></td>
							<td class="history-item__prodname"><p class="h3"><a href="/catalog-detail.php">3D ринтер PICASO DESIGNER X PRO</a></p></td>
							<td>
								<p class="h3 history-item__price">279 000 <span class="rub">c</span></p>
								<p class="h3 history-item__price--old">258 000 <span class="rub">a</span></p>
							</td>
							<td>2</td>
							<td><p class="h3 history-item__price">279 000 <span class="rub">c</span></p></td>
						</tr>
						<tr>
							<td><p class="h3">2</p></td>
							<td class="history-item__prodname"><p class="h3"><a href="/catalog-detail.php">FLEX MEDIUM PrintProduct, 1.75 мм, 500 гр, прозрачный</a></p></td>
							<td><p class="h3 history-item__price">555 000 <span class="rub">c</span></p></td>
							<td>3</td>
							<td><p class="h3 history-item__price">1 555 000 <span class="rub">c</span></p></td>
						</tr>
						<tr>
							<td><p class="h3">1</p></td>
							<td class="history-item__prodname"><p class="h3"><a href="/catalog-detail.php">3D ринтер PICASO DESIGNER X PRO</a></p></td>
							<td>
								<p class="h3 history-item__price">279 000 <span class="rub">c</span></p>
							</td>
							<td>2</td>
							<td><p class="h3 history-item__price">279 000 <span class="rub">c</span></p></td>
						</tr>
					</table>
				</div>
				<div class="history-item__right">
					<div class="history-item__status">
						<span>В обработке</span>
					</div>
					<div class="history-item__itog">
						<span>Всего товаров</span>
						<span>3 шт.</span>
					</div>
					<div class="history-item__itog">
						<span>Стоимость товаров</span>
						<span>279 000 <span class="rub">a</span></span>
					</div>
					<div class="history-item__itog">
						<span>Стоимость доставки</span>
						<span>9 000 <span class="rub">a</span></span>
					</div>
					<hr>
					<div class="history-item__itog">
						<span class="h3">Итого:</span>
						<span class="h3">288 000 <span class="rub">c</span></span>
					</div>
					<div class="history-item__actions">
						<button class="btn btn--red">Повторить заказ</button>
					</div>
				</div>
			</div>

			<div class="history-item">
				<div class="history-item__left">
					<p class="h2 history-item__title">Заказ #121 от 01.02.2018</p>
					<table class="history-item__table">
						<tr>
							<th></th>
							<th>Описание</th>
							<th>Цена</th>
							<th>Кол-во</th>
							<th>Стоимость</th>
						</tr>
						<tr>
							<td><p class="h3">1</p></td>
							<td class="history-item__prodname"><p class="h3"><a href="/catalog-detail.php">3D ринтер PICASO DESIGNER X PRO</a></p></td>
							<td>
								<p class="h3 history-item__price">9 000 <span class="rub">c</span></p>
								<p class="h3 history-item__price--old">8 000 <span class="rub">a</span></p>
							</td>
							<td>2</td>
							<td><p class="h3 history-item__price">9 000 <span class="rub">c</span></p></td>
						</tr>
					</table>
				</div>
				<div class="history-item__right">
					<div class="history-item__status">
						<span>Выполнен</span>
					</div>
					<div class="history-item__itog">
						<span>Всего товаров</span>
						<span>3 шт.</span>
					</div>
					<div class="history-item__itog">
						<span>Стоимость товаров</span>
						<span>279 000 <span class="rub">a</span></span>
					</div>
					<div class="history-item__itog">
						<span>Стоимость доставки</span>
						<span>9 000 <span class="rub">a</span></span>
					</div>
					<hr>
					<div class="history-item__itog">
						<span class="h3">Итого:</span>
						<span class="h3">288 000 <span class="rub">c</span></span>
					</div>
					<div class="history-item__actions">
						<button class="btn btn--red">Повторить заказ</button>
					</div>
				</div>
			</div>

		</div>

	</div>
</section>



<?php include('footer.php'); ?>
