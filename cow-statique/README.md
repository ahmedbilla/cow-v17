<div class="input-group">
    <label for="vaccinationNumber">
        <i class="fas fa-syringe icon-card"></i> Number of Vaccinations:
    </label>
    <input type="number" id="vaccinationNumber" placeholder="Enter number of vaccinations">

    <div id="vaccinationInputs">
        <!-- Vaccination input fields will be added here dynamically -->
    </div>
</div>

<script>
    function updateVaccinationInputs() {
        var vaccinationNumber = document.getElementById('vaccinationNumber').value;
        var container = document.getElementById('vaccinationInputs');

        // Remove existing vaccination input fields
        while (container.firstChild) {
            container.removeChild(container.firstChild);
        }

        // Add vaccination input fields based on the number entered
        for (var i = 1; i <= vaccinationNumber; i++) {
            var vaccinationLabel = document.createElement('label');
            vaccinationLabel.textContent = 'Vaccination ' + i + ':';

            var bullNameInput = document.createElement('input');
            bullNameInput.type = 'text';
            bullNameInput.name = 'bullName' + i;
            bullNameInput.placeholder = 'Enter name of Bull for Vaccination ' + i;

            var vaccinationDateLabel = document.createElement('label');
            vaccinationDateLabel.textContent = 'Vaccination Date ' + i + ':';

            var vaccinationDateInput = document.createElement('input');
            vaccinationDateInput.type = 'date';
            vaccinationDateInput.name = 'vaccinationDate' + i;

            container.appendChild(vaccinationLabel);
            container.appendChild(bullNameInput);
            container.appendChild(vaccinationDateLabel);
            container.appendChild(vaccinationDateInput);
            container.appendChild(document.createElement('br'));
        }
    }

    // Call the function when the vaccination number input changes
    document.getElementById('vaccinationNumber').addEventListener('input', updateVaccinationInputs);
</script>


https://ionic.io/ionicons


















        <!-- Vaccination input fields will be added here dynamically -->
    </div>
</div>

<script>
function updateVaccinationInputs() {
    var vaccinationNumber = document.getElementById('vaccinationNumber').value;
    var container = document.getElementById('vaccinationInputs');

    // Remove existing vaccination input fields
    while (container.firstChild) {
        container.removeChild(container.firstChild);
    }

    // Add vaccination input fields based on the number entered
    for (var i = 1; i <= vaccinationNumber; i++) {
        var vaccinationLabel = document.createElement('label');
        vaccinationLabel.textContent = 'Vaccination ' + i + ':';

        var bullNameInput = document.createElement('input');
        bullNameInput.type = 'text';
        bullNameInput.name = 'bullName' + i;
        bullNameInput.placeholder = 'Enter name of Bull for Vaccination ' + i;

        var vaccinationDateLabel = document.createElement('label');
        vaccinationDateLabel.textContent = 'Vaccination Date ' + i + ':';

        var vaccinationDateInput = document.createElement('input');
        vaccinationDateInput.type = 'date';
        vaccinationDateInput.name = 'vaccinationDate' + i;

        var resultLabel = document.createElement('label');
        resultLabel.textContent = 'Result ' + i + ':';

        var resultDropdown = document.createElement('select');
        resultDropdown.name = 'resultOption' + i;

        var positiveOption = document.createElement('option');
        positiveOption.value = 'positive';
        positiveOption.textContent = 'Positive';

        var negativeOption = document.createElement('option');
        negativeOption.value = 'negative';
        negativeOption.textContent = 'Negative';

        resultDropdown.appendChild(negativeOption);
        resultDropdown.appendChild(positiveOption);

        var calfNameLabel = document.createElement('label');
        calfNameLabel.textContent = 'Calf Name ' + i + ':';

        var calfNameInput = document.createElement('input');
        calfNameInput.type = 'text';
        calfNameInput.name = 'calfName' + i;
        calfNameInput.placeholder = 'Enter Calf Name for Vaccination ' + i;

        var calfBirthDateLabel = document.createElement('label');
        calfBirthDateLabel.textContent = 'Calf Birth Date ' + i + ':';

        var calfBirthDateInput = document.createElement('input');
        calfBirthDateInput.type = 'date';
        calfBirthDateInput.name = 'calfBirthDate' + i;

        var genderLabel = document.createElement('label');
        genderLabel.textContent = 'Gender ' + i + ':';

        var genderDropdown = document.createElement('select');
        genderDropdown.name = 'genderOption' + i;

        var maleOption = document.createElement('option');
        maleOption.value = 'male';
        maleOption.textContent = 'Male';

        var femaleOption = document.createElement('option');
        femaleOption.value = 'female';
        femaleOption.textContent = 'Female';

        genderDropdown.appendChild(maleOption);
        genderDropdown.appendChild(femaleOption);

        resultDropdown.addEventListener('change', function () {
            // Toggle visibility of the Calf Name, Calf Birth Date, and Gender inputs based on the result
            calfNameLabel.style.display = (resultDropdown.value === 'positive') ? 'inline' : 'none';
            calfNameInput.style.display = (resultDropdown.value === 'positive') ? 'inline' : 'none';

            calfBirthDateLabel.style.display = (resultDropdown.value === 'positive') ? 'inline' : 'none';
            calfBirthDateInput.style.display = (resultDropdown.value === 'positive') ? 'inline' : 'none';

            genderLabel.style.display = (resultDropdown.value === 'positive') ? 'inline' : 'none';
            genderDropdown.style.display = (resultDropdown.value === 'positive') ? 'inline' : 'none';
        });

        container.appendChild(vaccinationLabel);
        container.appendChild(bullNameInput);
        container.appendChild(vaccinationDateLabel);
        container.appendChild(vaccinationDateInput);
        container.appendChild(resultLabel);
        container.appendChild(resultDropdown);

        // Initially hide the Calf Name, Calf Birth Date, and Gender inputs and labels
        calfNameLabel.style.display = 'none';
        calfNameInput.style.display = 'none';

        calfBirthDateLabel.style.display = 'none';
        calfBirthDateInput.style.display = 'none';

        genderLabel.style.display = 'none';
        genderDropdown.style.display = 'none';

        container.appendChild(calfNameLabel);
        container.appendChild(calfNameInput);
        container.appendChild(calfBirthDateLabel);
        container.appendChild(calfBirthDateInput);
        container.appendChild(genderLabel);
        container.appendChild(genderDropdown);
        container.appendChild(document.createElement('br'));
    }
}

// Call the function when the vaccination number input changes
document.getElementById('vaccinationNumber').addEventListener('input', updateVaccinationInputs);



</script>