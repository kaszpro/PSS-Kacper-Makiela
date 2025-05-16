<?php
/* Smarty version 4.5.2, created on 2025-05-16 14:12:27
  from 'module_file_tpl:Search;options_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_68272bab96bed0_80735723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5ce62a8faeca249f7c121f8f2f5825c5a79bdc5' => 
    array (
      0 => 'module_file_tpl:Search;options_tab.tpl',
      1 => 1745940352,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68272bab96bed0_80735723 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\admin\\plugins\\function.page_selector.php','function'=>'smarty_function_page_selector',),));
echo $_smarty_tpl->tpl_vars['formstart']->value;?>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_stopwords']->value;?>
:</p>
  <p class="pageinput"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'html_entity_decode' ][ 0 ], array( $_smarty_tpl->tpl_vars['input_stopwords']->value ));?>
</p>
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_resetstopwords']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['input_resetstopwords']->value;?>
</p>
</div>
<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_stemming']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['input_stemming']->value;?>
</p>
</div>
<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_searchtext']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['input_searchtext']->value;?>
</p>
</div>
<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_savephrases']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['input_savephrases']->value;?>
</p>
</div>
<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_alpharesults']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['input_alpharesults']->value;?>
</p>
</div>
<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_resultpage']->value;?>
:</p>
  <p class="pageinput"><?php echo smarty_function_page_selector(array('name'=>((string)$_smarty_tpl->tpl_vars['actionid']->value)."resultpage",'value'=>$_smarty_tpl->tpl_vars['mod']->value->GetPreference('resultpage')),$_smarty_tpl);?>
</p>
</div>
<div class="pageoverflow">
  <p class="pagetext"></p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>

    <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
reindex" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('reindexallcontent');?>
" onclick="return confirm('<?php echo strtr((string)$_smarty_tpl->tpl_vars['mod']->value->Lang('confirm_reindex'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
')"/>
  </p>
</div>
<?php echo $_smarty_tpl->tpl_vars['formend']->value;
}
}
