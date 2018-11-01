<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (CModule::IncludeModule("iblock")):
// ID инфоблока из которого выводим элементы
$iblock_id = 3;
$prodducts = CIBlockElement::GetList (
// Сортировка элементов
Array("ID" => "ASC"),
Array("IBLOCK_ID" => $iblock_id),
false,
false,
// Перечисляесм все свойства элементов, которые планируем выводить
Array(
'ID', 
'NAME', 
'PREVIEW_PICTURE', 
'PREVIEW_TEXT', 
'PROPERTY_AVAILABLE',
'PROPERTY_WEIGHT'
)
);

while($ar_fields = $prodducts->GetNext())
{
$img_path = CFile::GetPath($ar_fields["PREVIEW_PICTURE"]);
?>
<div style="border: 1px solid #000000; margin: 5px 0px 5px 0px;">
<img src='<?echo($img_path)?>'/ style="width: 150px; max-height:150px; margin:5px">
<div style="display: inline-block; vertical-align: top; padding-top: 10px; width: 78%;">
<span style="font-size: 24px;"><?echo($ar_fields['NAME'])?></span>
<p><?echo($ar_fields['PREVIEW_TEXT'])?></p>
<p><b>Наличие: </b><?echo($ar_fields['PROPERTY_AVAILABLE_VALUE'])?></p>
<p><b>Вес: </b><?echo($ar_fields['PROPERTY_WEIGHT_VALUE'])?></p>
</div>
</div>
<?
}
endif;

9081009539
	//echo $arParams["COUNT"];
?>