/*
 *  RD-Google Map - v0.1
 *  Easy as hell Google Map Api Jquery plugin.
 *
 *  Made by Evgeniy Gusarov (Stmechanus || Diversant)
 *
 *  Under MIT License
 */


;
(function ($) {
    'use strict'

    var def_settings = {
            cntClass: 'map',
            mapClass: 'map_model',
            locationsClass: 'map_locations',
            marker: {
                basic: 'images/gmap_marker.png',
                active: 'images/gmap_marker_active.png'
            },
            styles: []
        },

        defaults = {
            map: {
                x: -73.9924068,
                y: 40.646197,
                zoom: 14
            },
            locations: []
        };


    var getLocations = function ($map, settings) {
        var $locations = $map.parent().find('.' + settings.locationsClass).find('li');

        var locations = [];


        if ($locations.length > 0) {
            $locations.each(function (i) {
                var $loc = $(this);

                if ($loc.data('x') && $loc.data('y')) {
                    locations[i] = {
                        x: $loc.data('x'),
                        y: $loc.data('y'),
                        basic: $loc.data('basic') ? $loc.data('basic') : settings.marker.basic,
                        active: $loc.data('active') ? $loc.data('active') : settings.marker.active
                    }

                    if (!$.trim($loc.html())) {
                        locations[i].content = false;
                    } else {
                        locations[i].content = '<div class="iw-content">' + $loc.html() + '</div>';
                    }
                }
            });
        }
        return locations;
    }

    $.fn.googleMap = function (settings) {

        settings = $.extend(true, {}, def_settings, settings);

        $(this).each(function () {
            var $this = $(this);

            var options = $.extend(
                true, {}, defaults,
                {
                    map: {
                        x: $this.data('x'),
                        y: $this.data('y'),
                        zoom: $this.data('zoom')
                    },
                    locations: getLocations($this, settings)
                }
            );

            var map = new google.maps.Map(this, {
                    center: new google.maps.LatLng(
                        parseFloat(options.map.y),
                        parseFloat(options.map.x)
                    ),
                    scrollwheel: false,
                    styles: settings.styles,
                    zoom: options.map.zoom
                }),
                infowindow = new google.maps.InfoWindow(),
                markers = [];

            for (var i in options.locations) {
                markers[i] = new google.maps.Marker(
                    {
                        position: new google.maps.LatLng(
                            parseFloat(options.locations[i].y),
                            parseFloat(options.locations[i].x)),
                        map: map,
                        icon: options.locations[i].basic,
                        index: i
                    }
                );


                if (options.locations[i].content) {
                    google.maps.event.addListener(markers[i], 'click', function () {
                        for (var j in markers) {
                            markers[j].setIcon(options.locations[j].basic);
                        }

                        infowindow.setContent(options.locations[this.index].content);
                        infowindow.open(map, this);
                        $('.gm-style-iw').parent().parent().addClass("gm-wrapper");
                        this.setIcon(options.locations[this.index].active);
                    });
                    google.maps.event.addListener(infowindow, 'closeclick', function () {
                        for (var j in markers) {
                            markers[j].setIcon(options.locations[j].basic);
                        }
                    });
                }
            }

            google.maps.event.addDomListener(window, 'resize', function() {
                map.setCenter(new google.maps.LatLng(
                    parseFloat(options.map.y),
                    parseFloat(options.map.x)
                ));
            });
        });
    };


})(jQuery);
