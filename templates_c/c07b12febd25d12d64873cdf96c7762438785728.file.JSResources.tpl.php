<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-05-06 23:46:47
         compiled from "templates\JSResources.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2502158ffe7fd0a2686-36356024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c07b12febd25d12d64873cdf96c7762438785728' => 
    array (
      0 => 'templates\\JSResources.tpl',
      1 => 1494114390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2502158ffe7fd0a2686-36356024',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58ffe7fd0a9342_07082554',
  'variables' => 
  array (
    'SCRIPTS' => 0,
    'SCRIPT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ffe7fd0a9342_07082554')) {function content_58ffe7fd0a9342_07082554($_smarty_tpl) {?><?php echo '<script'; ?>
 src="layouts/basic/libraries/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="layouts/basic/libraries/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="layouts/basic/libraries/bootbox.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="layouts/basic/libraries/raty/jquery.raty.js"><?php echo '</script'; ?>
>
<?php  $_smarty_tpl->tpl_vars['SCRIPT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SCRIPT']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SCRIPTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SCRIPT']->key => $_smarty_tpl->tpl_vars['SCRIPT']->value) {
$_smarty_tpl->tpl_vars['SCRIPT']->_loop = true;
?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SCRIPT']->value;?>
"><?php echo '</script'; ?>
>
<?php } ?><?php }} ?>
