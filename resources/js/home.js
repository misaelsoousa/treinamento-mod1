//Listagem e paginação

document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.btn_navbar');
    const items = document.querySelectorAll('.item_list, .item_middle');

    buttons.forEach(button => {
        button.addEventListener('click', function () {
            const cidadeSelecionada = this.dataset.cidade;

            if (this.classList.contains('selected')) {
                items.forEach(item => item.style.display = 'block');
                this.classList.remove('selected');
            } else {
                buttons.forEach(btn => btn.classList.remove('selected'));

                if (cidadeSelecionada === 'todos') {
                    items.forEach(item => item.style.display = 'block');
                } else {
                    items.forEach(item => {
                        if (item.dataset.cidade === cidadeSelecionada) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                }
                this.classList.add('selected');
            }
        });
    });
});

//dropdown hero

var dropdownToggle = document.getElementsByClassName("dropdown_toggle")[0];
var menuToogle = document.getElementsByClassName("menu_toogle")[0];
var dropdownMenu = document.getElementsByClassName("dropdown_menu")[0];
var nestedDropdownMenu = document.getElementsByClassName("drop_menu")[0];

dropdownToggle.onclick = function () {
    if (dropdownMenu.classList.contains('active')) {
        dropdownMenu.classList.remove('active');
        dropdownToggle.classList.remove('active-dropdown');
        menuToogle.classList.remove('active-dropdown');
        nestedDropdownMenu.classList.remove('active');
    } else {
        dropdownMenu.classList.add('active');
        dropdownToggle.classList.add('active-dropdown');
    }
};

menuToogle.onclick = function () {
    if (nestedDropdownMenu.classList.contains('active')) {
        nestedDropdownMenu.classList.remove('active');
        menuToogle.classList.remove('active-dropdown');
    } else {
        nestedDropdownMenu.classList.add('active');
        menuToogle.classList.add('active-dropdown');

        if (!dropdownMenu.classList.contains('active')) {
            dropdownMenu.classList.add('active');
            dropdownToggle.classList.add('active-dropdown');
        }
    }
};


