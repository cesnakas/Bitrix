<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();

$site = ($_REQUEST['site'] <> ''? $_REQUEST['site'] : ($_REQUEST['src_site'] <> ''? $_REQUEST['src_site'] : false));
$arFilter = Array('TYPE_ID' => 'FEEDBACK_FORM', 'ACTIVE' => 'Y');
if($site !== false)
	$arFilter['LID'] = $site;

$arEvent = Array();
$dbType = CEventMessage::GetList($by='ID', $order='DESC', $arFilter);
while($arType = $dbType->GetNext())
	$arEvent[$arType['ID']] = '['.$arType['ID'].'] '.$arType['SUBJECT'];

$arComponentParameters = array(

	'PARAMETERS' => array(

		'USER_CONSENT' => array(),

		'USE_CAPTCHA' => Array(
			'NAME' => GetMessage('FB_CAPTCHA'),
			'TYPE' => 'CHECKBOX',
			'DEFAULT' => 'Y',
			'PARENT' => 'BASE',
		),

		'OK_TEXT' => Array(
			'NAME' => GetMessage('FB_OK_MESSAGE'),
			'TYPE' => 'STRING',
			'DEFAULT' => GetMessage('FB_OK_TEXT'),
			'PARENT' => 'BASE',
		),

		'EMAIL_TO' => Array(
			'NAME' => GetMessage('FB_EMAIL_TO'),
			'TYPE' => 'STRING',
			'DEFAULT' => htmlspecialcharsbx(COption::GetOptionString('main', 'email_from')),
			'PARENT' => 'BASE',
		),

		'REQUIRED_FIELDS' => Array(
			'NAME' => GetMessage('FB_REQUIRED_FIELDS'),
			'TYPE' => 'LIST',
			'MULTIPLE' => 'Y',
			'VALUES' => Array(
				'NONE' => GetMessage('FB_ALL_REQ'),
				'NAME' => GetMessage('FB_NAME'),
				'PHONE' => GetMessage('FB_PHONE'),
				'EMAIL' => 'E-mail',
				'MESSAGE' => GetMessage('FB_MESSAGE')),
			'DEFAULT' => '',
			'COLS' => 25,
			'PARENT' => 'BASE',
		),

		'EVENT_MESSAGE_ID' => Array(
			'NAME' => GetMessage('FB_EMAIL_TEMPLATES'),
			'TYPE' => 'LIST',
			'VALUES' => $arEvent,
			'DEFAULT' => '',
			'MULTIPLE' => 'Y',
			'COLS' => 25,
			'PARENT' => 'BASE',
		),
	)
);
