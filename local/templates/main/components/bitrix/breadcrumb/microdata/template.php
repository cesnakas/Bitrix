<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

global $APPLICATION;

if(empty($arResult))
	return;

$itemSize = count($arResult);

$strReturn = "<div class=\"navigation-block\">";

$strReturn .= "<a href=\"".($arResult[$itemSize - 1]["LINK"] <> "" && $arResult[$itemSize - 1]["LINK"] != $APPLICATION->GetCurPage() ? $arResult[$itemSize - 1]["LINK"] : $arResult[$itemSize - 2]["LINK"])."\" class=\"navigation-back\"><i class=\"icon-arrow-left\"></i></a>";

$strReturn .= "<div class=\"navigation-items\"><div class=\"navigation-breadcrumb\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">";

for($index = 0; $index < $itemSize; $index++) {
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index > 0 ? "<i class=\"navigation-breadcrumb__separate\"></i>" : "");

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
		$strReturn .= "
			<div class=\"navigation-breadcrumb__item\" id=\"breadcrumb_".$index."\" itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
				".$arrow."
				<a href=\"".$arResult[$index]["LINK"]."\" title=\"".$title."\" itemprop=\"item\">
					<span itemprop=\"name\">".$title."</span>
				</a>
				<meta itemprop=\"position\" content=\"".($index + 1)."\" />
			</div>";
	}
}

$strReturn .= "</div><h1 id=\"pagetitle\" class=\"navigation-title\">".$APPLICATION->GetTitle()."</h1></div></div>";

/**
 * Микроразметка для breadcrumb
 */
$arItems = [];
for ($index = 0; $index < $itemSize; $index++) {
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arItems[] = [
		'@type' => 'ListItem',
		'position' => "$index",
		'item' => [
			'@id' => $arResult[$index]["LINK"],
			'name' => $title
		]
	];
}
$microData = "
<script type=\"application/ld+json\">
	{
		\"@context\": \"http://schema.org\",
		\"@type\": \"BreadcrumbList\",
		\"itemListElement\": " . \Bitrix\Main\Web\Json::encode($arItems, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_LINE_TERMINATORS) . "
	}
</script>";

return $strReturn . $microData;
