<?php
/**
 * Lead form modal.
 *
 * @package AutoImport
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="modal-overlay" data-modal-overlay aria-hidden="true" role="dialog" aria-modal="true">
	<div class="modal" role="document">
		<button type="button" class="modal__close" data-modal-close aria-label="<?php esc_attr_e( 'Закрыть', 'autoimport' ); ?>">&times;</button>
		<div class="modal__body">
			<h2 data-modal-title></h2>
			<p data-modal-text style="color: var(--text-muted); margin: 0 0 12px"></p>
			<ul class="modal-benefits" data-modal-benefits></ul>
			<p class="modal-examples" data-modal-examples></p>
			<form data-lead-form data-form-main>
				<input type="hidden" name="lead_source" value="" />
				<input type="hidden" name="lead_type" value="Подбор" />
				<input type="hidden" name="lead_segment" value="" />
				<div class="form-row">
					<label for="modal-name"><?php esc_html_e( 'Имя', 'autoimport' ); ?></label>
					<input id="modal-name" name="name" type="text" required autocomplete="name" />
				</div>
				<div class="form-row">
					<label for="modal-phone"><?php esc_html_e( 'Телефон', 'autoimport' ); ?></label>
					<input id="modal-phone" name="phone" type="tel" required autocomplete="tel" inputmode="tel" />
				</div>
				<div class="form-row">
					<label for="modal-budget"><?php esc_html_e( 'Бюджет', 'autoimport' ); ?></label>
					<input id="modal-budget" name="budget" type="text" />
				</div>
				<div class="form-row">
					<label for="modal-city"><?php esc_html_e( 'Город', 'autoimport' ); ?></label>
					<input id="modal-city" name="city" type="text" />
				</div>
				<div class="form-row">
					<label for="modal-need"><?php esc_html_e( 'Что ищете', 'autoimport' ); ?></label>
					<textarea id="modal-need" name="need" rows="2"></textarea>
				</div>
				<div class="form-consent">
					<input id="modal-consent" name="consent" type="checkbox" required />
					<label for="modal-consent"><?php esc_html_e( 'Согласен на обработку персональных данных', 'autoimport' ); ?></label>
				</div>
				<button type="submit" class="btn btn--primary" style="width: 100%"><?php esc_html_e( 'Отправить', 'autoimport' ); ?></button>
			</form>
			<div class="form-success" data-form-success role="status">
				<?php esc_html_e( 'Спасибо! Мы получили заявку и скоро свяжемся с вами.', 'autoimport' ); ?>
			</div>
		</div>
	</div>
</div>
