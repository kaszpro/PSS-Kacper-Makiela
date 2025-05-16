<?php
/* Smarty version 4.5.2, created on 2025-05-16 14:08:21
  from 'C:\xampp\htdocs\oceniamyfilmy\admin\templates\listtags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_68272ab5403d72_99088386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f30ca62f74fdea074dab223117a2492c2d26fd7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\oceniamyfilmy\\admin\\templates\\listtags.tpl',
      1 => 1745940350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68272ab5403d72_99088386 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\lib\\smarty\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<div class="pagecontainer">
  <div class="pageoverflow"><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</div>
  <?php if ((isset($_smarty_tpl->tpl_vars['subheader']->value))) {?>
    <div class="pageheader"><?php echo $_smarty_tpl->tpl_vars['subheader']->value;?>

    <?php if ((isset($_smarty_tpl->tpl_vars['wiki_url']->value)) && (isset($_smarty_tpl->tpl_vars['image_help_external']->value))) {?>
       <span class="helptext">
         <a class='helpicon' href="<?php echo $_smarty_tpl->tpl_vars['wiki_url']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['image_help_external']->value;?>
</a><a href="<?php echo $_smarty_tpl->tpl_vars['wiki_url']->value;?>
" target="_blank"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'lang' ][ 0 ], array( 'help' ));?>
</a> (<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'lang' ][ 0 ], array( 'new_window' ));?>
)
       </span>
    <?php }?>
    </div>
  <?php }?>
  
  <?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
    <br /><?php echo $_smarty_tpl->tpl_vars['content']->value;?>

  <?php } elseif ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
    <div class="pageerrorcontainer"><div class="pageoverflow"><ul class="pageerror"><li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li></ul></div></div>
  <?php } elseif ((isset($_smarty_tpl->tpl_vars['plugins']->value))) {?>
    <table class="pagetable">
      <thead> 
       <tr>
         <th><span title="<?php echo lang_by_realm('tags','tag_name');?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'lang' ][ 0 ], array( 'name' ));?>
</span></th>
         <th><span title="<?php echo lang_by_realm('tags','tag_type');?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'lang' ][ 0 ], array( 'type' ));?>
</span></th>
	 <th class="pagew10"><span title="<?php echo lang_by_realm('tags','tag_adminplugin');?>
"><?php echo lang('adminplugin');?>
</span></th>
         <th class="pagew10"><span title="<?php echo lang_by_realm('tags','tag_cachable');?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'lang' ][ 0 ], array( 'cachable' ));?>
</span></th>
         <th class="pagew10"><span title="<?php echo lang_by_realm('tags','tag_help');?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'lang' ][ 0 ], array( 'help' ));?>
</span></th>
         <th class="pagew10"><span title="<?php echo lang_by_realm('tags','tag_about');?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'lang' ][ 0 ], array( 'about' ));?>
</span></th>
       </tr>
      </thead> 
      <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugins']->value, 'one');
$_smarty_tpl->tpl_vars['one']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->do_else = false;
?>
	<?php echo smarty_function_cycle(array('values'=>"row1,row2",'assign'=>'rowclass'),$_smarty_tpl);?>

	<tr class="<?php echo $_smarty_tpl->tpl_vars['rowclass']->value;?>
">
         <td>
           <?php if ((isset($_smarty_tpl->tpl_vars['one']->value['help_url']))) {?>
             <a href="<?php echo $_smarty_tpl->tpl_vars['one']->value['help_url'];?>
" title="<?php echo lang_by_realm('tags','viewhelp');?>
"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</a>
           <?php } else { ?>
             <?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>

           <?php }?>
         </td>
         <td>
            <span title="<?php echo lang_by_realm('tags',$_smarty_tpl->tpl_vars['one']->value['type']);?>
"><?php echo $_smarty_tpl->tpl_vars['one']->value['type'];?>
</span>
         </td>
         <td>
            <?php if ((isset($_smarty_tpl->tpl_vars['one']->value['admin'])) && $_smarty_tpl->tpl_vars['one']->value['admin']) {?>
              <span title="<?php echo lang_by_realm('tags','title_admin');?>
"><?php echo lang('yes');?>
</span>
            <?php } else { ?>
              <span title="<?php echo lang_by_realm('tags','title_notadmin');?>
"><?php echo lang('no');?>
</span>
            <?php }?>
         </td>
         <td>
            <?php if ((isset($_smarty_tpl->tpl_vars['one']->value['cachable'])) && $_smarty_tpl->tpl_vars['one']->value['cachable'] == 'yes') {?>
              <span title="<?php echo lang_by_realm('tags','title_cachable');?>
"><?php echo lang('yes');?>
</span>
            <?php } else { ?>
              <span title="<?php echo lang_by_realm('tags','title_notcachable');?>
"><?php echo lang('no');?>
</span>
            <?php }?>
         </td>
         <td>
           <?php if ((isset($_smarty_tpl->tpl_vars['one']->value['help_url']))) {?>
             <a href="<?php echo $_smarty_tpl->tpl_vars['one']->value['help_url'];?>
" title="<?php echo lang_by_realm('tags','viewhelp');?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'lang' ][ 0 ], array( 'help' ));?>
</a>
           <?php }?>
         </td>
         <td>
           <?php if ((isset($_smarty_tpl->tpl_vars['one']->value['about_url']))) {?>
             <a href="<?php echo $_smarty_tpl->tpl_vars['one']->value['about_url'];?>
" title="<?php echo lang_by_realm('tags','viewabout');?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'lang' ][ 0 ], array( 'about' ));?>
</a>
           <?php }?>
         </td>
       </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
    </table>
  <?php }?>
</div><?php }
}
