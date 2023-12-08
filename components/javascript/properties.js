document.addEventListener('DOMContentLoaded', function () {
    let searchButton = document.getElementById('searchButton');
    searchButton.addEventListener('click', function () {
        performSearch(); // Call the function to perform actions when the button is clicked
    });

    function performSearch() {
        let propertyStatus = document.getElementById('property-status').value;
        var propertyType = document.getElementById('property-type').value;
        var area = document.getElementById('area').value;
        var location = document.getElementById('locations').value;
        var bedrooms = document.getElementById('bedrooms').value;
        var bathrooms = document.getElementById('bathrooms').value;

        var url = 'properties.php?propertyStatus=' + propertyStatus + '&propertyType=' + propertyType + '&area=' + area +
            '&location=' + location + '&bedrooms=' + bedrooms + '&bathrooms=' + bathrooms;

        window.location.href = url;
    }
});
