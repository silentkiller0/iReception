$(document).ready(function () {

    var getIP = 'http://ip-api.com/json/',
        openWeatherMap = 'http://api.openweathermap.org/data/2.5/weather',
        APPID = 'APPID';

    $.getJSON(getIP).done(function (location) {

        $.getJSON(openWeatherMap, {
            lat: location.lat,
            lon: location.lon,
            APPID: APPID
        })
            .done(function (weather) {

                var celsius = weather.main.temp - 273.15;
                var fahrenheit = celsius * 1.8 + 32;

                $('.currentTemperature').text(location.city + ' - ' + celsius.toFixed(0) + '°');



            });
    });
});