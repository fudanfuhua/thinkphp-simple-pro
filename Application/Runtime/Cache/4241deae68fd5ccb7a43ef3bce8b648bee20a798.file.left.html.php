<?php /* Smarty version Smarty-3.1.6, created on 2016-04-21 18:15:43
         compiled from "./Application/Cloud/View\common\left\left.html" */ ?>
<?php /*%%SmartyHeaderCode:245535718a84fd80138-56874546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4241deae68fd5ccb7a43ef3bce8b648bee20a798' => 
    array (
      0 => './Application/Cloud/View\\common\\left\\left.html',
      1 => 1461233714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245535718a84fd80138-56874546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '__APP__' => 0,
    'leftNav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5718a84fd91a7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5718a84fd91a7')) {function content_5718a84fd91a7($_smarty_tpl) {?><div class="left-col">
    <ul>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['__APP__']->value;?>
/Dashboard">
                
                <span class="nav <?php if ($_smarty_tpl->tpl_vars['leftNav']->value=='dashboard'){?>nav-active<?php }?>"><i class="dashboard-icon"></i><br/>仪表板</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['__APP__']->value;?>
/Audit">
                <span class="nav <?php if ($_smarty_tpl->tpl_vars['leftNav']->value=='audit'){?>nav-active<?php }?>"><i class="search-dashboard-icon"></i><br/>审计仪表板</span>
            </a>
        </li>
    </ul>
    
</div>



<?php }} ?>