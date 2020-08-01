/*global vars*/
var NumberOfElements = 0;
var NumberOfDivs = 0;
var DivArray = [];

/*begin DOM*/
function createSurveyTitle() {
    const myForm = document.getElementById('myForm');
    let surveyTitle = document.createElement('input'); 
    surveyTitle.id = "surveyTitle";
    surveyTitle.placeholder =" Bitte Title eintragen";
    myForm.appendChild(surveyTitle);
}
function createTextBox() {
    var DivID = countDivs();
    var elementID = generateID(DivID);
    const myForm = document.getElementById('myForm');
    let newDiv = document.createElement('div');
    newDiv.className ="formElementDiv";
    newDiv.id = DivID+ "-Div";
    myForm.appendChild(newDiv);

    const myDiv = document.getElementById(DivID+ "-Div");
    let question = document.createElement('textarea'); 
    question.placeholder = "Bitte hier die Frage eingeben...."
    question.id = "Div-"+ DivID +"-element-"+ elementID + "-question";
    question.value = "Hallo";
    let newElement = document.createElement('textarea');
    let deleteButton = document.createElement('button');
    deleteButton.id = DivID + "-deleteButton";
    deleteButton.textContent ="Delete Element";
    deleteButton.setAttribute("onclick", "deleteElement(this.parentNode.id)");
    
    newElement.id ="Div-"+ DivID +"-element-"+ elementID;
    newElement.placeholder = "Hier bitte Text eintragen";
    newElement.className = "myFormElemente";

    myDiv.appendChild(question);
    myDiv.appendChild(newElement);
    myDiv.appendChild(deleteButton);
}
function createTextInput() {
    var DivID = countDivs();
    var elementID = generateID(DivID);
    const myForm = document.getElementById('myForm');
    let newDiv = document.createElement('div');
    newDiv.className ="formElementDiv";
    newDiv.id = DivID;
    myForm.appendChild(newDiv);

    const myDiv = document.getElementById(DivID);

    let question = document.createElement('textarea'); 
    question.placeholder = "Bitte hier die Frage eingeben...."
    question.id = "Div-"+ DivID +"-element-"+ elementID + "-question";

    let newElement = document.createElement('input');
    newElement.className = "myFormElemente";
    
    newElement.id ="Div-"+ DivID +"-element-"+ elementID;

    let deleteButton = document.createElement('button');
    deleteButton.id = DivID + "-deleteButton";
    deleteButton.textContent ="Delete Element";
    deleteButton.setAttribute("onclick", "deleteElement(this.parentNode.id)");
    
    myDiv.appendChild(question);
    myDiv.appendChild(newElement);
    myDiv.appendChild(deleteButton);
}
function createRadioButton() {
    var DivID = countDivs();
    var elementID = 0; 
    const myForm = document.getElementById('myForm');
    let newDiv = document.createElement('div');
    newDiv.className ="formElementDiv";
    newDiv.id = "Div-" + DivID;
    myForm.appendChild(newDiv);

    const myDiv = document.getElementById("Div-" + DivID);
    let question = document.createElement('textarea'); 
    question.placeholder = "Bitte hier die Frage eingeben...."
    question.id = "Div-"+ DivID +"-element-"+ elementID + "-question";
    myDiv.appendChild(question);

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
    var elementID = generateID(DivID);
    const myForm = document.getElementById('myForm');
    let newDiv = document.createElement('div');
    newDiv.className ="formElementDiv";
    newDiv.id = DivID + "-Div";
    myForm.appendChild(newDiv);

    const myDiv = document.getElementById(DivID+ "-Div");

    let question = document.createElement('textarea'); 
    question.placeholder = "Bitte hier die Frage eingeben...."
    question.id = "Div-"+ DivID +"-element-"+ elementID + "-question";

    let inputElement = document.createElement('input');
    
    inputElement.id ="Div-"+ DivID +"-element-"+ elementID;
    inputElement.type ="range";
    inputElement.value ="50";
    inputElement.setAttribute("min", 1);
    inputElement.setAttribute("max", 100);

    let editElement = document.createElement('button');
    editElement.innerText ="edit (ansonsten 1 bis 100)";
    editElement.id = elementID; 
    editElement.setAttribute("onclick", "saveSilderElement(this.parentNode.firstChild.nextElementSibling.id, this.previousElementSibling.id, this.nextElementSibling.id)");

    let startInputElement = document.createElement('input');
    startInputElement.placeholder ="start";
    startInputElement.value ="1";
    startInputElement.id = "Div-"+ DivID +"-element-"+ elementID + "-startInput";
    let endInputElement = document.createElement('input');
    endInputElement.placeholder ="end";
    endInputElement.value ="100";
    endInputElement.id = "Div-"+ DivID +"-element-"+ elementID + "-endInput";

    let deleteButton = document.createElement('button');
    deleteButton.id = DivID + "-deleteButton";
    deleteButton.textContent ="Delete Element";
    deleteButton.setAttribute("onclick", "deleteElement(this.parentNode.id)");
    
    myDiv.appendChild(question);
    myDiv.appendChild(inputElement);
    myDiv.appendChild(startInputElement);
    myDiv.appendChild(editElement);
    myDiv.appendChild(endInputElement);
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

    let question = document.createElement('textarea'); 
    question.placeholder = "Bitte hier die Frage eingeben...."
    question.id = "Div-"+ DivID +"-element-"+ elementID + "-question";

    let newElement = document.createElement('input');
    newElement.className = "myFormElemente";
    var elementID = generateID(DivID);
    inputElement.id ="Div-"+ DivID +"-element-"+ elementID;
    let deleteButton = document.createElement('button');
    deleteButton.id = DivID + "-deleteButton";
    deleteButton.textContent ="Delete Element";
    deleteButton.setAttribute("onclick", "deleteElement(this.parentNode.id)");
    
    myDiv.appendChild(question);
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
    for (var i=0; i <=  NumberOfDivs-1; i++)  {
        let element = document.getElementById(i);
        element.parentNode.removeChild(element);
    }
    NumberOfDivs = 0; /*reset counter*/
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
/*count Elements not in use
function countElements () {
    var NumberOfNextElement = NumberOfElements;
    NumberOfElements++;
    console.log(NumberOfElements);
    return NumberOfNextElement;
}*/

function saveSilderElement (SliderID, startInputID, endInputID) {
    console.log("SliderID: " + SliderID + " startInputID: "+ startInputID + " endInputID: " + endInputID);
    const silder = document.getElementById(SliderID);
    const start = document.getElementById(startInputID);
    var startvalue = start.value;
    silder.setAttribute("min", startvalue);
    const end = document.getElementById(endInputID);
    var endvalue = end.value;
    silder.setAttribute("max", endvalue);
}

function newRadioButton (DivID) {
    ElementID = generateID(DivID);

    const myDiv = document.getElementById("Div-"+ DivID);
    let newDiv = document.createElement('div');
    newDiv.className ="formRadioDiv";
    newDiv.id = DivID + ElementID;
    myDiv.appendChild(newDiv);

    const myRadioDiv = document.getElementById(DivID + ElementID);
    let newRadioButton = document.createElement('input');
    newRadioButton.type = "radio";
    newRadioButton.id = "Div-" + DivID + "-element-"+ ElementID ;
    newRadioButton.name = DivID;
    let radioButtonText = document.createElement('text');
    radioButtonText.textContent ="--";
    radioButtonText.id = "Div-" + DivID + "-element-"+ ElementID +"-text";
    let RadioButtonValue = document.createElement('input');
    RadioButtonValue.id = "Div-" + DivID + "-element-"+ ElementID + "-input";
    RadioButtonValue.placeholder ="Bitte Wert eintragen";
    RadioButtonValue.setAttribute("onchange", "saveRadioButtonValue(this.parentNode.firstChild.id,this.previousElementSibling.id, this.id)");
    let saveButton = document.createElement('button');
    saveButton.className ="greenButton";
    saveButton.textContent ="save";
    saveButton.id = ElementID;
    saveButton.setAttribute("onclick", "saveRadioButtonValue(this.parentNode.firstChild.id,this.previousElementSibling.previousElementSibling.id, this.previousElementSibling.id)"); //RadioButton, RadioText, InputElement 
    let deleteButton = document.createElement('button');
    deleteButton.className ="deleteElement";
    deleteButton.id = ElementID + "-deleteButton";
    deleteButton.textContent ="Delete";
    deleteButton.setAttribute("onclick", "deleteElement(this.parentNode.id)");
    myRadioDiv.appendChild(newRadioButton);
    myRadioDiv.appendChild(radioButtonText);
    myRadioDiv.appendChild(RadioButtonValue);
    //myRadioDiv.appendChild(saveButton);
    myRadioDiv.appendChild(deleteButton);
}

function saveRadioButtonValue (RadioID, TextID, InputID) {
    console.log("RadioID: "+ RadioID + " TextID: "+ TextID + " InputID: " + InputID);
    const myRadioButtonText = document.getElementById(TextID);
    const myRadioButton = document.getElementById(RadioID);
    const myInputValue = document.getElementById(InputID);
    var inputValue = myInputValue.value;
    myRadioButtonText.textContent = inputValue;
    myRadioButton.value = inputValue;
}

function saveForm () {
    var SendData = '';
    
    console.log("SurveyID:" + surveyID);
    DivArray.forEach(function(item, index) {
        console.log(item, index);
        var ArrayName = item + "-array";
        console.log("Array Länge: " + window.ArrayName.length);
        //var array = window.ArrayName;
        //"Div-"+ DivID +"-element-"+ elementID;
        window.ArrayName.forEach(function(item_in, index_in) {
            console.log("inner Array: " + item_in +"-"+ index_in);
            var itemNumber = index_in; 
            console.log("try to get this: " +"Div-" + index +"-element-"+ itemNumber);
            element = document.getElementById("Div-" + index +"-element-"+ itemNumber);
            var question = document.getElementById("Div-" + index +"-element-"+ 0 + "-question");
            if (question.textContent == null){
                console.log("question is null");
            }
            else {
                //console.log("die Frage ist: " + question.textContent);
            }
            var P =  index +"-" + itemNumber;
            surveyTitle = document.getElementById("surveyTitle");
            console.log("Umfragentitle: "+ surveyTitle.value);
            SendData = SendData + "&surveyTitle=" + surveyTitle.value + "&surveyID=" + window.surveyID ;
            if (element != null) {
                console.log("das Elemenet an Position: " +index_in +" ist ein: " + element.type);
                
                if (element.type == "textarea") {
                    SendData = SendData + "&type=" + element.type + "&ID=" + element.id +  "&question=" + question.value;
                }else if (element.type == "text") {
                    SendData = SendData + "&ID=" + element.id + "&type=" + element.type + "&question=" + question.value;
                }else if (element.type == "radio" ) {
                    SendData = SendData + "&ID=" + element.id + "&type=" + element.type + "&question=" + question.value + "&name=" + element.name + "&value="+ element.value;
                }else if (element.type == "range") {
                    SendData = SendData + "&ID=" + element.id + "&type=" + element.type + "&question=" + question.value + "&name=" + element.name + "&startValue="+ element.getAttribute("min") + "&endValue=" + element.getAttribute("max");
                }
                console.log("try to send Data to Server");
                var request = new XMLHttpRequest();
                request.open("POST", "php-helpers/saveForm.php", true);
                request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                request.send(SendData);

                request.onreadystatechange = function(){
                    if (this.readyState == 4 && this.status == 200){
                        console.log("success");
                        ergebnis = this.responseText;
                        console.log(ergebnis);
                    }else {
                        console.log("error");
                    }
                };
             }
            else {}
          })
      })
      //Alert-dialog and forwarding to the dashboard 
      alert("Umfrage wurde gespeichert! Sie kehren zurück zur Übersicht.");
      window.location.replace("/Survey-Tool-Github/dashboard.php");
}
function generateID(DivID) {
  console.log("start generateID");
  //check if ID is in DivArray
  var ArrayName = DivID + "-array";
  console.log("an Position: " + DivArray.indexOf(ArrayName));
  if (DivArray.indexOf(ArrayName) == -1) {
    //div is not in Array
    window.ArrayName = ['']; //-window.- is potentially problematic, we will see
    DivArray.push(ArrayName);
  }
  else {
    // in DivArray
  }
  var newElementID = window.ArrayName.length-1;
  var newlength = window.ArrayName.push(newElementID);
  return newElementID;
}
/*create  randome Survey ID */
window.onload = function generateSurveyID() {
    window.surveyID = Math.floor(Math.random() * 99999) + 1;  // returns a random integer from 1 to 99999
    createSurveyTitle();
}
/*just for testing */
window.onmouseover=function(e) {
    console.log(e.target.id);
};