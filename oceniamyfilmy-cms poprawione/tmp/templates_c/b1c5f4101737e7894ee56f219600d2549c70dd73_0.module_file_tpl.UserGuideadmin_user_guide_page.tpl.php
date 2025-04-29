<?php
/* Smarty version 4.5.2, created on 2025-04-29 17:34:08
  from 'module_file_tpl:UserGuide;admin_user_guide_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6810f17039b3c2_51169178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1c5f4101737e7894ee56f219600d2549c70dd73' => 
    array (
      0 => 'module_file_tpl:UserGuide;admin_user_guide_page.tpl',
      1 => 1745940352,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6810f17039b3c2_51169178 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\lib\\plugins\\function.cms_action_url.php','function'=>'smarty_cms_function_cms_action_url',),1=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\admin\\plugins\\function.admin_icon.php','function'=>'smarty_function_admin_icon',),2=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\lib\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),3=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\lib\\plugins\\function.uploads_url.php','function'=>'smarty_function_uploads_url',),));
if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
    <div class="warning"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
<?php }?>

<div class="guide">

    <div class="edit-link-container">
    <?php if ($_smarty_tpl->tpl_vars['separate_settings']->value) {?>
        <?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_settings','pid'=>$_smarty_tpl->tpl_vars['page']->value->id,'assign'=>'settings_url'),$_smarty_tpl);?>

        <a class="edit-link" href="<?php echo $_smarty_tpl->tpl_vars['settings_url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_userguide_settings');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'run.gif'),$_smarty_tpl);?>
</a>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['managePermission']->value) {?>
        <?php echo smarty_cms_function_cms_action_url(array('action'=>'edit_page','pid'=>$_smarty_tpl->tpl_vars['page']->value->id,'assign'=>'edit_url'),$_smarty_tpl);?>

        <a class="edit-link" href="<?php echo $_smarty_tpl->tpl_vars['edit_url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('edit');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'edit.gif'),$_smarty_tpl);?>
</a>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value->admin) {?>
        <span class="admin-only">* = <?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('admin_only_visible');?>
</span>
    <?php }?>
    </div>
<?php if ($_smarty_tpl->tpl_vars['page']->value->content != '' && $_smarty_tpl->tpl_vars['page']->value->embed_first == 0) {?>
    <div class="guide-content-top">
        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['page']->value->content,'src="','src="../');?>

    </div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['page']->value->embed_code != '') {?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value->embed_type == 'vimeo') {?>
        <div class="video-container ratio ratio-<?php echo $_smarty_tpl->tpl_vars['aspect']->value;?>
">
            <iframe src="<?php  $_prefixVariable1 = $_smarty_tpl->tpl_vars['mod']->value;
echo $_prefixVariable1::EMBED_PREFIX_VIMEO;
echo $_smarty_tpl->tpl_vars['page']->value->embed_code;?>
&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
        </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value->embed_type == 'youtube') {?>
        <div class="video-container ratio ratio-<?php echo $_smarty_tpl->tpl_vars['aspect']->value;?>
">
            <iframe class="embed-responsive-item" src="<?php  $_prefixVariable2 = $_smarty_tpl->tpl_vars['mod']->value;
echo $_prefixVariable2::EMBED_PREFIX_YOUTUBE;
echo $_smarty_tpl->tpl_vars['page']->value->embed_code;?>
&rel=0&modestbranding=1"></iframe>
        </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value->embed_type == 'local') {?>
        <?php $_smarty_tpl->_assignInScope('result', $_smarty_tpl->tpl_vars['page']->value->parse_local_embed());?>
        <?php if ($_smarty_tpl->tpl_vars['result']->value->errors) {?>
            <div class="warning">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value->errors, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
echo $_smarty_tpl->tpl_vars['error']->value;?>
<br><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>

        <div class="video-container ratio ratio-<?php echo $_smarty_tpl->tpl_vars['aspect']->value;?>
">
            <video width="640" height="360" controls>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value->sources, 'source', false, 'type');
$_smarty_tpl->tpl_vars['source']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['source']->value) {
$_smarty_tpl->tpl_vars['source']->do_else = false;
?>
                <source src="<?php echo smarty_function_uploads_url(array(),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
" type="video/<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                Your browser does not support the video tag.
            </video>
        </div>



    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value->embed_type == 'code') {?>
        <div class="embed-container ratio ratio-16x9 -<?php echo $_smarty_tpl->tpl_vars['aspect']->value;?>
">
            <?php echo $_smarty_tpl->tpl_vars['page']->value->embed_code;?>

        </div>
    <?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['page']->value->content != '' && $_smarty_tpl->tpl_vars['page']->value->embed_first == 1) {?>
    <div class="guide-content-bottom">
        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['page']->value->content,'src="','src="../');?>

    </div>
<?php }?>

</div>


<?php }
}
