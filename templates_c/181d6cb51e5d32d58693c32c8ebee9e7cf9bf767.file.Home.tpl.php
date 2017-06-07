<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-05-02 08:37:08
         compiled from "templates\Home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:909558ffb87510ce96-79833505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '181d6cb51e5d32d58693c32c8ebee9e7cf9bf767' => 
    array (
      0 => 'templates\\Home.tpl',
      1 => 1493714226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '909558ffb87510ce96-79833505',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58ffb87515f1e8_81670450',
  'variables' => 
  array (
    'SHOP_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ffb87515f1e8_81670450')) {function content_58ffb87515f1e8_81670450($_smarty_tpl) {?><div class="main-container">
    <div class="jumbotron">
        <div class="container">
            <h1>Welcome to <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['SHOP_NAME']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
</h1>
            <p>A Database Systems Project using PHP, Mysql, HTML, CSS by Vishakha, Aashini & Lohith</p>
            <p><a class="btn btn-primary btn-lg" href="?view=List" role="button">Explore</a></p>
        </div>
    </div>
</div><?php }} ?>
