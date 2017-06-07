$(function() {
    //This is to remove the validation message if no poster image is present
    $('#term').focus(function() {
        var full = $('#quote').has("img").length ? true : false;
        if (full == false) {
            $('#quote').empty();
        }
    });

    var api_key = "stage_b67caa3c48bdbe2c";
    var tankfarm_api = "https://tankfarm-api-staging.herokuapp.com/api/v1/quotes"
    //var baseimg = "http://image.tmdb.org/t/p/w342";

    //function definition
    var getQuote = function() {
        //Grab the movie title and store it in a variable
        var film = $('#term').val();
        //check if the user has entered anything
        if (film == '') {
            //If the input field was empty, display a message
            $('#quote').html("<h2 class='loading'>Please enter a value</h2>");
        } else {
            //They must have entered a value, carry on with API call, first display a loading message to notify the user of activity
            $('#quote').html("<h2 class='loading'>Loading Quote</h2>");
            $.getJSON(tankfarm_api + "&token=" + api_key + "&callback=?", function(json) {
                //print returned json object to familiarize with API data structure
                console.log(json);
                // console.log(json.results[0].poster_path);
                //TMDb is nice enough to return a message if nothing was found, so we can base our if statement on this info
                /*if (json.total_results) {
                    //Display the poster and a message announcing the result
                    $('#quote').html('<h2 class="loading">Well, gee whiz! We found you a poster, skip!</h2><img id="thePoster" src=' + baseimg + json.results[0].poster_path + ' />');
                } else {
                    $.getJSON("http://api.themoviedb.org/3/search/movie?query=goonies&api_key=" + api_key, function(json) {
                        $('#quote').html('<h2 class="loading">We\'re afraid nothing was found for that search. Perhaps you were looking for The Goonies?</h2><img id="thePoster" src=' + baseimg + json.results[0].poster_path + '/>');
                    });
                }*/
            });
        }
        return false;
    }
    $('#fetch form').on('submit', getQuote);
});
