// RATE APP LINK
$('#rate-app').on('click', function(e) {
    // Find device platform using the plugin org.apache.cordova.device
    var devicePlatform = device.platform;
    
    // Check which platform
    if (devicePlatform == "iOS") {
        window.open('https://itunes.apple.com/us/app/YOUR-APP-SLUG-HERE/id000000000?mt=8&uo=4'); // or itms://
    } else if (devicePlatform == "Android") {
        window.open('market://details?id=ng.edu.alhikmah.al-hikmah_university');
    } else if (devicePlatform == "BlackBerry"){
        window.open('http://appworld.blackberry.com/webstore/content/<applicationid>');
    }
});