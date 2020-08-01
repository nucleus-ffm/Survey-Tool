<?php
include("header.php");
?>
<div class="content">
    <!-- begin form-->
   <div class="form">

        <div class="form_content">
            
            <div class="myForm" id="myForm">
            </div>
            <div class="popup" onclick="toggelComponents()">
                <svg class="newElement" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" role="img" aria-hidden="true" focusable="false"><path d="M10 1c-5 0-9 4-9 9s4 9 9 9 9-4 9-9-4-9-9-9zm0 16c-3.9 0-7-3.1-7-7s3.1-7 7-7 7 3.1 7 7-3.1 7-7 7zm1-11H9v3H6v2h3v3h2v-3h3V9h-3V6zM10 1c-5 0-9 4-9 9s4 9 9 9 9-4 9-9-4-9-9-9zm0 16c-3.9 0-7-3.1-7-7s3.1-7 7-7 7 3.1 7 7-3.1 7-7 7zm1-11H9v3H6v2h3v3h2v-3h3V9h-3V6z"></path></svg>
                <span class="popuptext" id="myPopup">
                    <div class="flexbox-container">
                        <button class="flexbox-item" id="TextBox" onclick="createTextBox()">
                            Textbox
                        </button>
                        <button class="flexbox-item" id="TextInput" onclick="createTextInput()">
                            Texteingabe
                        </button>
                        <button class="flexbox-item" id="RadioButton" onclick="createRadioButton()">
                            Radio-button
                        </button>
                        <button class="flexbox-item" id="RangeSlider" onclick="createRangeSlider()">
                            Range Sliders
                        </button>
                        <button class="flexbox-item" id="KeyWord" onclick="createKeyword()">
                            noch frei
                        </button>
                        <button class="flexbox-item">
                            noch frei
                        </button>
                    </div>
                </span>
            </div>
        </div>
    </div>
    <!-- end form -->
    <!-- begin control Panel-->
    <div class="controlPanel">
        <div class="controllButtonGroup">
            <button class="controlButton" onclick="generateID(1)">
                Array Test
            </button>
            <button class="controlButton" onclick="saveForm()">
                speichern
            </button>
            <button class="controlButton" onclick="">
                LEER
            </button>
            <button class="controlButton" onclick="create10()">create10</button>
            <button class="controlButton" onclick="deleteAll()">alles löschen</button>
        </div>
    </div>
    <!-- end  control Panel-->
  <script src="js/components-dropdown.js"></script>
  <script src="js/createForm.js"></script>
</div>

<?php
//TODO: fix footer 
include("footer.php");

?>

