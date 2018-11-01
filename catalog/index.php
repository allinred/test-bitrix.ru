<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Каталог товаров");
$APPLICATION->SetTitle("Каталог");
?>

<? $APPLICATION->IncludeComponent(
"lav:catalog.list",
".default",
Array(
COUNT => 5
),
false
);?>



Text...

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>