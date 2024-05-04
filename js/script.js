window.addEventListener('load',()=>{
    const selectForm = document.querySelectorAll('.form');

    selectForm.forEach(function (item){
        let title = item.querySelector('.form__selection');
        let listItems = item.querySelectorAll('.content__list-item');

        title.addEventListener('click', function (e) {
            e.stopPropagation();
            item.classList.toggle('active');
        });

        listItems.forEach(function (e) {
            e.addEventListener('click', function () {
                title.querySelector('.form__selection-text').innerText = this.innerText;
                console.log(title.querySelector('.form__selection-text').dataset['set']);
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


