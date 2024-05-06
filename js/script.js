window.addEventListener('load', () => {
    const selectForm = document.querySelectorAll('.form');
// Перебор всех селектов на странице
    selectForm.forEach((item) => {
        const title = item.querySelector('.form__selection');
        const listItems = item.querySelectorAll('.content__list-item');
// Выбор активного селекта
        title.addEventListener('click', function (e) {
            e.stopPropagation();
            item.classList.toggle('active');

            const thisTitle = this;
            selectForm.forEach((itm) => {
                if (thisTitle !== itm.querySelector('.form__selection')) {
                    itm.classList.remove('active'); // Закрываем другой открытый селект
                }
            });
        });
// Выбор пункта открытого селекта, запись title, вызов alert
        listItems.forEach((e) => {
            e.addEventListener('click', function () {
                title.querySelector('.form__selection-text').innerText = this.innerText;
                if (title.querySelector('.form__selection-text').dataset.set === 'title') {
                    document.title = this.innerText;
                } else if (title.querySelector('.form__selection-text').dataset.set === 'alert') {
                    alert(this.innerText);
                }
                item.classList.remove('active');
            });
        });
// Закрытие по щелчку мимо открытого селекта
        document.addEventListener('click', () => {
            item.classList.remove('active');
        });
    });
});
