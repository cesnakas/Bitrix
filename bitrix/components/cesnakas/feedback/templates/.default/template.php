<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global \CUser $USER */
/** @global \CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var array $templateData */
/** @var \CBitrixComponent $component */
$this->setFrameMode(true);
// Bootstrap
$this->addExternalCss('https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css');
$this->addExternalJs('https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js');
?>

<div class="col-lg-6 mx-auto p-3">

	<? if(!empty($arResult["ERROR_MESSAGE"])) {
		foreach($arResult["ERROR_MESSAGE"] as $v)
			ShowError($v);
	} ?>

	<form class="needs-validation" method="POST" action="<?=$APPLICATION->GetCurPage()?>" novalidate>
		<?=bitrix_sessid_post()?>

		<div class="mb-3">
			<label class="form-label"><?=GetMessage('FB_NAME')?></label>
			<input class="form-control"
                   type="text"
                   name="user_name"
                   placeholder="<?=GetMessage('FB_NAME')?>*"
                   value="<?=$arResult['AUTHOR_NAME']?>"
                <?=(empty($arParams['REQUIRED_FIELDS']) || in_array('NAME', $arParams['REQUIRED_FIELDS'])) ? 'required' : null ?>
			/>
			<div class="form-text invalid-feedback"><?=GetMessage('FB_REQ_NAME')?></div>
		</div>

		<div class="mb-3">
			<label class="form-label"><?=GetMessage('FB_PHONE')?></label>
			<input
				class="form-control"
				type="tel"
				name="user_phone"
				placeholder="<?=GetMessage('FB_PHONE')?>*"
				value="<?=$arResult["AUTHOR_PHONE"]?>"
				<?=(empty($arParams['REQUIRED_FIELDS']) || in_array('PHONE', $arParams['REQUIRED_FIELDS'])) ? 'required' : null ?>
			/>
			<div class="form-text invalid-feedback"><?=GetMessage('FB_REQ_PHONE')?></div>
		</div>

		<div class="mb-3">
			<label class="form-label"><?=GetMessage('FB_EMAIL')?></label>
			<input
				class="form-control"
				type="email"
				name="user_email"
				placeholder="<?=GetMessage('FB_EMAIL')?>*"
				value="<?=$arResult["AUTHOR_EMAIL"]?>"
				<?=(empty($arParams['REQUIRED_FIELDS']) || in_array('EMAIL', $arParams['REQUIRED_FIELDS'])) ? 'required' : null ?>
			/>
			<div class="form-text invalid-feedback"><?=GetMessage('FB_REQ_EMAIL')?></div>
		</div>

		<div class="mb-3">
			<label class="form-label"><?=GetMessage('FB_MESSAGE')?></label>
			<textarea
				class="form-control"
				name="MESSAGE"
				placeholder="<?=GetMessage('FB_MESSAGE')?>"
                <?=(empty($arParams['REQUIRED_FIELDS']) || in_array('MESSAGE', $arParams['REQUIRED_FIELDS'])) ? 'required' : null ?>
            ><?=$arResult['MESSAGE']?></textarea>
			<div class="form-text invalid-feedback"><?=GetMessage('FB_REQ_MESSAGE')?></div>
		</div>

		<?if ($arParams['USER_CONSENT'] == 'Y'):?>
			<div class="mb-3">
				<?$APPLICATION->IncludeComponent(
					'cesnakas:user.consent',
					'.default',
					[
						'ID' => '1', // $arParams['USER_CONSENT_ID'],
						'IS_CHECKED' => 'Y', // $arParams['USER_CONSENT_IS_CHECKED'],
						'AUTO_SAVE' => 'Y',
						'IS_LOADED' => 'Y', // $arParams['USER_CONSENT_IS_LOADED'],
						'REPLACE' => [
							'button_caption' => 'Подписаться!',
							'fields' => ['Email', 'Телефон', 'Имя']
						],
					]
				);?>
			</div>
		<?endif;?>

		<div class="mb-3">
			<input type="hidden" name="PARAMS_HASH" value="<?=$arResult['PARAMS_HASH']?>">
			<input class="btn btn-primary" type="submit" name="submit" value="<?=GetMessage('FB_SUBMIT')?>">
		</div>

		<? if(strlen($arResult['OK_MESSAGE']) > 0): ?>
			<div class="mt-3 text-success"><?=$arResult['OK_MESSAGE']?></div>
		<? endif; ?>

	</form>
</div>