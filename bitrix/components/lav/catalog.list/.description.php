<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); 
$arComponentDescription = array(
"NAME" => GetMessage("товары"),
"DESCRIPTION" => GetMessage("Выводим товары"),
"PATH" => array(
"ID" => "lav_components",
"CHILD" => array(
"ID" => "catlist",
"NAME" => "Текущая дата"
)
)
);
?>