<?php
/* Smarty version 4.5.2, created on 2025-04-29 17:34:08
  from 'module_file_tpl:UserGuide;admin_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6810f1703ffd71_76579321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f783f3fd8864a48e736da89f46327d0e8ee3de5d' => 
    array (
      0 => 'module_file_tpl:UserGuide;admin_settings.tpl',
      1 => 1745940352,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6810f1703ffd71_76579321 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\admin\\plugins\\function.tab_header.php','function'=>'smarty_function_tab_header',),1=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\admin\\plugins\\function.tab_start.php','function'=>'smarty_function_tab_start',),2=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\lib\\plugins\\function.cms_action_url.php','function'=>'smarty_cms_function_cms_action_url',),3=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\admin\\plugins\\function.admin_icon.php','function'=>'smarty_function_admin_icon',),4=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\lib\\plugins\\function.form_start.php','function'=>'smarty_function_form_start',),5=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\lib\\plugins\\function.uploads_url.php','function'=>'smarty_function_uploads_url',),6=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\lib\\plugins\\function.form_end.php','function'=>'smarty_function_form_end',),7=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\admin\\plugins\\function.tab_end.php','function'=>'smarty_function_tab_end',),));
?>

<?php if ($_smarty_tpl->tpl_vars['separate_settings']->value) {?>
    <?php echo smarty_function_tab_header(array('name'=>'pages','label'=>((string)$_smarty_tpl->tpl_vars['mod']->value->Lang('tab_pages'))),$_smarty_tpl);?>

    <?php echo smarty_function_tab_header(array('name'=>'options','label'=>((string)$_smarty_tpl->tpl_vars['mod']->value->Lang('tab_options'))),$_smarty_tpl);?>

<?php }?>



<?php echo smarty_function_tab_start(array('name'=>'pages'),$_smarty_tpl);?>

    <div class="guide">
        <div class="edit-link-container">
        <?php if ($_smarty_tpl->tpl_vars['separate_settings']->value) {?>
            <a class="edit-link" href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'defaultadmin'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('view_user_guide');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'view.gif'),$_smarty_tpl);?>
</a>
        <?php } else { ?>
            <span class="admin-only">* = <?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('admin_only_visible');?>
</span>
        <?php }?>
        </div>
        <div class="pageoptions">
            <a href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'edit_page'),$_smarty_tpl);?>
"><?php echo smarty_function_admin_icon(array('icon'=>'newobject.gif'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('add_item');?>
</a>
            <span id="loader" data-icon="<?php echo $_smarty_tpl->tpl_vars['loadingIcon']->value;?>
"> </span>
        </div>
    </div>

    <table class="pagetable">
        <thead>
            <tr>
                <th><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_title');?>
</th>
                <th class="pageicon"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_active');?>
</th>
                <th class="pageicon"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_admin');?>
</th>
                <th class="pageicon"></th>
                <th class="pageicon"></th>
            </tr>
        </thead>
        <tbody class="sortable-list">
        <?php if (empty($_smarty_tpl->tpl_vars['pages']->value)) {?>
            <tr class="row1">
                <td colspan="5">--- <?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('none');?>
 ---</td>
            </tr>

        <?php } else { ?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page');
$_smarty_tpl->tpl_vars['page']->index = -1;
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
$_smarty_tpl->tpl_vars['page']->index++;
$__foreach_page_2_saved = $_smarty_tpl->tpl_vars['page'];
?>
                <?php echo smarty_cms_function_cms_action_url(array('action'=>'edit_page','pid'=>$_smarty_tpl->tpl_vars['page']->value->id,'assign'=>'edit_url'),$_smarty_tpl);?>

                <tr class="<?php if (!(1 & $_smarty_tpl->tpl_vars['page']->index)) {?>row1<?php } else { ?>row2<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
" data-reorder="<?php echo smarty_cms_function_cms_action_url(array('action'=>'reorder_page','pid'=>$_smarty_tpl->tpl_vars['page']->value->id,'after'=>-1,'forjs'=>1),$_smarty_tpl);?>
">
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['edit_url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('edit');?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
</a></td>
                    <td class="pagepos"><a class="active_page" href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'toggle_active_page','pid'=>$_smarty_tpl->tpl_vars['page']->value->id),$_smarty_tpl);?>
" ><?php if ($_smarty_tpl->tpl_vars['page']->value->active) {
echo smarty_function_admin_icon(array('icon'=>'true.gif'),$_smarty_tpl);
} else {
echo smarty_function_admin_icon(array('icon'=>'false.gif'),$_smarty_tpl);
}?></a>
                    </td>
                    <td class="pagepos"><a class="active_admin" href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'toggle_admin_only','pid'=>$_smarty_tpl->tpl_vars['page']->value->id),$_smarty_tpl);?>
" ><?php if ($_smarty_tpl->tpl_vars['page']->value->admin) {
echo smarty_function_admin_icon(array('icon'=>'true.gif'),$_smarty_tpl);
} else {
echo smarty_function_admin_icon(array('icon'=>'false.gif'),$_smarty_tpl);
}?></a>
                    </td>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['edit_url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('edit');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'edit.gif'),$_smarty_tpl);?>
</a></td>
                    <td><a class="del_user_guide_page" href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'delete_page','pid'=>$_smarty_tpl->tpl_vars['page']->value->id),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('delete');?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
" data-confirm="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('confirm_delete');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'delete.gif'),$_smarty_tpl);?>
</a></td>
                </tr>
            <?php
$_smarty_tpl->tpl_vars['page'] = $__foreach_page_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
        </tbody>
    </table>



<?php echo smarty_function_tab_start(array('name'=>'options'),$_smarty_tpl);?>

    <div class="guide">
        <div class="edit-link-container">
        <?php if ($_smarty_tpl->tpl_vars['separate_settings']->value) {?>
            <a class="edit-link" href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'defaultadmin'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('view_user_guide');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'view.gif'),$_smarty_tpl);?>
</a>
        <?php } else { ?>
            <span class="admin-only">* = <?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('admin_only_visible');?>
</span>
        <?php }?>
        </div>
    </div>

<?php echo smarty_function_form_start(array('action'=>'admin_settings'),$_smarty_tpl);?>

<fieldset>
    <legend><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('tab_options');?>
 </legend>

        <div class="pageoverflow">
            <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_customModuleName');?>
:</p>
            <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['input_customModuleName']->value;?>
</p>
        </div>
        <div class="pageoverflow">
            <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_adminSection');?>
:</p>
            <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['input_adminSection']->value;?>
</p>
        </div>
        <div class="pageoverflow">
            <p class="pagetext">
                <input type="checkbox" class="cms_checkbox" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
separate_settings" value="1" <?php if ($_smarty_tpl->tpl_vars['separate_settings']->value) {?>checked="checked"<?php }?>> <?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_separate_settings');?>

            </p>
        </div>
        <div class="pageoverflow">
            <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_customCSS');?>
:</p>
            <p class="pageinput"><?php echo nl2br((string) $_smarty_tpl->tpl_vars['mod']->value->Lang('text_customCSS'), (bool) 1);?>
</p>
        </div>
        <div class="pageoverflow">
            <br>
            <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['input_useSmarty']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_useSmarty');?>
:</p>
            <p class="pageinput"><?php echo nl2br((string) $_smarty_tpl->tpl_vars['mod']->value->Lang('help_useSmarty'), (bool) 1);?>
</p>
        </div>
</fieldset>

<div class="pageoverflow">
    <p class="pageinput">
        <button type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
submit" value="save_settings" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary" role="button" aria-disabled="false">
            <span class="ui-button-icon-primary ui-icon ui-icon-circle-check"></span>
            <span class="ui-button-text"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('save_options');?>
</span>
        </button>
    </p>
</div>
<br>


<fieldset>
   <legend><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_import_export');?>
 </legend>
        <div class="pageoverflow">
            <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_import');?>
:</p>
            <p class="pageinput">
                <?php echo $_smarty_tpl->tpl_vars['input_import']->value;?>
&nbsp;&nbsp;  


                <button type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
submit" value="xml_import" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary" role="button" aria-disabled="false">
                    <span class="ui-button-icon-primary ui-icon ui-icon-arrowthickstop-1-w"></span>
                    <span class="ui-button-text"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('xml_import');?>
</span>
                </button>
            </p>
        </div>
    <br>

    <div class="pageoverflow">
        <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_exportImageFolder');?>
:</p>
        <div class="input-group">
            <span class="input-group-text" id="basic-addon3"><?php echo smarty_function_uploads_url(array(),$_smarty_tpl);?>
/</span>
            <input type="text" class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
input_imageFolder" value="<?php echo $_smarty_tpl->tpl_vars['imageFolder']->value;?>
" size="50"/>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('text_exportImageFolder');?>

    </div>

    <div class="pageoverflow">
        <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_export');?>
:</p>
        <button type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
submit" value="xml_export" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary" role="button" aria-disabled="false">
            <span class="ui-button-icon-primary ui-icon ui-icon-arrowthickstop-1-e"></span>
            <span class="ui-button-text"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('xml_export');?>
</span>
        </button>
    </div>
</fieldset>
<br>


<?php if ($_smarty_tpl->tpl_vars['hasUsersGuideMod']->value) {?><fieldset>
    <legend><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_import_UsersGuide');?>
 </legend>
        <div class="pageoverflow">
            <button type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
submit" value="import_UsersGuide_module" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary" role="button" aria-disabled="false">
                <span class="ui-button-icon-primary ui-icon ui-icon-arrowthickstop-1-w"></span>
                <span class="ui-button-text"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('import_UsersGuide');?>
 <?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('text_UsersGuide');?>
</span>
            </button>
        </div>
</fieldset>
<br>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['hasUserGuide2Mod']->value) {?><fieldset>
    <legend><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_import_UserGuide2');?>
 </legend>
        <div class="pageoverflow">
            <button type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
submit" value="import_UserGuide2_module" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary" role="button" aria-disabled="false">
                <span class="ui-button-icon-primary ui-icon ui-icon-arrowthickstop-1-w"></span>
                <span class="ui-button-text"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_import_UserGuide2');?>
 <?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('text_UserGuide2');?>
</span>
            </button>
        </div>
</fieldset>
<br>
<?php }?>

<?php echo smarty_function_form_end(array(),$_smarty_tpl);?>



<?php if ($_smarty_tpl->tpl_vars['separate_settings']->value) {?>
    <?php echo smarty_function_tab_end(array(),$_smarty_tpl);?>

<?php }
}
}
