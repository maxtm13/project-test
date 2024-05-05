window.addEventListener('load',()=>{
    const selectForm = document.querySelectorAll('.form');

    selectForm.forEach(function (item){
        let title = item.querySelector('.form__selection');
        let listItems = item.querySelectorAll('.content__list-item');

        title.addEventListener('click', function (e) {
            e.stopPropagation();
            item.classList.toggle('active');
            selectForm.forEach(function (itm){
               if (!(e.target === itm.querySelector('.form__selection'))) {
                   itm.classList.remove('active')
               }
            })
        });

        listItems.forEach(function (e) {
            e.addEventListener('click', function () {
                title.querySelector('.form__selection-text').innerText = this.innerText;
                if (title.querySelector('.form__selection-text').dataset['set'] === 'title') {
                    document.title = this.innerText;
                }
                else if (title.querySelector('.form__selection-text').dataset['set'] === 'alert') {
                    alert(this.innerText);
                }
                item.classList.remove('active');
            });
        });

        document.addEventListener('click', function (e){
            if (!(e.target === title)) {
                item.classList.remove('active');
            }
        });
    });
});


