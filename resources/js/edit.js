const editButtons = document.getElementsByClassName('edit-button-modal');
for (let editButton of editButtons) {
    editButton.addEventListener('click', editButtonClick);
}

function editButtonClick(e) {
    let dataValues = [];
    const objectId = e.target.dataset.objectId;
    const object = document.getElementById('object-' + objectId);
    const tdElements = object.getElementsByTagName('td')
    for (let i = 0; i < tdElements.length; i++) {
        dataValues[tdElements[i].dataset.name] = tdElements[i].dataset.value;
    }
    const form = document.getElementById('edit-form');
    const inputs = form.querySelectorAll('[name]');
    inputs.forEach(function(input) {
        let name = input.getAttribute('name');
        if (dataValues.hasOwnProperty(name)) {
            input.value = dataValues[name];
        }
    });
}
