document.addEventListener('DOMContentLoaded', () => {

    const modal = document.getElementById('contact-modal');

    const open = document.getElementById('contact-open');

    const close = document.getElementById('modal-close');

    if (!modal) return;

    open?.addEventListener('click', e => {

        e.preventDefault();

        modal.classList.remove('hidden');

        modal.classList.add('flex');

        document.body.classList.add('overflow-hidden');

    });

    close?.addEventListener('click', () => {

        modal.classList.remove('flex');

        modal.classList.add('hidden');

        document.body.classList.remove('overflow-hidden');

    });



/**Закрытие по клику вне окна */
modal.addEventListener('click', e => {

    if (e.target === modal) {

        modal.classList.remove('flex');

        modal.classList.add('hidden');

        document.body.classList.remove('overflow-hidden');

    }

});
/**Закрытие по Esc */
document.addEventListener('keydown', e => {

    if (e.key === 'Escape') {

        modal.classList.remove('flex');

        modal.classList.add('hidden');

        document.body.classList.remove('overflow-hidden');

    }

});
});
