<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-05-06 20:21:04
         compiled from "templates\Edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23049590d247856fa31-84420694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb9f187fe58b38ce2edadab4ec61b8ab3bd7e155' => 
    array (
      0 => 'templates\\Edit.tpl',
      1 => 1494102062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23049590d247856fa31-84420694',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_590d2478707539_92166288',
  'variables' => 
  array (
    'MODE' => 0,
    'FIELDS' => 0,
    'FIELD_VALUE' => 0,
    'FIELD_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590d2478707539_92166288')) {function content_590d2478707539_92166288($_smarty_tpl) {?><div class="main-container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="javascript:void(0)">TAMUK GM-shop</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="?view=List">List</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['MODE']->value=="Movies") {?> class="active" <?php }?>><a href="?view=Edit&mode=Movies"> Movies </a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['MODE']->value=="Games") {?> class="active" <?php }?>><a href="?view=Edit&mode=Games"> Games </a></li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 gm-add-dropdown-button">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <span style="font-size: 25px;">Add <?php if ($_smarty_tpl->tpl_vars['MODE']->value=="Movies") {?> Movie <?php } else { ?> Game <?php }?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="editViewForm">
                    <form method="POST" action="index.php">
                        <input type="hidden" name="mode" value="<?php echo $_smarty_tpl->tpl_vars['MODE']->value;?>
" />
                        <input type="hidden" name="action" value="Save" />
                        <?php  $_smarty_tpl->tpl_vars['FIELD_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_VALUE']->key => $_smarty_tpl->tpl_vars['FIELD_VALUE']->value) {
$_smarty_tpl->tpl_vars['FIELD_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_NAME']->value = $_smarty_tpl->tpl_vars['FIELD_VALUE']->key;
?>
                            <div class="form-group">
                                <label><?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
</label>
                                <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" class="form-control" />
                            </div>
                        <?php } ?>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>
