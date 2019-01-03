let zipcode = document.getElementById('finance_zipCode');
zipcode.addEventListener('input', function (e) {
    let postalCode = $('#finance_zipCode').val();
    $('#finance_city').empty();

    if (this.value.length === 5) {
        fetch("https://api-adresse.data.gouv.fr/search/?q=" + postalCode + "&limit=100")
            .then((resp) => resp.json())
            .then((data) => fillSelector(data.features, postalCode))
    }
});

function fillSelector(data, postalCode) {

    let selectElt = document.getElementById('finance_city');
    let newOptionElt = document.createElement('option');
    newOptionElt.innerText = 'Veuillez sélectionner une commune';
    newOptionElt.value='';
    selectElt.appendChild(newOptionElt);
    let cities=[];
    for (cityData of data) {
        if (!cities.hasOwnProperty(cityData.properties.citycode) && (cityData.properties.citycode !== postalCode)){
            cities[cityData.properties.citycode] = cityData.properties.city;
            let newOptionElt = document.createElement('option');
            newOptionElt.innerText = cityData.properties.postcode + ' ' + cityData.properties.city;
            newOptionElt.value = cityData.properties.citycode;

            selectElt.appendChild(newOptionElt);
        }

    }
}