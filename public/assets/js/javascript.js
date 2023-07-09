(function(win, doc) {
    'use strict';

    function confirmDel(event) {
        event.preventDefault();

        let token = doc.getElementsByName("_token")[0].value;

        if (confirm("Deseja mesmo apagar?")) {
            let ajax = new XMLHttpRequest();
            ajax.open("DELETE", event.currentTarget.getAttribute('href'));
            ajax.setRequestHeader('X-CSRF-TOKEN', token);
            ajax.onreadystatechange = function() {
                if (ajax.readyState === 4 && ajax.status === 200) {
                    win.location.reload();
                }
            };
            ajax.send();
        } else {
            return false;
        }
    }

    if (doc.querySelector('.js-del')) {
        let btns = doc.querySelectorAll('.js-del');
        for (let i = 0; i < btns.length; i++) {
            btns[i].addEventListener('click', confirmDel, false);
        }
    }
})(window, document);
