class GetSendForm {
    constructor(form, data, engine, variable) {
        this.form = form;
        this.dataJson = JSON.stringify(data);
        this.engine = engine;
        this.variable = variable;
    }

    sendData() {
        let request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200) {
                console.log("OK");
                successFormMessage.showWindow();
            } else {
                console.log(request.status);
            }
        }
        request.open('GET', `${this.engine}?${this.variable}=` + this.dataJson, true);
        request.send();

        console.log(this.dataJson);
    }
}