<style type="text/css">
.page-breadcrumb li.active a{
	text-decoration: none;
	cursor:auto;
}
</style>
<div class="page-bar">
    <ul class="page-breadcrumb">
        {section name=menu loop=$dashMenu}
            {if $dashMenu[menu].active == 'active'}
            	{if $dashMenu[menu].name == 'Home'}
                <li>
                	<i class="fa fa-home"></i>
                    <a href="javascript:void(0)">{$dashMenu[menu].name}</a>
                </li>
                {else}
                <li class='active'>
                    <a href="javascript:void(0)">{$dashMenu[menu].name}</a>
                </li>
                {/if}
            {else}
                <li>
                    {if $dashMenu[menu].name == 'Home'}
                    <i class="fa fa-home"></i>
                    <a href="{$this->basePath()}{$dashMenu[menu].url}">{$dashMenu[menu].name}</a>
                    <i class="fa fa-angle-right"></i>
                    {else}
                    <a data-href="{$this->basePath()}{$dashMenu[menu].url}" class="ajaxify">{$dashMenu[menu].name}</a>
                    <i class="fa fa-angle-right"></i>
                    {/if}
                </li>
            {/if}
        {/section}
    </ul>
</div>
