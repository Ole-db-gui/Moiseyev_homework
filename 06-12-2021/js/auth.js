const sign = document.querySelector('#sign');
const main = document.querySelector('main');
const log = document.createElement('div');

log.style.fontSize = '24px';

// создание шифратора для данных
const cipher = salt => {
    const textToChars = text => text.split('').map(c => c.charCodeAt(0));
    const byteHex = n => ("0" + Number(n).toString(16)).substr(-2);
    const applySaltToChar = code => textToChars(salt).reduce((a,b) => a ^ b, code);

    return text => text.split('')
        .map(textToChars)
        .map(applySaltToChar)
        .map(byteHex)
        .join('');
}
// создание дешифратора для данных
const decipher = salt => {
    const textToChars = text => text.split('').map(c => c.charCodeAt(0));
    const applySaltToChar = code => textToChars(salt).reduce((a,b) => a ^ b, code);
    return encoded => encoded.match(/.{1,2}/g)
        .map(hex => parseInt(hex, 16))
        .map(applySaltToChar)
        .map(charCode => String.fromCharCode(charCode))
        .join('');
}
const myCipher = cipher('FACT');
const myDecipher = decipher('FACT');
//добавления слушателя события submit на форму для обработки регистрационных данных
sign.addEventListener("submit", function(event) {
    event.preventDefault();
    const signDataArray = [];
    const signData = new FormData(sign);
    for (let entry of signData) {
        if (entry[1].trim() === '') {
            alert ('Введите, пожалуйста, данные, отличные от пустых');
            return;
        }
        signDataArray.push(entry);
    }
    let trueLogin = myCipher(signDataArray[0][1]); // шифрую логин указанный при регистрации
    let truePassword = myCipher(signDataArray[1][1]); // шифрую пароль указанный при регистрации
    let inputLogin = myCipher(prompt('Введите логин', "")); // получаю и шифрую логин при авторизации
    let inputPassword = myCipher(prompt('Введите пароль', "")); // получаю и шифрую пароль при авторизации

    if (trueLogin === inputLogin && truePassword === inputPassword) {
        log.innerHTML = `<p>Привет, ${signDataArray[0][1]}</p>`;
        main.append(log);
    } else alert('Введена неверна пара логина и пароля или таких данных нет');
}, false);