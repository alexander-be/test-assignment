function selectType() {

    let selector = document.getElementById('productType');
    let dvdForm = document.querySelector('.product_dvd');
    let bookForm = document.querySelector('.product_book');
    let furnitureForm = document.querySelector('.product_furniture');

    switch (selector.value) {
        case 'disc':
            dvdForm.classList.remove('hidden');
            bookForm.classList.add('hidden');
            furnitureForm.classList.add('hidden');
            break;
        case 'book':
            bookForm.classList.remove('hidden');
            dvdForm.classList.add('hidden');
            furnitureForm.classList.add('hidden');
            break;
        case 'furniture':
            furnitureForm.classList.remove('hidden');
            bookForm.classList.add('hidden');
            dvdForm.classList.add('hidden');
            break;
        default:
            furnitureForm.classList.add('hidden');
            bookForm.classList.add('hidden');
            dvdForm.classList.add('hidden');
            break;
    }
}