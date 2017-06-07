<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-05-06 22:37:44
         compiled from "templates\Login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20130590e4ef712a705-55084994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e362c05adb2f5acb42eb1929a06418fe5b227477' => 
    array (
      0 => 'templates\\Login.tpl',
      1 => 1494110261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20130590e4ef712a705-55084994',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_590e4ef717b429_98471081',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590e4ef717b429_98471081')) {function content_590e4ef717b429_98471081($_smarty_tpl) {?><div class="main-container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="javascript:void(0)">TAMUK GM-shop</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="?view=List">List</a></li>
                <li class="active"><a href="?view=Login">Login</a></li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 gm-add-dropdown-button">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <span style="font-size: 25px;">Login</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="loginForm">
                    <form method="POST" action="index.php">
                        <input type="hidden" name="action" value="Login" />
                        <div class="form-group">
                            <label>Login Id</label>
                            <input type="text" name="id" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" />
                        </div>
                        <button type="submit" class="btn btn-success">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>
