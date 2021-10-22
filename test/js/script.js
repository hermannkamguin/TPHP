$(document).ready(function () {
    $(".rectangle").on("mousedown", function(e){
        let posdep = e;
        let topf = $(this).position().top;
        $(".rectangle").on("mousemove", function (event) {
            let pos = $(".rectangle").position();
            //$(this).on("mouseenter", function(){
            $(this).css({
                'top' : topf + event.pageY-posdep.pageY,
                'left' : event.pageX-posdep.pageX});

            console.log(event.pageX + " " + pos.left + " " + posdep.pageX);
            console.log(event.pageY + " " + pos.top + " " + posdep.pageY);
            //$("p").text(event.pageX);
        })
    });

  //  });
});