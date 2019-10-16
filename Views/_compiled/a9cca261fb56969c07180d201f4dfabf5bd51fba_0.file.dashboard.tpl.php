<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-16 19:23:53
  from 'C:\OSPanel\domains\ishop.loc\Views\admin\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5da7441917b6f3_53133524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9cca261fb56969c07180d201f4dfabf5bd51fba' => 
    array (
      0 => 'C:\\OSPanel\\domains\\ishop.loc\\Views\\admin\\dashboard.tpl',
      1 => 1571243031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/blocks/head.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5da7441917b6f3_53133524 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/blocks/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="/Views/admin/logic.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>

        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"><?php echo '</script'; ?>
>

<div class="col-12">   
    <div class="row">
        <button id="categoryShowBtn" class="col-4">Показать категории</button>
        <div class="col-4"></div>
        <button id="itemsShowBtn" class="col-4">Показать товары</button>
    </div>
</div>

<div class="col-12">   
    <div class="row">
        <div class="categories col-4"></div>
        <div class="col-4"></div>
        <div class="items col-4"></div>
    </div>
</div>

<?php echo '<script'; ?>
>
    $("#categoryShowBtn").click(function(){
        $.ajax({
            url: "dashboard/categories",
            method: "GET",
            success: function(data) {
                var array = JSON.parse(data);
                $(".categories").html(" "); 
                array.forEach(function(item, i, data) {
                    $(".categories").append("<p><h5>" + item["name"] + "</h5></p>");      
                });
                  
            }
        });
    });

    $("#itemsShowBtn").click(function(){
        $.ajax({
            url: "dashboard/items",
            method: "GET",
            success: function(data) {
                var array = JSON.parse(data);
                $(".items").html(" "); 
                array.forEach(function(item, i, data) {
                    $(".items").append("<p><h5>" + item["name"] + "</h5></p>");      
                });
                  
            }
        });
    });
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
