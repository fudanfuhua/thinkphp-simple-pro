<?php /* Smarty version Smarty-3.1.6, created on 2016-04-21 18:15:43
         compiled from "./Application/Cloud/View\common\header\header.html" */ ?>
<?php /*%%SmartyHeaderCode:246885718a84fd72679-27736336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6a58ea4f3d544b3ca52088739e935801e5aad2a' => 
    array (
      0 => './Application/Cloud/View\\common\\header\\header.html',
      1 => 1461227131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '246885718a84fd72679-27736336',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '__PUBLIC__' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5718a84fd764f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5718a84fd764f')) {function content_5718a84fd764f($_smarty_tpl) {?>	<div class="header">
		<div class="logo">LOGO</div>
		<div class="user-info">
			<img src="<?php echo $_smarty_tpl->tpl_vars['__PUBLIC__']->value;?>
/images/user.png" alt="用户"> 
			<span>LOGINNMAE</span>
			<span>[退出]</span>
		</div>
	</div><?php }} ?>