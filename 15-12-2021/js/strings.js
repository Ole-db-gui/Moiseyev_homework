//1.1
function changeFirstPhrase(selector, color){
    const block = document.querySelector(selector);
    block.firstElementChild.style.color = color;
}

//1.2
function oddEvenWordsChangeColor (whereChange, color1, color2){
    const block = document.querySelector(whereChange);
    const stringBlock = block.innerText;
    const arrayBlock = stringBlock.split(' ');
    arrayBlock.forEach((value, index) => {
        if (index % 2 === 0) {
            arrayBlock[index] = `<span style='color:${color1}'>${value}</span>`;
        } else arrayBlock[index] = `<span style='color:${color2}'>${value}</span>`;
    });
    block.innerHTML = arrayBlock.join(' ');
}

//2
function countVowelsOnPage(whereToDisplay){
    const displayHere = document.querySelector(whereToDisplay);
    const Vowels = document.body.innerText.matchAll(/[аеёиоуыэюяaeiou]/giu);
    const allVowels = "Гласных букв на странице по версии JS: " + [...Vowels].join('').length + `<br>`;
    displayHere.insertAdjacentHTML('beforebegin', allVowels);
}

//3
function countWordsOnPage(whereToDisplay) {
    const displayHere = document.querySelector(whereToDisplay);
    const allWords = document.body.innerText.split(/\s/g).reduce((acc, item) => {
        return item.length !== 0 ? acc.push(item) : null, acc;
    },[]).length;
    displayHere.insertAdjacentText("beforebegin", `Слов на странице по мнению JS: ${allWords}`);
}

//4
function howOldAreU(urBirthday, whereToDisplay){
    let birthday = urBirthday.split('-');
    let dateToday = [new Date().getDate(), new Date().getMonth()+1, new Date().getFullYear()];
    let diff = 'Мне ' + Math.floor((dateToday[0] - birthday[0]) + (dateToday[1] - birthday[1]) * 30.43 + (dateToday[2] - birthday[2]) * 365.25) + ' дней';
    const displayHere = document.querySelector(whereToDisplay);
    displayHere.insertAdjacentHTML('beforebegin', `<br>${diff}`);
    let dateNow = new Date();
    displayHere.insertAdjacentHTML('beforebegin', `<br> Сейчас: ${dateNow}`);
}

changeFirstPhrase('.block_about-info', 'purple'); // вызов окрашивания первой фразы в блоке
oddEvenWordsChangeColor('.block_about-feedback', 'brown', 'yellow'); // вызов окрашивания каждого четного и нечетного дочернего элементов блока
countVowelsOnPage('footer'); // вызов подсчета гласных на странице
countWordsOnPage('footer'); // вызов подсчет слов на странице
howOldAreU('11-01-1995', 'footer'); // вызов расчёта возраста в днях


