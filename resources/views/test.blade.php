<form method="POST" action="{{ route('book.bookings') }}" id="msform" name="msform">
    <input type="hidden" id="paytype" name="paytype" value="guest">
    <!-- progressbar -->
    @csrf
    <ul id="progressbar">
        <li class="active" id="account"><strong>Trip Details</strong></li>
        <li id="personal"><strong>Select Vehicle</strong></li>
        <li id="payment"><strong>Enter Payment Details</strong></li>
        <li id="confirm" onclick="getformvalues()"><strong>Confirmation</strong></li>
    </ul>
    <!-- fieldsets -->
    <fieldset>
        <div class="form-card step-one">
            <div class="row info-details">
                <div class="col-7">
                    <h2 class="fs-title">Address Information:</h2>
                </div>
                <div class="col-5">
                    <h2 class="steps">Step 1-4</h2>
                </div>
            </div>
            <hr />
            <br>

            <div class="row box_data">

                <h2 class="fs-title">Get Information</h2>

                <div class="col-lg-6 col-md-12 col-sm-12 col-12 sub_box_data">
                    <h3>Collection Address</h3>
                    <div class="d-lg-flex d-xl-flex d-block">
                        <input type="text" name="company_name1" id="comName1" placeholder="Contact Name: *"
                            class="w-100" style="width: 49%;">
                        <input type="text" name="contact_name1" id="name1" placeholder="Contact City" class="w-100"
                            style="width: 49%;">
                        <input type="text" name="contact_tele1" id="ph1" placeholder="Contact Telephone" class="w-100"
                            style="width: 49%;">
                        <input type="text" name="postal_code1" id="pc1" placeholder="Postal Code: *" class="w-100"
                            style="width: 49%;">
                    </div>

                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 sub_box_data">
                    <h3>Delivery Address</h3>
                    <div class="d-lg-flex d-xl-flex d-block">
                        <input type="text" name="company_name2" id="comName2" placeholder="Contact Name: *"
                            class="w-100" style="width: 49%;">
                        <input type="text" name="contact_name2" id="name2" placeholder="Contact City" class="w-100"
                            style="width: 49%;">
                        <input type="text" name="contact_tele2" id="ph2" placeholder="Contact Telephone" class="w-100"
                            style="width: 49%;">
                        <input type="text" name="postal_code2" id="pc2" placeholder="Postal Code: *" class="w-100"
                            style="width: 49%;">
                    </div>

                </div>


            </div>

            <label for="fieldlabels"> Additional Notes:
                <textarea style="width: 99% !important;" name="additional_notes" id="additional_notes"
                    rows="5"></textarea>
            </label>
            <div style="display: flex; gap: 1em; align-items: center; justify-content: center">
                <div>
                    <button class="action-button" style="width: 100%" type="button" id="addCollectionButton">Add
                        Address</button>
                </div>
            </div>
            <div class="additional-collection-fields-container"></div>
        </div>


        <input class="next action-button" type="button" id="firstnext" name="next" value="Next" />


    </fieldset>
</form>

<div class="additional-collection-fields-container"></div>


here my field set is appended when user clicks add address


<script>
let fieldsetCount = 0;

