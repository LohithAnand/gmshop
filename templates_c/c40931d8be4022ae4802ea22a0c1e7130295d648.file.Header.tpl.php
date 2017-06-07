<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-28 20:22:03
         compiled from "templates\Header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3254458ffe5c0104dd9-28741115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c40931d8be4022ae4802ea22a0c1e7130295d648' => 
    array (
      0 => 'templates\\Header.tpl',
      1 => 1493166194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3254458ffe5c0104dd9-28741115',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58ffe5c0107f94_99828054',
  'variables' => 
  array (
    'APP_TITLE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ffe5c0107f94_99828054')) {function content_58ffe5c0107f94_99828054($_smarty_tpl) {?><html>
    <head>
        <?php echo $_smarty_tpl->getSubTemplate ('CSSResources.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <title> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['APP_TITLE']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
 </title>
    </head>
    <body><?php }} ?>
