<?php /* Smarty version Smarty-3.1.19, created on 2014-12-03 10:03:38
         compiled from "C:\wamp\www\prestashop\admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15605547ed1ea3cd9d8-58119685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dff60735dee96201bbcceb11e5b6851ca48cba0' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\admin\\themes\\default\\template\\content.tpl',
      1 => 1406814056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15605547ed1ea3cd9d8-58119685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547ed1ea465f97_54095522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547ed1ea465f97_54095522')) {function content_547ed1ea465f97_54095522($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
