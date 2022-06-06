class InteracitveCard {
    constructor(window) {
        this.window = window;
        this.wrapper = window.querySelector('.interactive-window-wrapper');
        this.closeButton = window.querySelector('.close-button');

        this.closeButton.addEventListener('click', () => {
            this.closeWindow();
        })
    }

    showWindow() {
        this.window.classList.remove('hidden-elem');
        this.window.classList.add('visible-elem');
    }

    closeWindow() {
        this.window.classList.remove('visible-elem');
        this.window.classList.add('hidden-elem');
    }

}