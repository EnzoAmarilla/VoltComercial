<script src="{{ asset('/plugins/jquery.min.js') }}"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=IntersectionObserver"></script>
<script src="{{ asset('/plugins/plugins.js') }}"></script>
<script src="{{ asset('/js/functions.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<!-- Include lazysizes -->
<script src="{{ asset('/js/lazysizes.min.js') }}" async=""></script>

<script>
    $('#modal-privacy').on('hidden.bs.modal', function () {
        if($("#modal_doble").val() == 1){
            $('body').addClass('modal-open');
        }
    });
</script>
<script>
    function modal_doble_active(){
        $("#modal_doble").val(1);
    }

    function modal_doble_inactive(){
        $("#modal_doble").val(0);
    }
</script>