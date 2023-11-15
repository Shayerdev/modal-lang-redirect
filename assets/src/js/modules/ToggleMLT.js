class ToggleMLT{
    constructor() {
        this.modal = document.querySelector('.modal-select-lang');
        this.button = {
            close: document.querySelector('[data-action="close-mlt"]')
        }
        this.events();
    }
    events(){
        this.button.close.addEventListener('click', () => {
            this.close();
        })
    }
    close(){
        this.modal.remove();
    }
}
export default ToggleMLT;