{include file="admin/blocks/head.tpl"}
<script src="/Views/admin/logic.js"></script>
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>

<button id="btnn">Ready</button>

<div class="result"></div>

<script>
    $("#btnn").click(function(){
        $.ajax({
            url: "http://ishop:8000/admin/dashboard/categories",
            contentType: "application/json",
            method: "GET",
            success: function(data) {
                $(".result").html(" ");
                data.forEach(function(item, i, data) {
                    $(".result").append("<p><h5>" + item.name + "</h5></p>");
                });
            }
        });
    });
</script>

<div class="items"></div>
{include file="global/footer.tpl"}