function addCollectionFieldset() {
    fieldsetCount++;
    const container = document.querySelector('.additional-collection-fields-container');

    const wrapperDiv = document.createElement('div');
    wrapperDiv.classList.add('fieldset-wrapper');
    wrapperDiv.style.marginBottom = '20px';

    const newFieldset = document.createElement('fieldset');
    newFieldset.classList.add('additional-fields-set');
    newFieldset.innerHTML = `
                            <div class="form-card step-one">
                                <div class="input-row">
                                    <label class="fieldlabels">Address Type: *
                                        <select id="addressType_${fieldsetCount}" name="address_type_${fieldsetCount}" style="width: 95%; border: 1px solid #ccc; color: black; border-radius: 6px; height: 4.5em;">
                                            <option selected disabled>select address type</option>
                                            <option value="collection">Collection Address</option>
                                            <option value="delivery">Delivery Address</option>
                                        </select>
                                    </label>
                                    <div id="dynamicAddressInput_${fieldsetCount}" style="width: 100%;">
                                        <label class="fieldlabels">Collection Point: *
                                            <input type="text" id="collection_point_${fieldsetCount}" name="from_${fieldsetCount}" placeholder="Collection Point" />
                                        </label>
                                    </div>
                                </div>
                                <div class="input-row" style="margin-top: none;">
                                    <label class="fieldlabels">Package Type: *
                                        <br>
                                        <select name="package_type_${fieldsetCount}" style="width: 95%;border: 1px solid #ccc; color: black; border-radius: 6px; height: 60%;">
                                            <option selected disabled>select package type</option>
                                            <option value="bags">Bags</option>
                                            <option value="packages">Packages</option>
                                            <option value="palletsEuro">Pallets Euro</option>
                                            <option value="palletsUk">Pallets Uk</option>
                                        </select>
                                    </label>
                                    <label class="fieldlabels">Quantity: *
                                        <input type="number" name="quantity_${fieldsetCount}" placeholder="Quantity" />
                                    </label>
                                    <label class="fieldlabels">Weight: *
                                        <input type="text" name="weight_${fieldsetCount}" placeholder="Weight" />
                                    </label>
                                    <label class="fieldlabels">Unit: *
                                        <br>
                                        <select name="unit_${fieldsetCount}" style="width: 95%; border: 1px solid #ccc; color: black; border-radius: 6px; height: 60%;">
                                            <option selected disabled>select unit</option>
                                            <option value="kg">Kg</option>
                                            <option value="gram">Gram</option>
                                            <option value="ton">Ton</option>
                                            <option value="pound">Pound</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="input-row" style="margin-top: none;">
                                    <label class="fieldlabels">Length: *
                                        <input type="text" name="length_${fieldsetCount}" placeholder="Length">
                                    </label>
                                    <label class="fieldlabels">Width: *
                                        <input type="text" name="width_${fieldsetCount}" placeholder="Width">
                                    </label>
                                    <label class="fieldlabels">Height: *
                                        <input type="text" name="height_${fieldsetCount}" placeholder="Height" />
                                    </label>
                                    <label class="fieldlabels">Size Unit: *
                                        <br>
                                        <select name="size_unit_${fieldsetCount}" style="width: 95%; border: 1px solid #ccc; color: black; border-radius: 6px; height: 60%;">
                                            <option selected disabled>select unit</option>
                                            <option value="Cm">Cm</option>
                                            <option value="M">M</option>
                                            <option value="Inch">Inch</option>
                                            <option value="Foot">Foot</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="row box_data">
                                    <h2 class="fs-title">Get Information</h2>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 sub_box_data">
                                        <h3>Address</h3>
                                        <div class="d-lg-flex d-xl-flex d-block">
                                            <input type="text" name="company_name1_${fieldsetCount}" placeholder="Contact Name: *" class="w-100" style="width: 49%;">
                                            <input type="text" name="contact_name1_${fieldsetCount}" placeholder="Contact City" class="w-100" style="width: 49%;">
                                            <input type="text" name="contact_tele1_${fieldsetCount}" placeholder="Contact Telephone" class="w-100" style="width: 49%;">
                                            <input type="text" name="postal_code1_${fieldsetCount}" placeholder="Postal Code: *" class="w-100" style="width: 49%;">
                                        </div>
                                    </div>
                                </div>
                                <label for="fieldlabels">Additional Notes:
                                    <textarea style="width: 99% !important;" name="additional_notes_${fieldsetCount}" rows="5"></textarea>
                                </label>
                                <div style="display:flex;align-items:center;justify-content:center;">
                                    <button style="width: 20%; margin-top: 10px;" type="button" class="removeFieldsetButton action-button">Remove Fieldset</button>
                                </div>
                            </div>
                        `;

    wrapperDiv.appendChild(newFieldset);

    container.appendChild(wrapperDiv);

    const collectionInput = newFieldset.querySelector(`#collection_point_${fieldsetCount}`);
    const collectionAutocomplete = new google.maps.places.Autocomplete(collectionInput);

    const addressTypeSelect = newFieldset.querySelector(`#addressType_${fieldsetCount}`);
    const dynamicAddressInput = newFieldset.querySelector(`#dynamicAddressInput_${fieldsetCount}`);

    addressTypeSelect.addEventListener('change', function() {
        const selectedValue = this.value;
        dynamicAddressInput.innerHTML = '';

        if (selectedValue === 'collection') {
            dynamicAddressInput.innerHTML = `
                                    <label class="fieldlabels">Collection Point: *
                                        <input type="text" id="collection_point_${fieldsetCount}" name="from_${fieldsetCount}" placeholder="Collection Point" />
                                    </label>
                                `;
            const newCollectionInput = dynamicAddressInput.querySelector(`#collection_point_${fieldsetCount}`);
            const newCollectionAutocomplete = new google.maps.places.Autocomplete(newCollectionInput);
        } else if (selectedValue === 'delivery') {
            dynamicAddressInput.innerHTML = `
                                    <label class="fieldlabels">Deliver Point: *
                                        <input type="text" id="delivery_point_${fieldsetCount}" name="to_${fieldsetCount}" placeholder="Delivery Point" />
                                    </label>
                                `;
            const newDeliveryInput = dynamicAddressInput.querySelector(`#delivery_point_${fieldsetCount}`);
            const newDeliveryAutocomplete = new google.maps.places.Autocomplete(newDeliveryInput);
        }
    });


    // Remove fieldset
    const removeFieldsetButton = newFieldset.querySelector('.removeFieldsetButton');
    removeFieldsetButton.addEventListener('click', function() {
        wrapperDiv.remove();
    });
}
</script>


these fields set will be appended


so i want to store the dynamically added in session

if user added 2 field set means 2 session record with all field set in 1 record and and same for other