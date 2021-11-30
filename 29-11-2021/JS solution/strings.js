//1.1
const blockAboutInfo = document.querySelector(".block_about-info");
blockAboutInfo.firstChild.style.color = 'red';

//1.2
const blockFeedback = document.querySelector(".block_about-feedback");
const stringBlockFeedback = blockFeedback.innerText;
const arrayBlockFeedback = stringBlockFeedback.split(' ');
arrayBlockFeedback.forEach((value, index) => {
    if (index % 2 == 0) {
        arrayBlockFeedback[index] = `<span style='color:saddlebrown'>${value}</span>`;
    } else arrayBlockFeedback[index] = `<span style='color:yellow'>${value}</span>`;
});
blockFeedback.innerHTML = arrayBlockFeedback.join(' ');

//2
const footer = document.querySelector('footer');
const Vowels = document.body.innerText.matchAll(/[аеёиоуыэюяaeiou]/giu);
const allVowels = "Гласных букв на странице по версии JS: " + [...Vowels].join('').length + `<br>`;
footer.insertAdjacentHTML('beforebegin', allVowels);


//3
const allWords = document.body.innerText.split(/\s/g).reduce((acc, item) => {
    return item.length !== 0 ? acc.push(item) : null, acc;
},[]).length;
footer.insertAdjacentText("beforebegin", `Слов на странице по мнению JS: ${allWords}`);


//4
let birthday = '11-01-1995'.split("-");
let dateToday = [new Date().getDate(), new Date().getMonth()+1, new Date().getFullYear()];
let diff = 'Мне ' + Math.floor((dateToday[0] - birthday[0]) + (dateToday[1] - birthday[1]) * 30.43 + (dateToday[2] - birthday[2]) * 365.25) + ' дней';
footer.insertAdjacentHTML('beforebegin', `<br>${diff}`);
let dateNow = new Date();
footer.insertAdjacentHTML('beforebegin', `<br> Сейчас: ${dateNow}`);


