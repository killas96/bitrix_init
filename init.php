$f_inc = array(
	"constants.php", // constatn list file
	"functions.php", // custom function list file
	"mobile.php", // for mobile device file
	"agents.php", // custom agents list file
	"handlers.php" // EventHandler list file
);
foreach($f_inc as $f) {
	if (file_exists($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/include/" . $f))
        require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/include/" . $f);
}
