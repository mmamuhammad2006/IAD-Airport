<html lang="en">

<head>
    {{-- <style>@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style> --}}
    {{-- <script src="/assets/js/jquery-3.5.1.min.js"></script> --}}
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" crossorigin=""
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" crossorigin=""
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    {{-- <script src="/assets/js/angular.min.js"></script> --}}
    {{-- angular cdn --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.3/angular.min.js"
        integrity="sha512-KZmyTq3PLx9EZl0RHShHQuXtrvdJ+m35tuOiwlcZfs/rE7NZv29ygNA8SFCkMXTnYZQK2OX0Gm2qKGfvWEtRXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        (function() {
            // save these original methods before they are overwritten
            var proto_initIcon = L.Marker.prototype._initIcon;
            var proto_setPos = L.Marker.prototype._setPos;

            var oldIE = (L.DomUtil.TRANSFORM === 'msTransform');

            L.Marker.addInitHook(function() {
                var iconOptions = this.options.icon && this.options.icon.options;
                var iconAnchor = iconOptions && this.options.icon.options.iconAnchor;
                if (iconAnchor) {
                    iconAnchor = (iconAnchor[0] + 'px ' + iconAnchor[1] + 'px');
                }
                this.options.rotationOrigin = this.options.rotationOrigin || iconAnchor || 'center bottom';
                this.options.rotationAngle = this.options.rotationAngle || 0;

                // Ensure marker keeps rotated during dragging
                this.on('drag', function(e) {
                    e.target._applyRotation();
                });
            });

            L.Marker.include({
                _initIcon: function() {
                    proto_initIcon.call(this);
                },

                _setPos: function(pos) {
                    proto_setPos.call(this, pos);
                    this._applyRotation();
                },

                _applyRotation: function() {
                    if (this.options.rotationAngle) {
                        this._icon.style[L.DomUtil.TRANSFORM + 'Origin'] = this.options.rotationOrigin;

                        if (oldIE) {
                            // for IE 9, use the 2D rotation
                            this._icon.style[L.DomUtil.TRANSFORM] = 'rotate(' + this.options.rotationAngle +
                                'deg)';
                        } else {
                            // for modern browsers, prefer the 3D accelerated version
                            this._icon.style[L.DomUtil.TRANSFORM] += ' rotateZ(' + this.options
                                .rotationAngle + 'deg)';
                        }
                    }
                },

                setRotationAngle: function(angle) {
                    this.options.rotationAngle = angle;
                    this.update();
                    return this;
                },

                setRotationOrigin: function(origin) {
                    this.options.rotationOrigin = origin;
                    this.update();
                    return this;
                }
            });
        })();
    </script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/gh/wouterbulten/kalmanjs@79d9def2cf67acf2befe794509530be4cc58ab21/dist/kalman.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@turf/turf@5/turf.min.js"></script>


    <script src="https://unpkg.com/rbush@2.0.2/rbush.js"></script>
    <script type="text/javascript">
        (function() {
            // save these original methods before they are overwritten
            var proto_initIcon = L.Marker.prototype._initIcon;
            var proto_setPos = L.Marker.prototype._setPos;

            var oldIE = (L.DomUtil.TRANSFORM === 'msTransform');

            L.Marker.addInitHook(function() {
                var iconOptions = this.options.icon && this.options.icon.options;
                var iconAnchor = iconOptions && this.options.icon.options.iconAnchor;
                if (iconAnchor) {
                    iconAnchor = (iconAnchor[0] + 'px ' + iconAnchor[1] + 'px');
                }
                this.options.rotationOrigin = this.options.rotationOrigin || iconAnchor || 'center bottom';
                this.options.rotationAngle = this.options.rotationAngle || 0;

                // Ensure marker keeps rotated during dragging
                this.on('drag', function(e) {
                    e.target._applyRotation();
                });
            });

            L.Marker.include({
                _initIcon: function() {
                    proto_initIcon.call(this);
                },

                _setPos: function(pos) {
                    proto_setPos.call(this, pos);
                    this._applyRotation();
                },

                _applyRotation: function() {
                    if (this.options.rotationAngle) {
                        this._icon.style[L.DomUtil.TRANSFORM + 'Origin'] = this.options.rotationOrigin;

                        if (oldIE) {
                            // for IE 9, use the 2D rotation
                            this._icon.style[L.DomUtil.TRANSFORM] = 'rotate(' + this.options.rotationAngle +
                                'deg)';
                        } else {
                            // for modern browsers, prefer the 3D accelerated version
                            this._icon.style[L.DomUtil.TRANSFORM] += ' rotateZ(' + this.options
                                .rotationAngle + 'deg)';
                        }
                    }
                },

                setRotationAngle: function(angle) {
                    this.options.rotationAngle = angle;
                    this.update();
                    return this;
                },

                setRotationOrigin: function(origin) {
                    this.options.rotationOrigin = origin;
                    this.update();
                    return this;
                }
            });
        })();
    </script>
    <script type="text/javascript">
        window.flags = {
            "AD": "🇦🇩",
            "AE": "🇦🇪",
            "AF": "🇦🇫",
            "AG": "🇦🇬",
            "AI": "🇦🇮",
            "AL": "🇦🇱",
            "AM": "🇦🇲",
            "AO": "🇦🇴",
            "AQ": "🇦🇶",
            "AR": "🇦🇷",
            "AS": "🇦🇸",
            "AT": "🇦🇹",
            "AU": "🇦🇺",
            "AW": "🇦🇼",
            "AX": "🇦🇽",
            "AZ": "🇦🇿",
            "BA": "🇧🇦",
            "BB": "🇧🇧",
            "BD": "🇧🇩",
            "BE": "🇧🇪",
            "BF": "🇧🇫",
            "BG": "🇧🇬",
            "BH": "🇧🇭",
            "BI": "🇧🇮",
            "BJ": "🇧🇯",
            "BL": "🇧🇱",
            "BM": "🇧🇲",
            "BN": "🇧🇳",
            "BO": "🇧🇴",
            "BQ": "🇧🇶",
            "BR": "🇧🇷",
            "BS": "🇧🇸",
            "BT": "🇧🇹",
            "BV": "🇧🇻",
            "BW": "🇧🇼",
            "BY": "🇧🇾",
            "BZ": "🇧🇿",
            "CA": "🇨🇦",
            "CC": "🇨🇨",
            "CD": "🇨🇩",
            "CF": "🇨🇫",
            "CG": "🇨🇬",
            "CH": "🇨🇭",
            "CI": "🇨🇮",
            "CK": "🇨🇰",
            "CL": "🇨🇱",
            "CM": "🇨🇲",
            "CN": "🇨🇳",
            "CO": "🇨🇴",
            "CR": "🇨🇷",
            "CU": "🇨🇺",
            "CV": "🇨🇻",
            "CW": "🇨🇼",
            "CX": "🇨🇽",
            "CY": "🇨🇾",
            "CZ": "🇨🇿",
            "DE": "🇩🇪",
            "DJ": "🇩🇯",
            "DK": "🇩🇰",
            "DM": "🇩🇲",
            "DO": "🇩🇴",
            "DZ": "🇩🇿",
            "EC": "🇪🇨",
            "EE": "🇪🇪",
            "EG": "🇪🇬",
            "EH": "🇪🇭",
            "ER": "🇪🇷",
            "ES": "🇪🇸",
            "ET": "🇪🇹",
            "EU": "🇪🇺",
            "FI": "🇫🇮",
            "FJ": "🇫🇯",
            "FK": "🇫🇰",
            "FM": "🇫🇲",
            "FO": "🇫🇴",
            "FR": "🇫🇷",
            "GA": "🇬🇦",
            "UK": "🇬🇧",
            "GB": "🇬🇧",
            "GD": "🇬🇩",
            "GE": "🇬🇪",
            "GF": "🇬🇫",
            "GG": "🇬🇬",
            "GH": "🇬🇭",
            "GI": "🇬🇮",
            "GL": "🇬🇱",
            "GM": "🇬🇲",
            "GN": "🇬🇳",
            "GP": "🇬🇵",
            "GQ": "🇬🇶",
            "GR": "🇬🇷",
            "GS": "🇬🇸",
            "GT": "🇬🇹",
            "GU": "🇬🇺",
            "GW": "🇬🇼",
            "GY": "🇬🇾",
            "HK": "🇭🇰",
            "HM": "🇭🇲",
            "HN": "🇭🇳",
            "HR": "🇭🇷",
            "HT": "🇭🇹",
            "HU": "🇭🇺",
            "ID": "🇮🇩",
            "IE": "🇮🇪",
            "IL": "🇮🇱",
            "IM": "🇮🇲",
            "IN": "🇮🇳",
            "IO": "🇮🇴",
            "IQ": "🇮🇶",
            "IR": "🇮🇷",
            "IS": "🇮🇸",
            "IT": "🇮🇹",
            "JE": "🇯🇪",
            "JM": "🇯🇲",
            "JO": "🇯🇴",
            "JP": "🇯🇵",
            "KE": "🇰🇪",
            "KG": "🇰🇬",
            "KH": "🇰🇭",
            "KI": "🇰🇮",
            "KM": "🇰🇲",
            "KN": "🇰🇳",
            "KP": "🇰🇵",
            "KR": "🇰🇷",
            "KW": "🇰🇼",
            "KY": "🇰🇾",
            "KZ": "🇰🇿",
            "LA": "🇱🇦",
            "LB": "🇱🇧",
            "LC": "🇱🇨",
            "LI": "🇱🇮",
            "LK": "🇱🇰",
            "LR": "🇱🇷",
            "LS": "🇱🇸",
            "LT": "🇱🇹",
            "LU": "🇱🇺",
            "LV": "🇱🇻",
            "LY": "🇱🇾",
            "MA": "🇲🇦",
            "MC": "🇲🇨",
            "MD": "🇲🇩",
            "ME": "🇲🇪",
            "MF": "🇲🇫",
            "MG": "🇲🇬",
            "MH": "🇲🇭",
            "MK": "🇲🇰",
            "ML": "🇲🇱",
            "MM": "🇲🇲",
            "MN": "🇲🇳",
            "MO": "🇲🇴",
            "MP": "🇲🇵",
            "MQ": "🇲🇶",
            "MR": "🇲🇷",
            "MS": "🇲🇸",
            "MT": "🇲🇹",
            "MU": "🇲🇺",
            "MV": "🇲🇻",
            "MW": "🇲🇼",
            "MX": "🇲🇽",
            "MY": "🇲🇾",
            "MZ": "🇲🇿",
            "NA": "🇳🇦",
            "NC": "🇳🇨",
            "NE": "🇳🇪",
            "NF": "🇳🇫",
            "NG": "🇳🇬",
            "NI": "🇳🇮",
            "NL": "🇳🇱",
            "NO": "🇳🇴",
            "NP": "🇳🇵",
            "NR": "🇳🇷",
            "NU": "🇳🇺",
            "NZ": "🇳🇿",
            "OM": "🇴🇲",
            "PA": "🇵🇦",
            "PE": "🇵🇪",
            "PF": "🇵🇫",
            "PG": "🇵🇬",
            "PH": "🇵🇭",
            "PK": "🇵🇰",
            "PL": "🇵🇱",
            "PM": "🇵🇲",
            "PN": "🇵🇳",
            "PR": "🇵🇷",
            "PS": "🇵🇸",
            "PT": "🇵🇹",
            "PW": "🇵🇼",
            "PY": "🇵🇾",
            "QA": "🇶🇦",
            "RE": "🇷🇪",
            "RO": "🇷🇴",
            "RS": "🇷🇸",
            "RU": "🇷🇺",
            "RW": "🇷🇼",
            "SA": "🇸🇦",
            "SB": "🇸🇧",
            "SC": "🇸🇨",
            "SD": "🇸🇩",
            "SE": "🇸🇪",
            "SG": "🇸🇬",
            "SH": "🇸🇭",
            "SI": "🇸🇮",
            "SJ": "🇸🇯",
            "SK": "🇸🇰",
            "SL": "🇸🇱",
            "SM": "🇸🇲",
            "SN": "🇸🇳",
            "SO": "🇸🇴",
            "SR": "🇸🇷",
            "SS": "🇸🇸",
            "ST": "🇸🇹",
            "SV": "🇸🇻",
            "SX": "🇸🇽",
            "SY": "🇸🇾",
            "SZ": "🇸🇿",
            "TC": "🇹🇨",
            "TD": "🇹🇩",
            "TF": "🇹🇫",
            "TG": "🇹🇬",
            "TH": "🇹🇭",
            "TJ": "🇹🇯",
            "TK": "🇹🇰",
            "TL": "🇹🇱",
            "TM": "🇹🇲",
            "TN": "🇹🇳",
            "TO": "🇹🇴",
            "TR": "🇹🇷",
            "TT": "🇹🇹",
            "TV": "🇹🇻",
            "TW": "🇹🇼",
            "TZ": "🇹🇿",
            "UA": "🇺🇦",
            "UG": "🇺🇬",
            "UM": "🇺🇲",
            "US": "🇺🇸",
            "UY": "🇺🇾",
            "UZ": "🇺🇿",
            "VA": "🇻🇦",
            "VC": "🇻🇨",
            "VE": "🇻🇪",
            "VG": "🇻🇬",
            "VI": "🇻🇮",
            "VN": "🇻🇳",
            "VU": "🇻🇺",
            "WF": "🇼🇫",
            "WS": "🇼🇸",
            "XK": "🇽🇰",
            "YE": "🇾🇪",
            "YT": "🇾🇹",
            "ZA": "🇿🇦",
            "ZM": "🇿🇲",
            "ZW": "🇿🇼"
        };

        var base_url = "/";
        var base_url = "https://airlabs.co/";
        // follow https://airlabs.co/ to get your api key
        window.api_key = "821c8b89-918b-4c4c-9011-9322aa38dfdd";

        $(document).ready(function() {
            $('#set_key').click(function() {
                api_key = $('#api_key').val() || "821c8b89-918b-4c4c-9011-9322aa38dfdd";
            });

            $("body").tooltip({
                selector: '[data-toggle=tooltip]'
            });

            var mymap = L.map('mapid', {
                worldCopyJump: false
            }).setView([38.9522, -77.4579], 8);

            L.tileLayer(
                'http://services.arcgisonline.com/arcgis/rest/services/Ocean/World_Ocean_Base/MapServer/tile/{z}/{y}/{x}', {
                    attribution: false,
                    zoomControl: false,
                    draggable: false,
                    interactive: false,
                    subdomains: 'abcd'
                }).addTo(mymap);

            var getIcon = function(dir, state) {
                var color = (state && state === 'active' ? '42ba96' : '335eea');
                var border = '#ffffff';
                var svg = '<svg id="plane_21" height="640" style="transform:rotate(' + (+dir || 0) +
                    'deg)" preserveAspectRatio="xMidYMid meet" viewBox="0 0 640 640" width="640" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path id="a" d="m321.66 609.69c57.26 14.18 89.07 22.05 95.44 23.63 5.72 1.55 11.03-2.07 11.88-6.54.7-1.25.7-1.25.14-3.21-.08-2.51-.71-22.61-.79-25.13.15-3.21-1.66-5.86-4.17-7.26-7.36-5.1-66.25-45.86-73.61-50.96-2.51-1.4-3.62-5.31-3.47-8.52.77-18.5 6.97-166.45 7.75-184.95-.41-5.17 5.6-10.04 10.07-9.19 1.25.7 3.21.14 3.21.14 25.35 11.19 228.21 100.7 253.57 111.89 5.02 2.8 11.58-.12 13.13-5.84.7-1.26 1.4-2.51.85-4.47-.12-4.51-1.06-40.58-1.17-45.09.14-3.21-1.67-5.87-4.18-7.27-26.57-19.93-239.12-179.36-265.68-199.29-2.51-1.4-4.32-4.06-4.18-7.27-.47-46.34-3.27-112.1-4.65-124.39-1.02-48.3-70.31-95.19-79.17 15.07-.59 12.84.96 77.9 3.27 112.1.55 1.96-.85 4.47-3.5 6.28-26.54 20.41-238.81 183.72-265.35 204.13-1.4 2.51-2.8 5.02-2.94 8.23-.01 4.44-.08 39.96-.09 44.4-1.54 5.72 2.78 9.77 9.2 10.06 1.25.7 3.21.15 3.91-1.1 25.43-11.65 228.86-104.85 254.28-116.5 4.62-2.36 10.34-.82 12 5.05.55 1.96.55 1.96 1.11 3.91.7 18.5 6.34 166.48 7.04 184.98-.14 3.21-1.54 5.72-4.9 8.78-7.38 5.27-66.43 47.37-73.81 52.63-2.65 1.81-4.05 4.32-4.2 7.53-.05 2.44-.42 21.98-.46 24.43.4 5.16 4.02 10.47 9.19 10.07 1.25.7 1.95-.56 3.21.14 6.47-1.76 38.83-10.59 97.07-26.47z"/></defs><use fill="#' +
                    color + '" xlink:href="#a" stroke="' + border +
                    '" stroke-width="2%" /><use fill="none" xlink:href="#a"/></svg>';
                return L.icon({
                    iconUrl: 'data:image/svg+xml;base64,' + btoa(svg),
                    iconSize: [20, 20, dir],
                    iconAnchor: [10, 10, dir]
                });
            };

            var planes = {};
            var delay_timeout = null;
            var repeat_timeout = null;
            var get_flights = function() {
                clearTimeout(delay_timeout);
                delay_timeout = setTimeout(function() {

                    var bounds = mymap.getBounds();
                    var sW = bounds._southWest;
                    var nE = bounds._northEast;
                    var bbox = [
                        sW.lat, sW.lng, nE.lat, nE.lng

                        /* sW.lat >= -90 ? sW.lat : -90,
                        sW.lng >= -180 ? sW.lng : -180,
                        nE.lat <= 90 ? nE.lat : 90,
                        nE.lng <= 180 ? nE.lng : 180*/
                    ].join(',');
                    var zoom = mymap.getZoom();

                    $.get(base_url + 'api/v9/flights?zoom=' + zoom + '&api_key=' + api_key + '&bbox=' +
                        bbox,
                        function(result) {
                            planes = (result.response || []).reduce(function(all, one) {
                                all[one.hex] = one;
                                return all;
                            }, {});

                            clearTimeout(repeat_timeout);
                            repeat_timeout = setTimeout(get_flights, 4444);

                            redraw_planes();
                        }).fail(function() {
                        clearTimeout(repeat_timeout);
                        repeat_timeout = setTimeout(get_flights, 11111);
                    });
                }, 555);
            };

            mymap.on('zoomend', get_flights);
            mymap.on('dragend', get_flights);
            get_flights();

            var markers = {};
            var play_interval = null;
            var redraw_planes = function() {
                clearInterval(play_interval);

                for (let hex in markers) {
                    if (!planes[hex]) {
                        mymap.removeLayer(markers[hex]);
                        delete markers[hex];
                    }
                }

                for (let hex in planes) {
                    if (!planes.hasOwnProperty(hex)) continue;

                    var label = "";
                    if (planes[hex].flight_icao || planes[hex].flight_iata) {
                        if (planes[hex].flag && window.flags[planes[hex].flag]) {
                            label += window.flags[planes[hex].flag] + " ";
                        }

                        label += "<b>" + (planes[hex].flight_icao || "") + ' / ' + (planes[hex].flight_iata ||
                            "") + "</b>";
                    }

                    if (planes[hex].dep_icao || planes[hex].dep_iata) {
                        label += "<br/>" + (planes[hex].dep_icao || "") + " / " + (planes[hex].dep_iata || "");
                    }
                    if (planes[hex].arr_icao || planes[hex].arr_iata) {
                        label += " → " + (planes[hex].arr_icao || "") + " / " + (planes[hex].arr_iata || "");
                    }

                    if (planes[hex].hex) {
                        label += "<br/># <b>" + planes[hex].hex + "</b>";
                    }
                    if (planes[hex].reg_number) {
                        label += "<br/>® <b>" + planes[hex].reg_number + "</b>";
                    }
                    if (planes[hex].aircraft_icao) {
                        label += "<br/>✈ " + planes[hex].aircraft_icao;
                    }

                    if (planes[hex].speed) {
                        label += "<br/>↔ Speed: " + planes[hex].speed + " kph";
                    }
                    if (planes[hex].alt || planes[hex].alt == 0) {
                        label += "<br/>↑ Alt: " + planes[hex].alt + " m";
                    }
                    if (planes[hex].dir) {
                        label += "<br/>⤥ Direction: " + planes[hex].dir + "°";
                    }
                    if (planes[hex].lat && planes[hex].lng) {
                        label += "<br/>⌖ " + planes[hex].lat + "," + planes[hex].lng;
                    }

                    if (!markers[hex]) {
                        markers[hex] = L.marker(
                            [planes[hex].lat, planes[hex].lng], {
                                icon: getIcon(planes[hex].dir)
                            }
                        );
                        markers[hex].bindPopup(label);
                        markers[hex].on('mouseover', function(e) {
                            this.setIcon(getIcon(this.options.icon.options.iconSize[2], 'active'));
                        });
                        markers[hex].on('mouseout', function(e) {
                            this.setIcon(getIcon(this.options.icon.options.iconSize[2]));
                        });
                        markers[hex].on('click', function(e) {
                            this.openPopup();
                            setTimeout(function() {
                                this.closePopup();
                            }.bind(this), 10000);
                        });
                        markers[hex].addTo(mymap);
                    } else {
                        markers[hex].setLatLng([planes[hex].lat, planes[hex].lng]);
                        markers[hex].setIcon(getIcon(planes[hex].dir));
                        markers[hex].bindPopup(label);
                    }
                }

                play_interval = setInterval(function() {
                    //
                }, 555);
            };
            //mymap.touchZoom.disable();
            //mymap.doubleClickZoom.disable();
            //mymap.scrollWheelZoom.disable();
            //mymap.boxZoom.disable();
            //mymap.keyboard.disable();
            // mymap.dragging.disable();
            //$("#mapid .leaflet-control-zoom").css("visibility", "hidden");
            //$("#mapid .leaflet-control-attribution").css("visibility", "hidden");
        });
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class="">
    <div class="container-fluid justify-content-center" style="position: relative;height:100%;width:100%">
        <div class="d-flex" style="position: absolute;left:0;right:0;top:0;bottom:0">
            <div class="col-12 justify-content-center text-center" style="height:100%;width:100%">
                <br>
                <div class="input-group d-none" style="height:100%;width:100%">
                    <input id="api_key" class="form-control form-control-lg" type="text" placeholder="Your API Key"
                        value="821c8b89-918b-4c4c-9011-9322aa38dfdd">
                    <button id="set_key" class="btn btn-outline-primary" type="button"> Apply API Key </button>
                </div>
                <br>
                <div id="mapid" style="position: absolute;top:0;"
                    class="h-100 w-100 leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
                    tabindex="0">
                    <div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(-520px, 21px, 0px);">
                        <div class="leaflet-pane leaflet-tile-pane">
                            <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                                <div class="leaflet-tile-container leaflet-zoom-animated"
                                    style="z-index: 17; transform: translate3d(454px, 13px, 0px) scale(0.5);"></div>
                                <div class="leaflet-tile-container leaflet-zoom-animated"
                                    style="z-index: 18; transform: translate3d(454px, 12px, 0px) scale(1);"><img
                                        alt="" role="presentation"
                                        src="http://services.arcgisonline.com/arcgis/rest/services/Ocean/World_Ocean_Base/MapServer/tile/2/1/2"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(453px, -5px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="http://services.arcgisonline.com/arcgis/rest/services/Ocean/World_Ocean_Base/MapServer/tile/2/1/3"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(709px, -5px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="http://services.arcgisonline.com/arcgis/rest/services/Ocean/World_Ocean_Base/MapServer/tile/2/2/2"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(453px, 251px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="http://services.arcgisonline.com/arcgis/rest/services/Ocean/World_Ocean_Base/MapServer/tile/2/2/3"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(709px, 251px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="http://services.arcgisonline.com/arcgis/rest/services/Ocean/World_Ocean_Base/MapServer/tile/2/1/1"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(197px, -5px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="http://services.arcgisonline.com/arcgis/rest/services/Ocean/World_Ocean_Base/MapServer/tile/2/1/0"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(965px, -5px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="http://services.arcgisonline.com/arcgis/rest/services/Ocean/World_Ocean_Base/MapServer/tile/2/2/1"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(197px, 251px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="http://services.arcgisonline.com/arcgis/rest/services/Ocean/World_Ocean_Base/MapServer/tile/2/2/0"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(965px, 251px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="http://services.arcgisonline.com/arcgis/rest/services/Ocean/World_Ocean_Base/MapServer/tile/2/0/2"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(453px, -261px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="http://services.arcgisonline.com/arcgis/rest/services/Ocean/World_Ocean_Base/MapServer/tile/2/0/3"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(709px, -261px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="http://services.arcgisonline.com/arcgis/rest/services/Ocean/World_Ocean_Base/MapServer/tile/2/3/2"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(453px, 507px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="http://services.arcgisonline.com/arcgis/rest/services/Ocean/World_Ocean_Base/MapServer/tile/2/3/3"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(709px, 507px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="http://services.arcgisonline.com/arcgis/rest/services/Ocean/World_Ocean_Base/MapServer/tile/2/0/1"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(197px, -261px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="http://services.arcgisonline.com/arcgis/rest/services/Ocean/World_Ocean_Base/MapServer/tile/2/0/0"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(965px, -261px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="http://services.arcgisonline.com/arcgis/rest/services/Ocean/World_Ocean_Base/MapServer/tile/2/3/1"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(197px, 507px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="http://services.arcgisonline.com/arcgis/rest/services/Ocean/World_Ocean_Base/MapServer/tile/2/3/0"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(965px, 507px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="http://services.arcgisonline.com/arcgis/rest/services/Ocean/World_Ocean_Base/MapServer/tile/2/1/0"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(-59px, -5px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="http://services.arcgisonline.com/arcgis/rest/services/Ocean/World_Ocean_Base/MapServer/tile/2/1/1"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(1221px, -5px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="http://services.arcgisonline.com/arcgis/rest/services/Ocean/World_Ocean_Base/MapServer/tile/2/2/0"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(-59px, 251px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="http://services.arcgisonline.com/arcgis/rest/services/Ocean/World_Ocean_Base/MapServer/tile/2/2/1"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(1221px, 251px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="http://services.arcgisonline.com/arcgis/rest/services/Ocean/World_Ocean_Base/MapServer/tile/2/0/0"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(-59px, -261px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="http://services.arcgisonline.com/arcgis/rest/services/Ocean/World_Ocean_Base/MapServer/tile/2/0/1"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(1221px, -261px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="http://services.arcgisonline.com/arcgis/rest/services/Ocean/World_Ocean_Base/MapServer/tile/2/3/0"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(-59px, 507px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="http://services.arcgisonline.com/arcgis/rest/services/Ocean/World_Ocean_Base/MapServer/tile/2/3/1"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(1221px, 507px, 0px); opacity: 1;">
                                </div>
                            </div>
                        </div>
                        <div class="leaflet-pane leaflet-shadow-pane"></div>
                        <div class="leaflet-pane leaflet-overlay-pane"></div>
                        <div class="leaflet-pane leaflet-marker-pane"></div>
                        <div class="leaflet-pane leaflet-tooltip-pane"></div>
                        <div class="leaflet-pane leaflet-popup-pane"></div>
                        <div class="leaflet-proxy leaflet-zoom-animated"
                            style="transform: translate3d(1811.5px, 553px, 0px) scale(2);"></div>
                    </div>
                    <div class="leaflet-control-container">
                        <div class="leaflet-top leaflet-left">
                            <div class="leaflet-control-zoom leaflet-bar leaflet-control"><a
                                    class="leaflet-control-zoom-in" href="#" title="Zoom in" role="button"
                                    aria-label="Zoom in">+</a><a class="leaflet-control-zoom-out" href="#"
                                    title="Zoom out" role="button" aria-label="Zoom out">−</a></div>
                        </div>
                        <div class="leaflet-top leaflet-right"></div>
                        <div class="leaflet-bottom leaflet-left"></div>
                        <div class="leaflet-bottom leaflet-right">
                            <div class="leaflet-control-attribution leaflet-control"><a href="https://leafletjs.com"
                                    title="A JS library for interactive maps">Leaflet</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
