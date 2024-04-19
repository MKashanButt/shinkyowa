document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('filtermake').addEventListener('change', function () {
        let make = this.value;
        let xhr = new XMLHttpRequest();
        xhr.open('GET', '/get-models?make=' + make, true);
        xhr.onload = function () {
            if (xhr.status === 200) {
                let models = JSON.parse(xhr.responseText);
                let modelDropdown = document.getElementById('filtermodel');
                modelDropdown.innerHTML = '<option disabled selected>Select Model</option>';
                models.forEach(function (model) {
                    let option = document.createElement('option');
                    option.value = model;
                    option.text = model;
                    modelDropdown.appendChild(option);
                });
            }
        };
        xhr.send();
    });
    document.getElementById('filtermodel').addEventListener('change', function () {
        let model = this.value;
        let xhr = new XMLHttpRequest();
        xhr.open('GET', '/get-fueltype?model=' + model, true);
        xhr.onload = function () {
            if (xhr.status === 200) {
                let fueltypes = JSON.parse(xhr.responseText);
                let fueltypeDropdown = document.getElementById('filterfueltype');
                fueltypeDropdown.innerHTML =
                    '<option disabled selected>Select Fuel Type</option>';
                fueltypes.forEach(function (fueltype) {
                    let option = document.createElement('option');
                    option.value = fueltype;
                    option.text = fueltype;
                    fueltypeDropdown.appendChild(option);
                });
            }
        };
        xhr.send();
    });
})