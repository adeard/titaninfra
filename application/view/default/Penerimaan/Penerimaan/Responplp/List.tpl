<!-- INITIALISATION PATH THEME -->
{assign var="PATH_THEMES" value="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}"}
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
{$this->partial("layout/layoutcontent")}
{$this->partial("layout/breadcrumbs")}
<!-- END PAGE HEADER-->

{literal}
<script>
jQuery(document).ready(function() {
	$(".nav-tabs a").click(function (e) {
		e.preventDefault();
		var url = $(this).attr('data-href');
		var href = this.hash;
		var pane = $(this);
		var target = $(this).attr('data-target');

		$(href).load(url,function(result){      
			pane.tab("show");
		});
		
		$(target).load(url, function() {
			$('.nav-tabs').tab();
		}); 
		jQuery.uniform.update(pane);
	});
	
	var baseURL = base_url+"penerimaan/responplp/terima";
    $('#terima').load(baseURL, function() {
        $('.nav-tabs').tab();
    }); 
	
});
</script>
{/literal}

<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<div class="row">
    <div class="col-md-12">
        <div class="portlet box blue-madison">
            <div class="portlet-title">
                <div class="caption">
                    Respon PLP
                </div>
                <div class="actions"></div>
            </div>
            <div class="portlet-body">
                <ul class="nav nav-tabs">
                	<li class="active">
                        <a 	data-href="{$this->basePath()}/penerimaan/responplp/terima" 
                        	data-target="#terima"
                            data-toggle="tab">
                        	Di Terima 
                        </a>
                    </li>
                    <li>
                        <a 	data-href="{$this->basePath()}/penerimaan/responplp/tolak" 
                        	data-target="#tolak" 
                            data-toggle="tab">
                        	Di Tolak 
                        </a>
                    </li>
                </ul>
                
                <div class="tab-content">
                	<div class="tab-pane fade active in" id="terima">
                    	Page is loading, please wait .....
                    </div>
                    
                    <div class="tab-pane fade" id="tolak">
                    	Page is loading, please wait .....
                    </div>
                </div>
        	</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT-->