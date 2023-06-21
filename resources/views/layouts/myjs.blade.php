<script>
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items:1,
        nav:true,
        loop:true,
        autoplay:true,
        autoplayHoverPause:true,
    });

    //post delete
    $('.dlt-btn').on('click',function(){
       if( confirm('Are you want to delete it?')){
            let id=$(this).data('id');
            $('#postId').val(id);
            $('#dltForm').submit();
        }
        else{
            return false;
        }
    });
});
</script>