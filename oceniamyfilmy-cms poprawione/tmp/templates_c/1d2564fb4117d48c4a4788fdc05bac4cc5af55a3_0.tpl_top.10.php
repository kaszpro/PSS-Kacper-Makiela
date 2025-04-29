<?php
/* Smarty version 4.5.2, created on 2025-04-29 17:26:55
  from 'tpl_top:10' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6810efbfc005b0_65169076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d2564fb4117d48c4a4788fdc05bac4cc5af55a3' => 
    array (
      0 => 'tpl_top:10',
      1 => '1745940357',
      2 => 'tpl_top',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6810efbfc005b0_65169076 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\lib\\plugins\\function.cms_lang_info.php','function'=>'smarty_function_cms_lang_info',),1=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\lib\\plugins\\function.uploads_url.php','function'=>'smarty_function_uploads_url',),2=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),3=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\lib\\plugins\\function.cms_selflink.php','function'=>'smarty_function_cms_selflink',),4=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\lib\\plugins\\function.share_data.php','function'=>'smarty_cms_function_share_data',),));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['process_pagedata'][0], array( array(),$_smarty_tpl ) );
echo smarty_function_cms_lang_info(array('assign'=>'nls'),$_smarty_tpl);
ob_start();
echo smarty_function_uploads_url(array(),$_smarty_tpl);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('theme_path', $_prefixVariable1."/simplex");
echo smarty_function_title(array('assign'=>'main_title'),$_smarty_tpl);
CMS_Content_Block::smarty_internal_fetch_contentblock(array('assign'=>'main_content'),$_smarty_tpl);
echo smarty_function_cms_selflink(array('dir'=>'previous','assign'=>'prev_page'),$_smarty_tpl);
echo smarty_function_cms_selflink(array('dir'=>'next','assign'=>'next_page'),$_smarty_tpl);
echo smarty_cms_function_share_data(array('scope'=>'global','vars'=>'nls,theme_path,main_title,main_content,prev_page,next_page'),$_smarty_tpl);?>
<!doctype html>
<!--[if IE 8]>         <html lang='<?php echo $_smarty_tpl->tpl_vars['nls']->value->htmlarea();?>
' dir='<?php echo $_smarty_tpl->tpl_vars['nls']->value->direction();?>
' class='lt-ie9'> <![endif]-->
<!--[if gt IE 8]><!--> <html lang='<?php echo $_smarty_tpl->tpl_vars['nls']->value->htmlarea();?>
' dir='<?php echo $_smarty_tpl->tpl_vars['nls']->value->direction();?>
'> <!--<![endif]--><?php }
}
