<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                Lorem ipsum dolor sit amet, euismod aliquet vel dignissim, et tortor id facilisis in suspendisse ut, mauris lorem porttitor non lobortis vivamus nihil, quisque natoque, nullam eleifend blandit elit. Diam ligula id sodales, dictum ac quisque vivamus at dui dolor, sapien maecenas eget. Nibh nec ultricies ipsum malesuada, taciti eu vestibulum libero, sollicitudin ipsum, suscipit platea lacus nunc viverra curabitur urna, porta lacus ut suspendisse. Vestibulum turpis, pulvinar pulvinar voluptas orci sem eu, volutpat gravida lorem eos natoque sem, nascetur wisi enim orci nibh facilisis vivamus, fames in massa molestie vivamus tortor hac. Ante esse in fermentum sed, lobortis mi suspendisse dapibus sollicitudin ligula dolor, tortor in dictum cras at, vehicula nibh pellentesque sed. Venenatis vestibulum bibendum, neque commodo quam accumsan vitae luctus, ultrices hic quis est laoreet fermentum. Molestie massa aliquam quia natoque, integer proin vestibulum augue a a nec, odio gravida sed magnis in nec congue. Nullam vel vulputate suscipit risus, in nibh ut accusantium morbi eros dui, sapien in odio eu, volutpat lacus rutrum varius justo egestas. Nunc augue nibh maecenas lectus nec, consequat sit blandit. Porttitor sit nullam pellentesque, sollicitudin congue, sodales eget ac sollicitudin volutpat. Magna imperdiet sodales turpis et aenean diam, molestiae libero eget in eu placerat, ante luctus mauris taciti.
            </div>
        </div>
    </div>
</div>

<script>
    function centerModal() {
        $(this).css('display', 'block');
        var $dialog = $(this).find(".modal-dialog");
        var offset = ($(window).height() - $dialog.height()) / 2;
        // Center modal vertically in window
        $dialog.css("margin-top", offset);
    }

    $('.modal').on('show.bs.modal', centerModal);
    $(window).on("resize", function () {
        $('.modal:visible').each(centerModal);
    });
</script>