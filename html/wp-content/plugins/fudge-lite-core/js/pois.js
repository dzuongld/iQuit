jQuery(document).ready(function () {
    jQuery('.fudge_lite_explore .container').gmap({scrollwheel: false}).bind('init', function (ev, map) {
        if (fudge_lite_pois_vars.pois.length > 0) {
            for (i = 0; i < fudge_lite_pois_vars.pois.length; i++) {

                jQuery('.fudge_lite_explore .container').gmap('addMarker', {
                    'position': fudge_lite_pois_vars.pois[i].lat + ',' + fudge_lite_pois_vars.pois[i].lng,
                    'bounds': true,
                    'icon': new google.maps.MarkerImage(fudge_lite_pois_vars.template_directory_uri + '/images/schemes/' + fudge_lite_pois_vars.palette + '/icon-map-pointer.png'),
                    'customAddress': fudge_lite_pois_vars.pois[i].address
                }).click(function () {
                    jQuery('.fudge_lite_explore .container').gmap('openInfoWindow', {'content': this.customAddress}, this);
                });

            }
        }
    });
});