let successFormMessage = new InteracitveWindow(document.querySelector('.success-form-message'));
let errorFormMessage = new InteracitveWindow(document.querySelector('.error-form-message'));


document.querySelectorAll('.main__sidebar-card-active').forEach(item => {
    let sidebarCard = new InteracitveCard(item);
})


let sidebarButtons = document.querySelectorAll('.main__sidebar-card-button');
sidebarButtons.forEach((sidebarButton) => {
    sidebarButton.addEventListener('click', (e) => {
        let target = e.target;
        let sidebarCardWindow = target.closest('.main__sidebar-card');

        let additionaldata = {
            id: sidebarCardWindow.querySelector('#client_id').value,
            comment: sidebarCardWindow.querySelector('#comment').value,
            callstatus: sidebarCardWindow.querySelector('#callstatus').checked,
        }

        let sidebarCard = new GetSendForm(sidebarCardWindow.querySelector('.main__sidebar-card-wrapper'), additionaldata, 'engine.php', 'additionaldatajson');



        console.log(sidebarCardWindow.querySelector('.main__sidebar-card-input').value);
        console.log(sidebarCardWindow);
        sidebarCard.sendData();


    })
})



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
