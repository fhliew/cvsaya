$(document).ready(function() {
    $("#top-border").on('change','#pilihtemacv',function(){
        $.ajax(
            window.location = "/cv/"+this.value.toLowerCase()
        );
    })
});   