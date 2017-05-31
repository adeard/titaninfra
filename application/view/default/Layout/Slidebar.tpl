
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
 			
            <!--<li class="sidebar-search-wrapper" style="margin-bottom:10px"></li>-->
            <!-- SUPER ADMIN -->
            <li class="start active open">
				<a href="{$this->basePath()}/main">
					<i class="icon-home"></i>
					<span class="title">Home</span>
					<span class="selected"></span>
					<span class="open"></span>
				</a>
			</li>
           
            {foreach from=$sMenu item=Item}
                {if $Item['Rows'] == true}
                    {assign var='Routes' value= 'javascript:;'}
                    {assign var='Ajaxify' value= ''}
                {else}
                    {assign var='Routes' value= $Item['Routes']}
                    {assign var='Ajaxify' value= 'ajaxify'}
                {/if}
                
                {if $sParent == $Item['Kode']}
                	{assign var='activeParentMenu'		value= 'active open'}
                    {assign var='selectParentMenu'		value= '<span class="selected"></span>'}
                    {assign var='arrowParentMenu'		value= '<span class="arrow open"></span>'}
                {else}
                    {if $sKode == $Item['Kode']}
                        {assign var='activeParentMenu'		value= 'active open'}
                        {assign var='selectParentMenu'		value= '<span class="selected"></span>'}
                        
                        {if $Item['Rows'] == true}
                            {assign var='arrowParentMenu'	value= '<span class="arrow open"></span>'}
                        {else}
                            {assign var='arrowParentMenu'	value= '<span class="open"></span>'}
                        {/if}
                    {else}
                        {assign var='activeParentMenu'		value= ''}
                        {assign var='selectParentMenu'		value= ''}
                        
                        {if $Item['Rows'] == true}
                            {assign var='arrowParentMenu'	value= '<span class="arrow"></span>'}
                        {else}
                            {assign var='arrowParentMenu'	value= '<span class=""></span>'}
                        {/if}
                    {/if}
               	{/if} 
                
                <li class="{$activeParentMenu}">
                    <a href="{$this->basePath()}{$Routes}" class="{$Ajaxify}">
                        <i class="{$Item['Class']}"></i>
                        <span class="title">{$Item['Menu']}</span>
                        {$selectParentMenu}
                        {$arrowParentMenu}
                    </a>
                    {if $Item['Rows'] == true}
                    <ul class="sub-menu">
                    	{foreach from=$Item['Child'] item=ItemChild}
                        	{if $ItemChild['Rows'] == true}
                                {assign var='Routes' value= 'javascript:;'}
                                {assign var='Ajaxify' value= ''}
                            {else}
                                {assign var='Routes' value= $ItemChild['Routes']}
                                {assign var='Ajaxify' value= 'ajaxify'}
                            {/if}
                          	
                            {if $sKode == $ItemChild['Kode']}
                                {assign var='activeSubMenu'		value= 'active open'}
                                {assign var='selectSubMenu'		value= '<span class="selected"></span>'}
                                
                                {if $ItemChild['Rows'] == true}
                                    {assign var='arrowSubMenu'	value= '<span class="arrow open"></span>'}
                                {else}
                                    {assign var='arrowSubMenu'	value= '<span class="open"></span>'}
                                {/if}
                            {else}
                                {assign var='activeSubMenu'		value= ''}
                                {assign var='selectSubMenu'		value= ''}
                                
                                {if $ItemChild['Rows'] == true}
                                    {assign var='arrowSubMenu'	value= '<span class="arrow"></span>'}
                                {else}
                                    {assign var='arrowSubMenu'	value= '<span class=""></span>'}
                                    
                                    {if $sMenuAct == $ItemChild['Menu']}
                                        {assign var='activeSubMenu'	value= 'active'}
                                    {else}
                                        {assign var='activeSubMenu'	value= ''}
                                    {/if} 
                                {/if}
                            {/if}
                			<li class="{$activeSubMenu}">
                                <a data-href="{$this->basePath()}{$Routes}" class="{$Ajaxify}">
                                    <i class="{$ItemChild['Class']}"></i>
                                    <span class="title">{$ItemChild['Menu']}</span>
                                    {$selectSubMenu}
                                    {$arrowSubMenu}
                                </a>
                                {if $ItemChild['Rows'] == true}
                                <ul class="sub-menu">
                                {foreach from=$ItemChild['Child'] item=ItemSubChild}
                                	{if $ItemSubChild['Rows'] == true}
                                        {assign var='Routes' value= 'javascript:;'}
                                        {assign var='Ajaxify' value= ''}
                                    {else}
                                        {assign var='Routes' value= $ItemSubChild['Routes']}
                                        {assign var='Ajaxify' value= 'ajaxify'}
                                    {/if}
                                    
                                    {if $sMenuAct == $ItemSubChild['Menu']}
                                        {assign var='classActive'	value= 'active'}
                                    {else}
                                        {assign var='classActive'	value= ''}
                                    {/if}  
                                    
                                    <li class="{$classActive}">
                                        <a data-href="{$this->basePath()}{$Routes}" class="{$Ajaxify}">
                                            <i class="{$ItemSubChild['Class']}"></i>
                                            {$ItemSubChild['Menu']}
                                        </a>
                                    </li>
                                {/foreach}
                                </ul>
                                {/if}
                            </li>
                            <!--
                            {if $sMenuAct == $ItemChild['Menu']}
                                {assign var='classActive'	value= 'active'}
                            {else}
                                {assign var='classActive'	value= ''}
                            {/if}  
                            
                            <li class="{$classActive}">
                                <a href="{$Routes}">
                                    <i class="{$ItemChild['Class']}"></i>
                                    {$ItemChild['Menu']}
                                </a>
                            </li>
                            -->
                        {/foreach}
                    </ul>
                    {/if}
                </li>
            {/foreach}
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
<!-- END SIDEBAR -->

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">
    	<!--
    	<div class="page-bar page-bar-logo" style="padding:0 0 0 0; height:120px;">
        	<img src="{$smarty.const.LOGO_HEADER}" width="100%" height="96" style="border-bottom:1px solid #edeef0;">
        </div>
        -->
