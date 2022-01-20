<?php
/* Smarty version 3.1.39, created on 2021-10-08 17:42:57
  from 'C:\wamp64\www\prestashop\modules\tupsmodulehelper\views\templates\admin\_configure\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6160670133f865_68567049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3616c6758a6b6c6d3ba3f897fdce59a41f8a3de9' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\tupsmodulehelper\\views\\templates\\admin\\_configure\\helpers\\form\\form.tpl',
      1 => 1633705401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6160670133f865_68567049 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7084463046160670129d116_42973087', "defaultForm");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_944780165616067012bc459_24953750', "fieldset");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_399917729616067012d5cb2_99207634', "input");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "defaultForm"} */
class Block_7084463046160670129d116_42973087 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'defaultForm' => 
  array (
    0 => 'Block_7084463046160670129d116_42973087',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-lg-2">
            <div id="options_tab" class="">
                <ul class="list-group nav-tabs">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'tab');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['tab']->value['form']['tab_name'] != 'save_tab') {?>
                        <li <?php if ($_smarty_tpl->tpl_vars['tab']->value['form']['tab_name'] == 'main_tab') {?>class="active"<?php }?>><a class="list-group-item" data-toggle="tab"
                                                                                        href="#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['form']['tab_name'],'htmlall','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['form']['legend']['title'],'htmlall','UTF-8' ));?>
</a></li><?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <ul>
            </div>
        </div>
        <div id="list-container" class="col-lg-10 tab-content">
            <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

        </div>
    </div>
<?php
}
}
/* {/block "defaultForm"} */
/* {block "fieldset"} */
class Block_944780165616067012bc459_24953750 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'fieldset' => 
  array (
    0 => 'Block_944780165616067012bc459_24953750',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['fieldset']->value['form']['tab_name'] != 'save_tab') {?>
        <div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['f']->value < 1) {?>active<?php }?>" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fieldset']->value['form']['tab_name'],'htmlall','UTF-8' ));?>
">
        <?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['assigned_list']))) {?>
            <div class="tab-pane clearfix"><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['assigned_list'];?>
</div>
        <?php }?>
        <div class="tab-pane">
    <?php }?>
    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php if ($_smarty_tpl->tpl_vars['fieldset']->value['form']['tab_name'] != 'save_tab') {?>
        </div>
        </div><?php }
}
}
/* {/block "fieldset"} */
/* {block "input"} */
class Block_399917729616067012d5cb2_99207634 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_399917729616067012d5cb2_99207634',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'checkbox') {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['expand']))) {?>
            <a class="btn btn-default show_checkbox<?php if (strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default']) == 'hide') {?> hidden<?php }?>" href="#">
                <i class="icon-<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['show']['icon'];?>
"></i>
                <?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['show']['text'];?>

                <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['expand']['print_total'])) && $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'] > 0) {?>
                    <span class="badge"><?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'];?>
</span>
                <?php }?>
            </a>
            <a class="btn btn-default hide_checkbox<?php if (strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default']) == 'show') {?> hidden<?php }?>" href="#">
                <i class="icon-<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['hide']['icon'];?>
"></i>
                <?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['hide']['text'];?>

                <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['expand']['print_total'])) && $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'] > 0) {?>
                    <span class="badge"><?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'];?>
</span>
                <?php }?>
            </a>
        <?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values']['query'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('id_checkbox', (($_smarty_tpl->tpl_vars['input']->value['name']).('_')).($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['id']]));?>
            <div class="checkbox<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['expand'])) && strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default']) == 'show') {?> hidden<?php }?>">
                <label for="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
[]" id="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>"<?php if ((isset($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['id']]))) {?> value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['id']],'html','UTF-8' ));?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) && in_array($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['id']],$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?> checked="checked"<?php }?> /><?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['name']];?>
</label>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }
}
}
/* {/block "input"} */
}
