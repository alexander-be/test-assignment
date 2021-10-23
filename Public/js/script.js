function selectType() {

    let selector = document.getElementById('productType').value;
    let dvdForm = document.querySelector('.product_dvd').classList;
    let bookForm = document.querySelector('.product_book').classList;
    let furnitureForm = document.querySelector('.product_furniture').classList;

    switch (selector) {
        case 'disc':
            dvdForm.remove('hidden');
            bookForm.add('hidden');
            furnitureForm.add('hidden');
            break;
        case 'book':
            bookForm.remove('hidden');
            dvdForm.add('hidden');
            furnitureForm.add('hidden');
            break;
        case 'furniture':
            furnitureForm.remove('hidden');
            bookForm.add('hidden');
            dvdForm.add('hidden');
            break;
        default:
            furnitureForm.add('hidden');
            bookForm.add('hidden');
            dvdForm.add('hidden');
            break;
    }
};