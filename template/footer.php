		</div>
		<footer class="footer">
			<div class="center-wrap">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/footer/__footer-menu.php'); ?>
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/footer/__footer-contacts.php'); ?>
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/footer/__footer-bottom.php'); ?>
			</div>
		</footer>
		<div class="popup popup-thanks" id="thanks">
			<div class="popup__wrap">
				<div class="popup__content col --8">
					<div class="popup__close js-popup__close"></div>
					<h2 class="popup__title js-title--text"><b>Спасибо за заказ!</b></h2>
					<p class="popup__text">Номер вашего заказа <strong>2012/11</strong>. В ближайшее время с вами свяжется наш менеджер.</p>
					<div class="popup__btns-wrap flex">
						<div class="popup__close-btn btn js-popup__close"><span>Продолжить покупки</span></div>
					</div>
				</div>
				<div class="popup__shade js-popup__close"></div>
			</div>
		</div>
		<div class="popup cart-add" id="cart-add">
			<div class="popup__wrap">
				<div class="popup__content col --7">
					<div class="popup__sub-wrap col --6">
						<div class="popup__close js-popup__close"></div>
						<div class="popup__title js-title--text h3">Товар добавлен в корзину</div>
						<div class="popup__sub-content mt-32">
							<div class="popup__content-wrap flex --align-center pb-32">
								<div class="product-item__cover-thumb flex --align-center --just-center mr-40">
									<picture class="product-item__cover flex lazy">
										<source srcset="/template/dist/img/product-23.webp" type="image/webp">
										<source srcset="/template/dist/img/product-23.png" type="image/png">
									</picture>
									<div class="product-item__cover-mask" style="background-color: #F5F7F9"></div>
								</div>
								<div class="popup__content-sub-wrap">
									<div class="product-item__name p --l">Колесо под ось 533121, диам= 80 мм, груз-ть=65кг, черная резина / сталь, Италия, Tellure Rota (533121)</div>
									<div class="product-item__details-wrap flex mt-8">
										<div class="product-item__articul p --m">Артикул: <span>c92</span></div>
										<div class="product-item__country p --m">Tellure Rota (Италия)</div>
									</div>
									<div class="product-item__counter-wrap flex --align-center mt-32">
										<div class="product-item__counter counter-calc mr-24" data-min="1" data-max="100">
											<div class="counter-calc__wrap flex --align-center">
												<div class="counter-calc__btn disable-btn btn js-minus is-disable">
													<div class="counter-calc__btn-icon --svg__counter--minus"></div>
												</div>
												<input type="text" class="counter-calc__input" value="1">
												<div class="counter-calc__btn btn js-plus">
													<div class="counter-calc__btn-icon --svg__counter--plus"></div>
												</div>
											</div>
										</div>
										<div class="product-item__price-wrap">
											<div class="product-item__price">4 708 р.</div>
											<div class="product-item__price-sub-wrap flex --align-center">
												<div class="product-item__discount p --s mr-8">-16%</div>
												<div class="product-item__old-price p --m">5 885 ₽</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="popup__btns-wrap flex mt-40">
								<div class="popup__close-btn btn js-popup__close">Продолжить покупки</div>
								<a href="#" class="popup__order-btn btn --fill-1">Оформить заказ</a>
							</div>
						</div>
					</div>
				</div>
				<div class="popup__shade js-popup__close"></div>
			</div>
		</div>
		<div class="popup buy-click" id="buy-click">
			<div class="popup__wrap">
				<div class="popup__content col --6">
					<div class="popup__sub-wrap">
						<div class="popup__close js-popup__close"></div>
						<div class="popup__title js-title--text h3">Купить в один клик</div>
						<div class="popup__sub-content mt-32">
							<div class="popup__content-wrap flex --align-center pb-32">
								<div class="product-item__cover-thumb flex --align-center --just-center mr-40">
									<picture class="product-item__cover flex lazy">
										<source srcset="/template/dist/img/product-23.webp" type="image/webp">
										<source srcset="/template/dist/img/product-23.png" type="image/png">
									</picture>
									<div class="product-item__cover-mask" style="background-color: #F5F7F9"></div>
								</div>
								<div class="popup__content-sub-wrap">
									<div class="product-item__name p --l">Колесо под ось 533121, диам= 80 мм, груз-ть=65кг, черная резина / сталь, Италия, Tellure Rota (533121)</div>
									<div class="product-item__details-wrap flex mt-8">
										<div class="product-item__articul p --m">Артикул: <span>c92</span></div>
										<div class="product-item__country p --m">Tellure Rota (Италия)</div>
									</div>
									<div class="product-item__counter-wrap flex --align-center mt-32">
										<div class="product-item__counter counter-calc mr-24" data-min="1" data-max="100">
											<div class="counter-calc__wrap flex --align-center">
												<div class="counter-calc__btn disable-btn btn js-minus is-disable">
													<div class="counter-calc__btn-icon --svg__counter--minus"></div>
												</div>
												<input type="text" class="counter-calc__input" value="1">
												<div class="counter-calc__btn btn js-plus">
													<div class="counter-calc__btn-icon --svg__counter--plus"></div>
												</div>
											</div>
										</div>
										<div class="product-item__price-wrap">
											<div class="product-item__price">4 708 р.</div>
											<div class="product-item__price-sub-wrap flex --align-center">
												<div class="product-item__discount p --s mr-8">-16%</div>
												<div class="product-item__old-price p --m">5 885 ₽</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<form action="#" method="post" name="form-2" class="popup__form-wrap mt-40">
								<div class="popup__inputs-wrap flex">
									<div class="big-input">
										<input type="text" class="big-input__input js-mask__tel" placeholder="*Ваш телефон:" required>
										<div class="big-input__title">*Ваш телефон:</div>
										<div class="big-input__error-wrap">
											<div class="big-input__error-title p --l"><b>Заголовок ошибки</b></div>
											<div class="big-input__error-desc  p --m">Описание ошибки</div>
										</div>
									</div>
									<div class="big-input">
										<input type="text" class="big-input__input" placeholder="E-mail:">
										<div class="big-input__title">E-mail:</div>
										<div class="big-input__error-wrap">
											<div class="big-input__error-title p --l"><b>Заголовок ошибки</b></div>
											<div class="big-input__error-desc  p --m">Описание ошибки</div>
										</div>
									</div>
								</div>
								<div class="popup__send-wrap flex --align-center --just-space">
									<div class="popup__send-inner flex mt-16">
										<label class="checkbox">
											<input type="checkbox" checked="checked">
											<div class="flex --align-start">
												<div class="checkbox__trigger"></div>
												<div class="checkbox__label p --m ml-14">Согласен/а на <strong>обработку<br>
                                                        персональных данных</strong></div>
											</div>
										</label>
										<button type="send" class="popup__order-btn btn --fill-1">Оформить заказ</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="popup__shade js-popup__close"></div>
			</div>
		</div>
		<div class="scroll__top --js animated fadeInUp"><div></div></div>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/mobile-whatsapp/mobile-whatsapp.php'); ?>
        </main>
<?php  if ($__dev_mode == true ){}else{ require($_SERVER['DOCUMENT_ROOT'].'/template/dist.php'); } ?>
</body>
</html>
