function createTextBox() {
    const myForm = document.getElementById('myForm');
    let newElement = document.createElement('textarea');
    newElement.placeholder = "Hier bitte Text eintragen";
    newElement.className = "myFormElemente";
    myForm.appendChild(newElement);
}
function createTextInput() {
    const myForm = document.getElementById('myForm');
    let newElement = document.createElement('input');
    newElement.className = "myFormElemente";
    myForm.appendChild(newElement);
}
function createRadioButton() {
    const myForm = document.getElementById('myForm');
    let newElement = document.createElement('div');
    newElement.id="radioButtons"
    let newElement2 = document.createElement('text');
    newElement2.className = "myFormElemente";
    myForm.appendChild(newElement);
    myForm.appendChild(newnewElement2);
}
function createRangeSlider() {
    const myForm = document.getElementById('myForm');
    let newElement = document.createElement('input');
    let editElement = document.createElement('button'); 
    editElement.innerText ="edit";
    newElement.type ="range";
    newElement.value ="50";
    newElement.className = "myFormElemente";
    myForm.appendChild(newElement);
    myForm.appendChild(editElement);

}
function createKeyword() {
    const myForm = document.getElementById('myForm');
    let newElement = document.createElement('input');
    newElement.className = "myFormElemente";
    myForm.appendChild(newElement);
}