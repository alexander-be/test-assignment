function selectType() {

    let selector = document.getElementById('productType').value;
    let discForm = document.querySelector('.product_disc').classList;
    let bookForm = document.querySelector('.product_book').classList;
    let furnitureForm = document.querySelector('.product_furniture').classList;

    discForm.add('hidden');
    bookForm.add('hidden');
    furnitureForm.add('hidden');

    if (selector) {
        document.querySelector('.product_' + selector).classList.remove('hidden');
    }
};