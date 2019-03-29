// SLider Progress

$(function () {
    var time = 2;
    var $bar,
        $slick,
        isPause,
        tick,
        percentTime;

    $slick = $('.slider');
    // $slick.slick({
    //     arrows: true,
    //     speed: 1200,
    //     adaptiveHeight: false
    // });

    $bar = $('.slider-progress .progress');

    function startProgressbar() {
        console.log("Reset");
        resetProgressbar();
        percentTime = 0;
        isPause = false;
        tick = setInterval(interval, 30);
    }

    function interval() {
        if (isPause === false) {
            percentTime += 1 / (time + 0.1);
            $bar.css({
                width: percentTime + "%"
            });
            if (percentTime >= 100) {
                // $slick.slick('slickNext');
                // $(".dots li").trigger('mouseover');
                // $('.dots li').removeClass("acive");
                // $('.dots li').addClass("active").parent().next().addClass("show2");

                $('.dots li.active').removeClass("active").next().addClass("active");
                // $('.dots li').parent().next().addClass("active");
                startProgressbar();
            }
        }
    }

    function resetProgressbar() {
        $bar.css({
            width: 0 + '%'
        });
        clearTimeout(tick);
    }

    // startProgressbar();
    console.log("Start1");

    // $(".dots li").mouseover(function () {
    //     startProgressbar();
    //     console.log("Mouseover");
    // });
    $(".dots li").on('mouseenter', function () {
        // startProgressbar();
        console.log("Mouseover");
    });
});



// Initialize and add the map
function initMap() {
    // The location of Uluru
    var uluru = {
        lat: 18.994212,
        lng: 72.828050
    };
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('map'), {
            zoom: 14,
            center: uluru
        });

    var contentString = '<div id="content">' +
        '<div id="siteNotice">' +
        '</div>' +
        '<h1 id="firstHeading" class="firstHeading">Summo Brandcom</h1>' +
        '</div>' +
        '</div>';

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });



    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({
        position: uluru,
        map: map,
        title: 'Summo Brandcom'
    });
    marker.addListener('click', function () {
        infowindow.open(map, marker);
    });

}