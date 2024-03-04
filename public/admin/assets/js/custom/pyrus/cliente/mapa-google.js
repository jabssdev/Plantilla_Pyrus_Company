function iniciarMapa() {
    generarMapa();
}
function generarMapa() {
    google.maps.event.addDomListener(window, "load", function () {
        if (
            document.getElementById("latitud").value == "" ||
            document.getElementById("longitud").value == ""
        ) {
            var latitud = -8.11173879433607;
            var longitud = -79.02869051222532;
        } else {
            var latitud = parseFloat(document.getElementById("latitud").value);
            var longitud = parseFloat(
                document.getElementById("longitud").value
            );
        }

        const myLatLng = { lat: latitud, lng: longitud };

        const mapa = new google.maps.Map(document.getElementById("mapa"), {
            zoom: 15,
            center: myLatLng,
        });

        const marcador = new google.maps.Marker({
            map: mapa,
            draggable: true,
            position: myLatLng,
        });

        marcador.addListener("dragend", function (event) {
            document.getElementById("latitud").value = this.getPosition().lat();
            document.getElementById("longitud").value =
                this.getPosition().lng();
            var geocoder = new google.maps.Geocoder();
            var nuevaPosicion = marcador.getPosition();

            geocoder.geocode(
                { location: nuevaPosicion },
                function (results, status) {
                    if (status === google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            var place = results[0];

                            lugar = {
                                place_id: place.place_id,
                                name: place.name,
                                formatted_address: place.formatted_address,
                                website: place.website,
                            };
                        } else {
                            console.log(
                                "No se encontraron resultados de geocodificación"
                            );
                        }
                    } else {
                        console.log("Error de geocodificación: " + status);
                    }
                }
            );

            var informacion = new google.maps.InfoWindow();

            marcador.addListener("click", function () {
                var request = {
                    placeId: lugar.place_id,
                    fields: ["name", "formatted_address", "website"],
                };

                var placesService = new google.maps.places.PlacesService(mapa);

                placesService.getDetails(request, function (place, status) {
                    if (status === google.maps.places.PlacesServiceStatus.OK) {
                        document.getElementById("direccion").value = place.name;
                        document.getElementById("referencia").value =
                            place.formatted_address;
                        var contenido =
                            "<div><strong>" +
                            place.name +
                            "</strong><br>" +
                            place.formatted_address +
                            "<br>" +
                            (place.website
                                ? '<a href="' +
                                  place.website +
                                  '" target="_blank">Sitio web</a>'
                                : "") +
                            "</div>";

                        informacion.setContent(contenido);
                        informacion.open(mapa, marcador);
                    } else {
                        informacion.setContent(
                            "No se pudo obtener la información del lugar"
                        );
                        informacion.open(mapa, marcador);
                    }
                });
            });
        });
        var geocoder = new google.maps.Geocoder();
        var nuevaPosicion = marcador.getPosition();

        geocoder.geocode(
            { location: nuevaPosicion },
            function (results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        var place = results[0];

                        lugar = {
                            place_id: place.place_id,
                            name: place.name,
                            formatted_address: place.formatted_address,
                            website: place.website,
                        };
                    } else {
                        console.log(
                            "No se encontraron resultados de geocodificación"
                        );
                    }
                } else {
                    console.log("Error de geocodificación: " + status);
                }
            }
        );

        var informacion = new google.maps.InfoWindow();

        marcador.addListener("click", function () {
            var request = {
                placeId: lugar.place_id,
                fields: ["name", "formatted_address", "website"],
            };

            var placesService = new google.maps.places.PlacesService(mapa);

            placesService.getDetails(request, function (place, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK) {
                    var contenido =
                        "<div><strong>" +
                        place.name +
                        "</strong><br>" +
                        place.formatted_address +
                        "<br>" +
                        (place.website
                            ? '<a href="' +
                              place.website +
                              '" target="_blank">Sitio web</a>'
                            : "") +
                        "</div>";

                    informacion.setContent(contenido);
                    informacion.open(mapa, marcador);
                } else {
                    informacion.setContent(
                        "No se pudo obtener la información del lugar"
                    );
                    informacion.open(mapa, marcador);
                }
            });
        });

        var autocomplete = document.getElementById("buscar");
        const search = new google.maps.places.Autocomplete(autocomplete);
        search.bindTo("bounds", mapa);

        search.addListener("place_changed", function () {
            informacion.close();
            marcador.setVisible(false);

            var place = search.getPlace();

            if (!place.geometry) {
                console.log("No se encontraron detalles de la ubicación");
                return;
            }

            if (place.geometry.viewport) {
                mapa.fitBounds(place.geometry.viewport);
            } else {
                mapa.setCenter(place.geometry.location);
                mapa.setZoom(15);
            }
            marcador.setPosition(place.geometry.location);
            marcador.setVisible(true);

            document.getElementById("latitud").value =
                place.geometry.location.lat();
            document.getElementById("longitud").value =
                place.geometry.location.lng();

            var address = " ";
            if (place.address_components) {
                address = [
                    (place.address_components[0] &&
                        place.address_components[0].short_name) ||
                        "",
                    (place.address_components[1] &&
                        place.address_components[1].short_name) ||
                        "",
                    (place.address_components[2] &&
                        place.address_components[2].short_name) ||
                        "",
                ];
            }
            document.getElementById("direccion").value = place.name;
            document.getElementById("referencia").value = address;
            informacion.setContent(
                "<div><strong>" + place.name + "</strong><br>" + address
            );
            informacion.open(mapa, marcador);
        });
    });
}
