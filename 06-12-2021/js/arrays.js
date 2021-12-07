// 1st task:
function createAndShowRandomArray(idWhereDisplay) {
    const displayHere = document.getElementById(idWhereDisplay);
    const array = [];
    const n = Math.random() * 10 + 5;

    for (let i=0; i < n; i++) {
        array[i] = Math.random() * 20; // можно использовать Math.floor(Math.random() * 20), но не стал округлять, чтобы визуально было лучше видно выделенные длинные дробные числа
        if ((i+1) % 2 === 0) {
            displayHere.insertAdjacentHTML("beforeend", `<strong>${array[i]}</strong><br>`);
        } else {
            displayHere.insertAdjacentHTML("beforeend", `${array[i]}<br>`);
        }
    }
}

// 2nd task:

const array2 = [['America', 'USA', 'Canada', 'Argentina'],
    ['Europe', 'Germany', 'Sweden', 'Austria', 'Russia'],
    ['Asia', 'China', 'Апельсин', 'awesome, test solution for lower case strings']];

function showArrayElementsWithFirstA(array, idWhereDisplay) {
    const displayHere = document.getElementById(idWhereDisplay);
    array.map((sub) => {
        sub.map(element => {
            if (element.startsWith('A') || element.startsWith(('a')) || element.startsWith(('А') || element.startsWith(('а'))) ) {
                displayHere.insertAdjacentHTML('beforeend', `${element}<br>`);
            }
        })
    });
}



// 3rd task:
function createRandomArrayAndCountDirectionLengths(selectorWhereDiplay) {
    const displayHere = document.querySelector(selectorWhereDiplay);
    const k = Math.floor(Math.random() * 5 + 5);
    const x = Math.floor(Math.random() * 5 + 4);
    let countRow = 0;
    let countCol;
    let array = [];

    for (let p = 0; p < k; p++) {
        array[p] = new Array(x);
        for (let q = 0; q < x; q++) {
            array[p][q] = Math.floor(Math.random() * 50);
            countCol = q + 1;
        }
        countRow = p + 1;
    }
    console.log(array);
    displayHere.insertAdjacentHTML('beforeend', `<p>Количество подмассивов в массиве: ${countRow}</p>`);
    displayHere.insertAdjacentHTML('beforeend', `<p>Количество элементов в подмассиве: ${countCol}</p>`);
    displayHere.insertAdjacentHTML('beforeend', `<p>Общее количество элементов в массиве: ${countRow * countCol}</p>`);
}

createAndShowRandomArray('first-task');
showArrayElementsWithFirstA(array2, 'second-task');
createRandomArrayAndCountDirectionLengths('#third-task');


