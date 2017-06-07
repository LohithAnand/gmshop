<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-05-08 01:17:55
         compiled from "templates\List.tpl" */ ?>
<?php /*%%SmartyHeaderCode:277325907deaa206bc2-59594608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd8bc86c863e34472c81e91c77aa06a3d77530ad' => 
    array (
      0 => 'templates\\List.tpl',
      1 => 1494206263,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '277325907deaa206bc2-59594608',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5907deaa280222_93973515',
  'variables' => 
  array (
    'MODE' => 0,
    'USER_NAME' => 0,
    'SEARCH_KEY' => 0,
    'PROFILE' => 0,
    'LIST_HEADERS' => 0,
    'HEADER' => 0,
    'LIST_RECORDS' => 0,
    'LIST_HEADER' => 0,
    'LIST_RECORD' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5907deaa280222_93973515')) {function content_5907deaa280222_93973515($_smarty_tpl) {?><div class="main-container"><nav class="navbar navbar-default"><div class="container-fluid"><div class="navbar-header"><a class="navbar-brand" href="javascript:void(0)">TAMUK GM-shop</a></div><ul class="nav navbar-nav"><li><a href="index.php">Home</a></li><li <?php if ($_smarty_tpl->tpl_vars['MODE']->value=="Movies") {?> class="active" <?php }?>><a href="?view=List&mode=Movies"> Movies </a></li><li <?php if ($_smarty_tpl->tpl_vars['MODE']->value=="Games") {?> class="active" <?php }?>><a href="?view=List&mode=Games"> Games </a></li></ul><ul class="nav navbar-nav pull-right"><?php if ($_smarty_tpl->tpl_vars['USER_NAME']->value) {?><li><a href="?view=Logout" title="Click to Logout"> <?php echo $_smarty_tpl->tpl_vars['USER_NAME']->value;?>
 <span class="glyphicon glyphicon-user"></span></a></li><?php } else { ?><li><a href="?view=Login"> Login <span class="glyphicon glyphicon-user"></span></a></li><?php }?></ul><div class="row pull-right"><form class="navbar-form navbar-left" id='searchForm'><div class="form-group"><input type="hidden" name="view" value="List"><input type="hidden" name="mode" value="<?php echo $_smarty_tpl->tpl_vars['MODE']->value;?>
"><input class="form-control" placeholder="Search" name="searchkey" <?php if ($_smarty_tpl->tpl_vars['SEARCH_KEY']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['SEARCH_KEY']->value;?>
" <?php }?>></div><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" style='font-size: 20px;'></span></button></form></div></div></nav><div class="container-fluid"><div class="row"><div class="col-sm-12 gm-add-dropdown-button"><div class="row"><div class="col-sm-7"><span style="font-size: 25px;" class="pull-right"><?php if ($_smarty_tpl->tpl_vars['SEARCH_KEY']->value) {?> Search Results <?php } else { ?> List of all the <?php echo $_smarty_tpl->tpl_vars['MODE']->value;?>
 <?php }?></span></div><div class="col-sm-5"><?php if ($_smarty_tpl->tpl_vars['PROFILE']->value=='employee') {?><div class="dropdown pull-right"><button class="btn btn-primary dropdown-toggle btn-lg" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Add<span class="caret"></span></button><ul class="dropdown-menu" aria-labelledby="dropdownMenu1"><li><a href="?view=Edit&mode=Movies">Movie</a></li><li><a href="?view=Edit&mode=Games">Game</a></li></ul></div><?php }?></div></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped"><thead><tr><?php  $_smarty_tpl->tpl_vars['HEADER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['HEADER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LIST_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['HEADER']->key => $_smarty_tpl->tpl_vars['HEADER']->value) {
$_smarty_tpl->tpl_vars['HEADER']->_loop = true;
?><th><?php echo $_smarty_tpl->tpl_vars['HEADER']->value;?>
</th><?php } ?><th></th></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['LIST_RECORD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LIST_RECORD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LIST_RECORDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LIST_RECORD']->key => $_smarty_tpl->tpl_vars['LIST_RECORD']->value) {
$_smarty_tpl->tpl_vars['LIST_RECORD']->_loop = true;
?><tr><?php  $_smarty_tpl->tpl_vars['LIST_HEADER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LIST_HEADER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LIST_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LIST_HEADER']->key => $_smarty_tpl->tpl_vars['LIST_HEADER']->value) {
$_smarty_tpl->tpl_vars['LIST_HEADER']->_loop = true;
?><td><?php if ($_smarty_tpl->tpl_vars['LIST_HEADER']->value=='rating') {?><div class="raty" data-score="<?php echo $_smarty_tpl->tpl_vars['LIST_RECORD']->value[$_smarty_tpl->tpl_vars['LIST_HEADER']->value];?>
"><?php } elseif ($_smarty_tpl->tpl_vars['LIST_HEADER']->value=='name'||$_smarty_tpl->tpl_vars['LIST_HEADER']->value=='title') {?><span class="imagePopOver" data-id="<?php if ($_smarty_tpl->tpl_vars['MODE']->value=='Movies') {
echo $_smarty_tpl->tpl_vars['LIST_RECORD']->value['movie_id'];
} else {
echo $_smarty_tpl->tpl_vars['LIST_RECORD']->value['game_id'];
}?>"><?php echo $_smarty_tpl->tpl_vars['LIST_RECORD']->value[$_smarty_tpl->tpl_vars['LIST_HEADER']->value];?>
</span><?php } else {
echo $_smarty_tpl->tpl_vars['LIST_RECORD']->value[$_smarty_tpl->tpl_vars['LIST_HEADER']->value];
}?></td><?php } ?><td><span class="pull-right"><?php if ($_smarty_tpl->tpl_vars['PROFILE']->value=='customer') {?><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Buy</button><button type="button" class="btn btn-default btn-xs" style="margin-left: 8px;"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Rent</button><?php }
if ($_smarty_tpl->tpl_vars['PROFILE']->value=='employee') {?><span class="glyphicon glyphicon-edit handPointer" data-mode='<?php echo $_smarty_tpl->tpl_vars['MODE']->value;?>
' data-item-id="<?php if ($_smarty_tpl->tpl_vars['MODE']->value=='Movies') {
echo $_smarty_tpl->tpl_vars['LIST_RECORD']->value['movie_id'];
} else {
echo $_smarty_tpl->tpl_vars['LIST_RECORD']->value['game_id'];
}?>" style="font-size: 15px;margin-top: 4px;" aria-hidden="true"></span><span class="glyphicon glyphicon-trash handPointer deleteItem" data-mode='<?php echo $_smarty_tpl->tpl_vars['MODE']->value;?>
' data-item-id="<?php if ($_smarty_tpl->tpl_vars['MODE']->value=='Movies') {
echo $_smarty_tpl->tpl_vars['LIST_RECORD']->value['movie_id'];
} else {
echo $_smarty_tpl->tpl_vars['LIST_RECORD']->value['game_id'];
}?>" style="font-size: 15px;margin-top: 4px;margin-left: 6px;" aria-hidden="true"></span><?php }?>
                                    </span>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php }} ?>
