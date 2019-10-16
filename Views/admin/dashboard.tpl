{include file="admin/blocks/head.tpl"}
<script src="/Views/admin/logic.js"></script>
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>

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

<script>
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
</script>
{include file="global/footer.tpl"}
