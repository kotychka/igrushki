<footer class="footer_info">
    <div class="menu_bar">
        Copiright 2015
    </div>
</footer>

<!-- <script src="/template/js/jquery-2.2.4.min.js"></script> -->
<script src="/template/js/jquery.min.js"></script>
<script src="/template/js/jquery.cycle2.js"></script>
<script src="/template/js/jquery.cycle2.carousel.js"></script>
<script src="/template/js/main.js"></script>
<script>
    $(document).ready(function() {
        $(".in_cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>
</body>
</html>