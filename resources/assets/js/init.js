(function() {

    'use strict'

    // Get the value of data-page-id attribute
    const bodyElement = document.querySelector("body");
    const pageId = bodyElement.getAttribute("data-page-id");

    // When DOM is leaded and ready then run the code inside
    // equivalent of $(document).ready(function() {// code});
    document.addEventListener("DOMContentLoaded", function(event) {
        // Switch pages
        switch (pageId) {
            case 'global':
                ecommvc.global.navbar();
                break;
            case 'home':
                // ecommvc.front.navbar();
                break;
            default:
                // Do Nothing
        }
    });

})();
