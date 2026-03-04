// Search Toggle Functionality
document.addEventListener('DOMContentLoaded', function () {
    const searchIcon = document.getElementById('searchIconMobile');
    const searchWrapper = document.querySelector('.mobile-search-wrapper');
    const searchInput = document.getElementById('searchInputMobile');
    if (searchIcon && searchWrapper && searchInput) {
        searchIcon.addEventListener('click', function () {
            searchWrapper.classList.toggle('d-none');
            if (!searchWrapper.classList.contains('d-none')) {
                searchInput.focus();
            }
        });
        searchInput.addEventListener('blur', function () {
            setTimeout(() => searchWrapper.classList.add('d-none'), 200);
        });
    }
});