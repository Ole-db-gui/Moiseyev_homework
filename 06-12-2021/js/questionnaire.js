const form = document.querySelector("form");
const main = document.querySelector('main');
const log = document.createElement('div');

log.style.fontSize = '24px';

form.addEventListener("submit", function(event) {
    log.insertAdjacentText('beforeend', `Работает JavaScript.`);
    const data = new FormData(form);
    let output = 0;
    for (let entry of data) {
        output += Number(entry[1]);
    }
    if (output < 8) {
        log.insertAdjacentHTML('beforeend', `Вашим друзьям можно посочувствовать. Сумма баллов: ${output} <br>`);
    } else if (output >= 8 && output <= 15) {
        log.insertAdjacentHTML('beforeend', `Вы не лишены недостатков, но с вами можно ладить. Сумма баллов: ${output} <br>`);
    } else log.insertAdjacentHTML('beforeend', `У Вас покладистый характер. Сумма баллов: ${output} <br>`);

    main.append(log);
    event.preventDefault();
}, false);
