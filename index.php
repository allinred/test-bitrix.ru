<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Записи");
?> 
<p><?
$APPLICATION->IncludeComponent("bitrix:blog.new_posts.list", "general_page", array(
	"GROUP_ID" => "1",
	"BLOG_URL" => "",
	"MESSAGE_PER_PAGE" => "10",
	"DATE_TIME_FORMAT" => "d.m.y G:i",
	"NAV_TEMPLATE" => "",
	"PATH_TO_BLOG" => "/people/user/#user_id#/blog/",
	"PATH_TO_POST" => "/people/user/#user_id#/blog/#post_id#/",
	"PATH_TO_USER" => "/people/user/#user_id#/",
	"PATH_TO_GROUP_BLOG_POST" => "/groups/group/#group_id#/blog/#post_id#/",
	"PATH_TO_BLOG_CATEGORY" => "/people/user/#user_id#/blog/?category=#category_id#",
	"PATH_TO_MESSAGES_CHAT" => "/people/messages/chat/#user_id#/",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"PATH_TO_SMILE" => "/bitrix/images/blog/smile/",
	"SET_TITLE" => "N",
	"SHOW_RATING" => "Y",
	"POST_PROPERTY_LIST" => array(
	),
	"BLOG_VAR" => "blog",
	"POST_VAR" => "post_id",
	"USER_VAR" => "user_id",
	"PAGE_VAR" => "page",
	"SEO_USER" => "N",
	"USE_SOCNET" => "Y"
	),
	false
);
?></p>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>