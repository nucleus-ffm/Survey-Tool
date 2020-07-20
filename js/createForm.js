/*global vars*/
var NumberOfElements = 0; 
var NumberOfDivs = 0; 
/*begin DOM*/
function createTextBox() {
    var DivID = countDivs();
    const myForm = document.getElementById('myForm');
    let newDiv = document.createElement('div');
    newDiv.className ="formElementDiv";
    newDiv.id = DivID+ "-Div";
    myForm.appendChild(newDiv);

    const myDiv = document.getElementById(DivID+ "-Div");
    let newElement = document.createElement('textarea');
    let deleteButton = document.createElement('button');
    deleteButton.id = DivID + "-deleteButton";
    deleteButton.textContent ="Delete Element";
    deleteButton.setAttribute("onclick", "deleteElement(this.parentNode.id)");

    newElement.id = DivID + "item";
    newElement.placeholder = "Hier bitte Text eintragen";
    newElement.className = "myFormElemente";

    let svgObject = document.createElementNS("http://www.w3.org/2000/svg", "svg");
    svgObject.setAttribute('class', 'newElement');
    svgObject.setAttribute('width', '24');
    svgObject.setAttribute('height', '24');
    svgObject.setAttribute('viewBox', '-2 -2 24 24');
    svgObject.setAttribute('role', 'img');
    svgObject.setAttribute('aria-hidden' , 'true');
    svgObject.setAttribute('focusable' , 'false');
    svgObject.innerHTML = '<path d="M10 1c-5 0-9 4-9 9s4 9 9 9 9-4 9-9-4-9-9-9zm0 16c-3.9 0-7-3.1-7-7s3.1-7 7-7 7 3.1 7 7-3.1 7-7 7zm1-11H9v3H6v2h3v3h2v-3h3V9h-3V6zM10 1c-5 0-9 4-9 9s4 9 9 9 9-4 9-9-4-9-9-9zm0 16c-3.9 0-7-3.1-7-7s3.1-7 7-7 7 3.1 7 7-3.1 7-7 7zm1-11H9v3H6v2h3v3h2v-3h3V9h-3V6z"></path>';

    myDiv.appendChild(newElement);
    myDiv.appendChild(deleteButton);
    myDiv.appendChild(svgObject);
}
function createTextInput() {
    var DivID = countDivs();
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
    var DivID = countDivs();
    const myForm = document.getElementById('myForm');
    let newDiv = document.createElement('div');
    newDiv.className ="formElementDiv";
    newDiv.id = DivID;
    myForm.appendChild(newDiv);

    const myDiv = document.getElementById(DivID);

    let newControlDiv = document.createElement('div');
    newControlDiv.className ="RadioControlDiv";
    newControlDiv.id = DivID +"-control";
    myDiv.appendChild(newControlDiv);

    const controlDiv = document.getElementById(DivID + "-control");

    let plus = document.createElement('button');
    plus.textContent = "add Radio Button";
    plus.className ="greenButton";
    plus.id = DivID; 
    plus.setAttribute("onclick", "newRadioButton(this.id)");

    /*let svgObject = document.createElementNS("http://www.w3.org/2000/svg", "svg");
    svgObject.setAttribute("onclick", "newRadioButton(this.parentNode.id)");
    svgObject.setAttribute('class', 'newElement');
    svgObject.setAttribute('width', '24');
    svgObject.setAttribute('height', '24');
    svgObject.setAttribute('viewBox', '-2 -2 24 24');
    svgObject.setAttribute('role', 'img');
    svgObject.setAttribute('aria-hidden' , 'true');
    svgObject.setAttribute('focusable' , 'false');
    svgObject.innerHTML = '<path d="M10 1c-5 0-9 4-9 9s4 9 9 9 9-4 9-9-4-9-9-9zm0 16c-3.9 0-7-3.1-7-7s3.1-7 7-7 7 3.1 7 7-3.1 7-7 7zm1-11H9v3H6v2h3v3h2v-3h3V9h-3V6zM10 1c-5 0-9 4-9 9s4 9 9 9 9-4 9-9-4-9-9-9zm0 16c-3.9 0-7-3.1-7-7s3.1-7 7-7 7 3.1 7 7-3.1 7-7 7zm1-11H9v3H6v2h3v3h2v-3h3V9h-3V6z"></path>';
    */

    let deleteButton = document.createElement('button');
    deleteButton.className ="deleteElement";
    deleteButton.id = DivID;
    deleteButton.textContent ="Delete Element";
    deleteButton.setAttribute("onclick", "deleteElement(this.id)");
    
    controlDiv.appendChild(plus);
    controlDiv.appendChild(deleteButton);
    
}
function createRangeSlider() {
    var DivID = countDivs();
    const myForm = document.getElementById('myForm');
    let newDiv = document.createElement('div');
    newDiv.className ="formElementDiv";
    newDiv.id = DivID + "-Div";
    myForm.appendChild(newDiv);

    const myDiv = document.getElementById(DivID+ "-Div");
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
    var DivID = countDivs();
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
    /*TODO:move IDs by one */
    console.log("movedElement: " +id++);
    let movedElement = document.getElementById(id++);
    let movedElement2 = document.getElementById(id + 2);
    console.log("movedElement2: " +id + 2);
    var buffer = 0;
    buffer = movedElement.id;
    movedElement.id = id-1;
    movedElement2.id = buffer;
    
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
/*count Divs*/
function countDivs() {
    NumberOfNextDiv = NumberOfDivs;
    NumberOfDivs++; 
    console.log(NumberOfDivs);
    return NumberOfNextDiv;
}
/*count Elements*/
function countElements () {
    NumberOfNextElement = NumberOfElements;
    NumberOfElements++; 
    console.log(NumberOfElements);
    return NumberOfNextElement;
}
/*just for testing */
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

function newRadioButton (id) {
    ElementID = countElements();
    
    const myDiv = document.getElementById(id);
    let newDiv = document.createElement('div');
    newDiv.className ="formRadioDiv";
    newDiv.id = id + ElementID;
    myDiv.appendChild(newDiv);

    const myRadioDiv = document.getElementById(id + ElementID);
    let newRadioButton = document.createElement('input');
    newRadioButton.type = "radio";
    newRadioButton.id = ElementID + "-radio";
    newRadioButton.name = id;
    let radioButtonText = document.createElement('text');
    radioButtonText.textContent ="--";
    radioButtonText.id = ElementID +"-Text";
    let RadioButtonValue = document.createElement('input');
    RadioButtonValue.id = ElementID + "-input";
    RadioButtonValue.placeholder ="Bitte Wert eintragen";
    let saveButton = document.createElement('button'); 
    saveButton.className ="greenButton";
    saveButton.textContent ="save";
    saveButton.id = ElementID;
    saveButton.setAttribute("onclick", "saveRadioButtonValue(this.id)");
    let deleteButton = document.createElement('button');
    deleteButton.className ="deleteElement";
    deleteButton.id = ElementID + "-deleteButton";
    deleteButton.textContent ="Delete";
    deleteButton.setAttribute("onclick", "deleteElement(this.parentNode.id)");
    myRadioDiv.appendChild(newRadioButton);
    myRadioDiv.appendChild(radioButtonText);
    myRadioDiv.appendChild(RadioButtonValue);
    myRadioDiv.appendChild(saveButton);
    myRadioDiv.appendChild(deleteButton);
}

function saveRadioButtonValue (id) {
    console.log("saveRadioButtonValue"+ id);
    const myRadioButtonText = document.getElementById(id +"-Text");
    const myRadioButton = document.getElementById(id+ "-radio");
    const myInputValue = document.getElementById(id+"-input");
    inputValue = myInputValue.value;
    myRadioButtonText.textContent = inputValue;
    myRadioButton.value = inputValue;
}