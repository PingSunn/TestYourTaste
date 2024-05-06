const result = {
    "12,13,33,36": "./asset/img/chathai.png",
    "14,34,37": "./asset/img/chakeaw.png",
    "15,25,38": "./asset/img/peache.png",
    "16,28,39": "./asset/img/chanomtaiwan.png",
    "17,32,41": "./asset/img/italiansoda.png",
    "18,30,42": "./asset/img/linchii.png",
    "19,40,43": "./asset/img/coco.png",
    "20,21,44": "./asset/img/coffee.png",
    "23,27,45": "./asset/img/rose.png",
    "24,29,46": "./asset/img/milk.png",
    "22,25,47": "./asset/img/mali.png",
    "26,31,48": "./asset/img/lemon.png"
}

document.addEventListener('DOMContentLoaded', function() {
    // Get the query string part of the URL
    const queryString = window.location.search;

    // Parse the query string into an object
    const params = new URLSearchParams(queryString);

    // Get the value of the 'value' parameter
    const value = params.get('value');

    console.log(value); // This will log 'x' to the console


    function getImagePath(sum) {
        // Check if the parameter matches any key in the result object
        for (const key in result) {
            if (key.includes(sum.toString())) {
                // If there's a match, return the corresponding value
                return result[key];
            }
        }
        // If no match found, return null or any other default value
        return null;
    }
    const path = getImagePath(value);

    if (path !== null) {
        document.getElementById('imgId').src = path;
    } else {
        // Handle case where path is null (e.g., display a default image)
        console.error('Image path not found for value:', value);
    }
});