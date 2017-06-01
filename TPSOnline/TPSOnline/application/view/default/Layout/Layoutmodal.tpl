<!-- INITIALISATION PATH THEME -->
{assign var="PATH_THEMES" value="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}"}
<!-- END INITIALISATION PATH THEME -->

<script src="{$PATH_THEMES}/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="{$PATH_THEMES}/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- BEGIN SWEET ALERT -->
<link href="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}/assets/global/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
<script src="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}/assets/global/plugins/sweetalert/sweetalert-dev.js"></script>
<!-- END SWEET ALERT -->
    
<!-- BEGIN TABLE JS -->
{if $sForm == 'table'}
	<!-- BEGIN SELECT2 -->
	<link rel="stylesheet" type="text/css" href="{$PATH_THEMES}/assets/global/plugins/select2/select2.css"/>
    <script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/select2/select2.min.js"></script>
    <!-- END SELECT2 -->
    
    <!-- BEGIN DATATABLES -->
    <link rel="stylesheet" type="text/css" href="{$PATH_THEMES}/assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css"/>
    <link rel="stylesheet" type="text/css" href="{$PATH_THEMES}/assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"/>
    <link rel="stylesheet" type="text/css" href="{$PATH_THEMES}/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
    
    <script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
    <script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
    <script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
    <script type='text/javascript' src='{$PATH_THEMES}/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js'></script>
    <script type='text/javascript' src='{$PATH_THEMES}/assets/global/plugins/datatables/plugins/bootstrap/fnReloadAjax.js'></script>
    <script type='text/javascript' src='{$PATH_THEMES}/assets/admin/pages/scripts/table-advanced.js'></script>
    <!-- END DATATABLE -->
   
    
    <script type='text/javascript' src='{$PATH_THEMES}/assets/admin/pages/scripts/custom.js'></script>
    
    {literal}
    <script>
    jQuery(document).ready(function() {
       Custom.init();
       TableAdvanced.init();
    });
    </script>
    {/literal}
{/if}
<!-- END TABLE JS -->
    
<!-- BEGIN FORM JS -->
{if $sForm == 'form'}

    <!-- BEGIN VALIDATE -->
    <script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
    <script src="{$PATH_THEMES}/assets/admin/pages/scripts/form-validation.js"></script>
    <!-- END VALIDATE -->
    
    <!-- BEGIN SELECT2 -->
    <link rel="stylesheet" type="text/css" href="{$PATH_THEMES}/assets/global/plugins/select2/select2.css"/>
	<script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/select2/select2.min.js"></script>
    <script src="{$PATH_THEMES}/assets/admin/pages/scripts/form-samples.js"></script>
    <!-- END SELECT2 -->
    
    <!-- BEGIN DATEPICKER -->
    <link rel="stylesheet" type="text/css" href="{$PATH_THEMES}/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"/>
    <script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="{$PATH_THEMES}/assets/admin/pages/scripts/components-pickers.js"></script>
    <!-- END DATEPICKER -->
    
    <!-- BEGIN ICHECK -->
    <link href="{$PATH_THEMES}/assets/global/plugins/icheck/skins/all.css" rel="stylesheet"/>
    <script src="{$PATH_THEMES}/assets/global/plugins/icheck/icheck.min.js"></script>
    <script src="{$PATH_THEMES}/assets/admin/pages/scripts/form-icheck.js"></script>
    <!-- END ICHECK -->
    
    <!-- BEGIN EDITOR -->
    <script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/ckeditor/ckeditor.js"></script>
    <!-- END EDITOR -->

    
    {literal}
    <script>
    jQuery(document).ready(function() { 
       FormValidation.init();
       FormiCheck.init();
       FormSamples.init();
	   ComponentsPickers.init();
    });
    </script>
    {/literal}
{/if}
<!-- END FORM JS -->