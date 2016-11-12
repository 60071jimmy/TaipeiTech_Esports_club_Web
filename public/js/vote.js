(function($) {
"use strict";

var access_token = 'EAAU5XAe6Ii0BAM55U8oTpMWMkdOQwvtfrt0KYQBV93Tcv9Gg5ZBKC767BdBXbgHuy9EuQJaDJrEHknSHgb2DIxVab5RSPiMzJr30x9WVM9ju04Du2U9x4j5sWYvLki4ffrFeNPAQh6VKdHM5NV9Mqd9VLarMY3zxFoZCGhHwZDZD';
var postID = '857268977677559_'+{{$postID}};
var refreshTime = 10; // in seconds
var defaultCount = 0; // default count to start with
var reactions = ['LIKE', 'LOVE', 'WOW', 'HAHA', 'SAD', 'ANGRY'].map(function (e) {
    var code = 'reactions_' + e.toLowerCase();
    return 'reactions.type(' + e + ').limit(0).summary(total_count).as(' + code + ')'
}).join(',');
var v1 = $('.likes'),
    v2 = $('.happy');
    //v3 = $('.sad'),
    //v4 = $('.fml'),
    //v5 = $('.angry'),
    // v6 = $('.shock');
function refreshCounts() {
    var url = 'https://graph.facebook.com/v2.8/?ids=' + postID + '&fields=' + reactions + '&access_token=' + access_token;
    $.getJSON(url, function(res){
        v1.text(defaultCount + res[postID].reactions_like.summary.total_count);
        v2.text(defaultCount + res[postID].reactions_love.summary.total_count);
    v3.text(defaultCount + res[postID].reactions_sad.summary.total_count);
    v4.text(defaultCount + res[postID].reactions_haha.summary.total_count);
    v5.text(defaultCount + res[postID].reactions_angry.summary.total_count);
    v6.text(defaultCount + res[postID].reactions_wow.summary.total_count);
    });
}
setInterval(refreshCounts, refreshTime * 1000);
refreshCounts();

})(jQuery);