jQuery.extend({
	getPublicURL: function (url) {
        url = url || '';
        return __PUBLICDOMAIN + url;
    },
    getAppURL: function (url) {
        url = url || '';
        return __APPDOMAIN + url;
    },
});