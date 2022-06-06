let showCatcherForm = false;
let leadCatcherWindow = new InteracitveWindow(document.querySelector('.lead-catcher'));
let termsWindow = new InteracitveWindow(document.querySelector('.terms'));
let successFormMessage = new InteracitveWindow(document.querySelector('.success-form-message'));
let errorFormMessage = new InteracitveWindow(document.querySelector('.error-form-message'));

/* функция вывода на страницу формы отправки контактных данных */
function displayLeadCatcherForm() {
    if (showCatcherForm == false) {
        leadCatcherWindow.showWindow();
        showCatcherForm = true;
        let termsButton = leadCatcherWindow.wrapper.querySelector('.lead-catcher__form-terms');
        termsButton.addEventListener('click', function (e) {
            termsWindow.showWindow();
        })
    }

}

/* позволяем повторно отобразить форму, если пользователь покидал окно сайта */
window.onblur = () => { showCatcherForm = false; }

/* отображаем форму, если курсор пользователя пересекает верхнюю границу страницы */
document.querySelector('body').addEventListener("mousemove", function (e) {
    e = e || window.e;
    let coordY = e.layerY;
    if (coordY <= 5 && showCatcherForm == false) {
        displayLeadCatcherForm();
    }
})

/* отображаем форму, если пользователь провёл на сайте n-минут */
setTimeout(displayLeadCatcherForm, 30000);


/* функция проверки вводимых значений в поле */
function validate(evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode(key);
    var regex = /[0-9]|\./;
    if (!regex.test(key)) {
        theEvent.returnValue = false;
        if (theEvent.preventDefault) theEvent.preventDefault();
    }
}




/* функция отправки контактных данных, привязываемая к кнопке отправки формы */
function sendContactData() {

    let contactdata = {
        name: leadCatcherWindow.wrapper.querySelector('#name').value,
        phone: leadCatcherWindow.wrapper.querySelector("#phone").value,
        priority: leadCatcherWindow.wrapper.querySelector('#priority').checked,
        form_id: leadCatcherWindow.wrapper.querySelector('#form_id').value,
        task_id: leadCatcherWindow.wrapper.querySelector('#task_id').value,
    }

    let leadCatcherForm = new GetSendForm(document.querySelector('.lead-catcher__form'), contactdata, 'engine.php', 'contactdatajson');
    leadCatcherForm.sendData();

    leadCatcherWindow.closeWindow();
}


let leadSendButton = leadCatcherWindow.wrapper.querySelector('.lead-catcher__send-button');

leadSendButton.addEventListener('click', () => {
    let contactName = leadCatcherWindow.wrapper.querySelector('#name').value;
    let contactPhone = leadCatcherWindow.wrapper.querySelector('#phone').value;

    if (contactName.length == 0 || contactPhone.length < 5) {
        alert('Пожалуйста, заполните оба поля перед отправкой формы');
    } else {
        sendContactData();
    }

});


/* подсветка полей ввода, на которых находится фокус */
document.querySelectorAll(".input-field").forEach(item => {
    let placeholder = item.placeholder;
    item.addEventListener('focus', function (e) {
        item.placeholder = '';
        item.classList.add('lead-catcher__input_shadow');
    })
    item.addEventListener('blur', function () {
        item.placeholder = placeholder;
        item.classList.remove('lead-catcher__input_shadow');
    })
})