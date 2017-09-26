<?php /* Smarty version Smarty-3.1.19, created on 2017-09-26 18:26:42
         compiled from "C:\xampp\htdocs\fgstore\admin\themes\default\template\controllers\logs\employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35099487459ca7fc29f3339-39261194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '482ed2f852495cc6ee994088f2a91854655bdc68' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fgstore\\admin\\themes\\default\\template\\controllers\\logs\\employee_field.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35099487459ca7fc29f3339-39261194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ca7fc2c86c35_63280902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ca7fc2c86c35_63280902')) {function content_59ca7fc2c86c35_63280902($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
