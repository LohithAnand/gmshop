<div class="main-container">
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
</div>