//*DOCUMENT READY*//

$(document).ready(function() {

    $("ul li").on("click", function() {
        $("li").removeClass("active");
        $(this).addClass("active");
    });

    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus()
    })

});
//*DOCUMENT READY*//
