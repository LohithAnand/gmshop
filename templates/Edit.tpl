<div class="main-container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="javascript:void(0)">TAMUK GM-shop</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="?view=List">List</a></li>
                <li {if $MODE == "Movies"} class="active" {/if}><a href="?view=Edit&mode=Movies"> Movies </a></li>
                <li {if $MODE == "Games"} class="active" {/if}><a href="?view=Edit&mode=Games"> Games </a></li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 gm-add-dropdown-button">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <span style="font-size: 25px;">Add {if $MODE eq "Movies"} Movie {else} Game {/if}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="editViewForm">
                    <form method="POST" action="index.php">
                        <input type="hidden" name="mode" value="{$MODE}" />
                        <input type="hidden" name="action" value="Save" />
                        {foreach from=$FIELDS key=FIELD_NAME item=FIELD_VALUE}
                            <div class="form-group">
                                <label>{$FIELD_VALUE}</label>
                                <input type="text" name="{$FIELD_NAME}" class="form-control" />
                            </div>
                        {/foreach}
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>