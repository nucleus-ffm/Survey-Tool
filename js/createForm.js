/*global vars*/
var NumberOfElements = 0; 
/*begin DOM*/
function createTextBox() {
    var DivID = countElements();
    const myForm = document.getElementById('myForm');
    let newDiv = document.createElement('div');
    newDiv.className ="formElementDiv";
    newDiv.id = DivID;
    myForm.appendChild(newDiv);

    const myDiv = document.getElementById(DivID);
    let newElement = document.createElement('textarea');
    let deleteButton = document.createElement('button');
    deleteButton.id = DivID + "-deleteButton";
    deleteButton.textContent ="Delete Element";
    deleteButton.setAttribute("onclick", "deleteElement(this.parentNode.id)");

    newElement.id = DivID + "item";
    newElement.placeholder = "Hier bitte Text eintragen";
    newElement.className = "myFormElemente";

    myDiv.appendChild(newElement);
    myDiv.appendChild(deleteButton);
}
function createTextInput() {
    var DivID = countElements();
    const myForm = document.getElementById('myForm');
    let newDiv = document.createElement('div');
    newDiv.className ="formElementDiv";
    newDiv.id = DivID;
    myForm.appendChild(newDiv);

    const myDiv = document.getElementById(DivID);
    let newElement = document.createElement('input');
    newElement.className = "myFormElemente";
    newElement.id = DivID + "-item";

    let deleteButton = document.createElement('button');
    deleteButton.id = DivID + "-deleteButton";
    deleteButton.textContent ="Delete Element";
    deleteButton.setAttribute("onclick", "deleteElement(this.parentNode.id)");

    myDiv.appendChild(newElement);
    myDiv.appendChild(deleteButton);
}
function createRadioButton() {
    var DivID = countElements();
    const myForm = document.getElementById('myForm');
    let newDiv = document.createElement('div');
    newDiv.className ="formElementDiv";
    newDiv.id = DivID;
    myForm.appendChild(newDiv);

    const myDiv = document.getElementById(DivID);
    let newRadioButton = document.createElement('text');
    newRadioButton.textContent ="Hallo Welt";

    let deleteButton = document.createElement('button');
    deleteButton.id = DivID + "-deleteButton";
    deleteButton.textContent ="Delete Element";
    deleteButton.setAttribute("onclick", "deleteElement(this.parentNode.id)");

    myDiv.appendChild(newRadioButton);
    myDiv.appendChild(deleteButton);
}
function createRangeSlider() {
    var DivID = countElements();
    const myForm = document.getElementById('myForm');
    let newDiv = document.createElement('div');
    newDiv.className ="formElementDiv";
    newDiv.id = DivID;
    myForm.appendChild(newDiv);

    const myDiv = document.getElementById(DivID);
    let inputElement = document.createElement('input');
    inputElement.id = DivID + "-item";
    inputElement.type ="range";
    inputElement.value ="50";

    let editElement = document.createElement('button'); 
    editElement.innerText ="edit (ansonsten 1 bis 100)";
    editElement.setAttribute("onclick", "saveSilderElement(this.parentNode.id)");

    let startInputElement = document.createElement('input');
    startInputElement.placeholder ="start";
    startInputElement.value ="1";
    startInputElement.id = DivID + "-startInput";
    let endInputElement = document.createElement('input');
    endInputElement.placeholder ="end";
    endInputElement.value ="100";
    endInputElement.id = DivID + "-endInput";
   
    let deleteButton = document.createElement('button');
    deleteButton.id = DivID + "-deleteButton";
    deleteButton.textContent ="Delete Element";
    deleteButton.setAttribute("onclick", "deleteElement(this.parentNode.id)");

    myDiv.appendChild(inputElement);
    myDiv.appendChild(startInputElement);
    myDiv.appendChild(endInputElement);
    myDiv.appendChild(editElement);
    myDiv.appendChild(deleteButton);
}
function createKeyword() {
    var DivID = countElements();
    const myForm = document.getElementById('myForm');
    let newDiv = document.createElement('div');
    newDiv.className ="formElementDiv";
    newDiv.id = DivID;
    myForm.appendChild(newDiv);

    const myDiv = document.getElementById(DivID);
    let newElement = document.createElement('input');
    newElement.className = "myFormElemente";
    newElement.id = DivID +"-item";
    let deleteButton = document.createElement('button');
    deleteButton.id = DivID + "-deleteButton";
    deleteButton.textContent ="Delete Element";
    deleteButton.setAttribute("onclick", "deleteElement(this.parentNode.id)");

    myDiv.appendChild(newElement);
    myDiv.appendChild(deleteButton);
}
/*end DOM*/
/*delete one spzific element */
function deleteElement(id) {
    let element = document.getElementById(id);
    element.parentNode.removeChild(element);
    /*TODO:move IDs by one*/
}

/*delete all*/
function deleteAll () {
    for (var i=0; i <=  NumberOfElements-1; i++)  {
        let element = document.getElementById(i);
        element.parentNode.removeChild(element);
    }
    NumberOfElements = 0; /*reset counter*/
}
/*for testing create 10 */
function create10 () {
    for (var i=0; i <= 9; i++) {
        console.log(i);
        createTextInput();
    }
}
/*count elements*/
function countElements () {
    NumberOfNextElement = NumberOfElements;
    NumberOfElements++; 
    console.log(NumberOfElements);
    return NumberOfNextElement;
}

window.onmouseover=function(e) {
    console.log(e.target.id);
};

function saveSilderElement (id) {
    const silder = document.getElementById(id + "-item");
    const start = document.getElementById(id + "-startInput");
    startvalue = start.value;
    silder.setAttribute("min", startvalue);
    const end = document.getElementById(id + "-endInput");
    endvalue = end.value;
    silder.setAttribute("max", endvalue);

}
