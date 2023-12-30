<script>
$(document).ready(function() {
    $("#addMenu").click(function() {
        var name = $("#name").val();
        var price = $("#price").val();
        var image = $("#image").val();

        $("table tbody").append("<tr><td>" + name + "</td><td>" + price + "</td><td><img src='" + image + "' alt='" + name + "'></td></tr>");
    });
});
</script>