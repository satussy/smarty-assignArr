<?php
/*
 * Smarty plugin
 * --------------------------
 * file: function.assignArr.php
 * type: function
 * name: assignArr
 * Purpose: テンプレート側から連想配列をアサインする
*/

function smarty_function_assignArr($params, $template) {
	$name = isset($params['valName']) ? $params['valName'] : 'arr';
	unset($params['valName']);

	$template->assign($name, $params);
}