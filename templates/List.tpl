{strip}
<div class="main-container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="javascript:void(0)">TAMUK GM-shop</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li {if $MODE == "Movies"} class="active" {/if}><a href="?view=List&mode=Movies"> Movies </a></li>
                <li {if $MODE == "Games"} class="active" {/if}><a href="?view=List&mode=Games"> Games </a></li>
            </ul>
            <ul class="nav navbar-nav pull-right">
                {if $USER_NAME}
                    <li><a href="?view=Logout" title="Click to Logout"> {$USER_NAME} <span class="glyphicon glyphicon-user"></span></a></li>
                {else}
                    <li><a href="?view=Login"> Login <span class="glyphicon glyphicon-user"></span></a></li>
                {/if}
            </ul>
            <div class="row pull-right">
                <form class="navbar-form navbar-left" id='searchForm'>
                    <div class="form-group">
                        <input type="hidden" name="view" value="List">
                        <input type="hidden" name="mode" value="{$MODE}">
                        <input class="form-control" placeholder="Search" name="searchkey" {if $SEARCH_KEY} value="{$SEARCH_KEY}" {/if}>
                    </div>
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" style='font-size: 20px;'></span></button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 gm-add-dropdown-button">
                <div class="row">
                    <div class="col-sm-7">
                        <span style="font-size: 25px;" class="pull-right">{if $SEARCH_KEY} Search Results {else} List of all the {$MODE} {/if}</span>
                    </div>
                    <div class="col-sm-5">
                        {if $PROFILE eq 'employee'}
                            <div class="dropdown pull-right">
                                <button class="btn btn-primary dropdown-toggle btn-lg" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Add
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="?view=Edit&mode=Movies">Movie</a></li>
                                    <li><a href="?view=Edit&mode=Games">Game</a></li>
                                </ul>
                            </div>
                        {/if}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            {foreach from=$LIST_HEADERS item=HEADER}
                                <th>{$HEADER}</th>
                            {/foreach}
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$LIST_RECORDS item=LIST_RECORD}
                            <tr>
                                {foreach from=$LIST_HEADERS item=LIST_HEADER name=listHeaderLoop}
                                    <td>
                                        {if $LIST_HEADER eq 'rating'}
                                            <div class="raty" data-score="{$LIST_RECORD[$LIST_HEADER]}">   
                                        {else if $LIST_HEADER eq 'name' || $LIST_HEADER eq 'title'}
                                            <span class="imagePopOver" data-id="{if $MODE eq 'Movies'}{$LIST_RECORD['movie_id']}{else}{$LIST_RECORD['game_id']}{/if}">{$LIST_RECORD[$LIST_HEADER]}</span>
                                        {else}
                                            {$LIST_RECORD[$LIST_HEADER]}
                                        {/if}
                                    </td>
                                {/foreach}
                                <td>
                                    <span class="pull-right">
                                        {if $PROFILE eq 'customer'}
                                            <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Buy</button>
                                            <button type="button" class="btn btn-default btn-xs" style="margin-left: 8px;"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Rent</button>
                                        {/if}
                                        {strip}
                                            {if $PROFILE eq 'employee'}
                                                <span class="glyphicon glyphicon-edit handPointer" data-mode='{$MODE}' data-item-id="{if $MODE eq 'Movies'}{$LIST_RECORD['movie_id']}{else}{$LIST_RECORD['game_id']}{/if}" style="font-size: 15px;margin-top: 4px;" aria-hidden="true"></span>
                                                <span class="glyphicon glyphicon-trash handPointer deleteItem" data-mode='{$MODE}' data-item-id="{if $MODE eq 'Movies'}{$LIST_RECORD['movie_id']}{else}{$LIST_RECORD['game_id']}{/if}" style="font-size: 15px;margin-top: 4px;margin-left: 6px;" aria-hidden="true"></span>
                                            {/if}
                                        {/strip}
                                    </span>
                                </td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{/strip}