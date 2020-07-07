import {confirmDemo, confirmSw2, notify} from "./run_notifi";

var RunMessages = {
    init : function () {
        this.runMessages()
    },
    runMessages() {
        if (typeof TYPE_MESSAGE != "undefined")
        {
            switch (TYPE_MESSAGE) {
                case 'success':
                    notify(MESSAGE, 'success');
                    break;
                case 'error':
                    notify(MESSAGE, 'error');
                    break;
            }
        }
    }
}

export default RunMessages
