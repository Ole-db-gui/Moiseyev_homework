compareTime = (timeSet) => {
    let time = new Date().getHours() * 60 + new Date().getMinutes();
    let temp = timeSet.split('-');
    timeSet = Number(temp[0]) * 60 + Number(temp[1]);
    return time > timeSet;
}
document.body.style.backgroundColor = (compareTime("20-00") || !compareTime("08-00")) ? "lightslategrey" : "white";