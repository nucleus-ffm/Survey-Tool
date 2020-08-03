<?php
include("head.php");
include("header.php");
?>
<link rel="stylesheet" href="css/faq.css"/>
<!-- begin content -->
<div class="content">
    <div class="faq">
        <h1>FAQ</h1>
        <!-- beginn FAQ -->
        <div class="faqSection">
            <h2>Allgemeines</h2>
            <button class="faq-item">Was ist das für ein Tool?</button>
            <div class="panel">
                <p>Dies ist ein einfaches Umfragetool, dass es erlaubt schnell, einfache Umfrage zu erstellen 
                    und auch die Auswertung in echtzeit zu sehen. Es wurde entwickelt von zwei Schülern aus dem Informatik-LK 2020
                    in den Sommerferien. Wenn du wissen willst, wer wie viel gemacht hat, schau in das Github-Repository rein. Link Dazu
                    <a href="https://github.com/nucleus-ffm/Survey-Tool/graphs/contributors">HIER</a>
                </p>
            </div>

            <button class="faq-item">Wer kann das Tool benutzen?</button>
            <div class="panel">
                <p>
                    Das Tool ist grundsätzlich für alle. Alles was Du dazu brauchst ist ein Account bei uns. Diesen kannst <a href="startpage.de">hier</a> anlegen. 
                    Daraufhin müssen wir den Account allerdings noch aktivieren. Diesen Schritt haben wir eingebaut, damit niemand dieses Tool 
                    in irgendeiner Form misbrauchen kann. Deshalb bitten wir auch um einen Grund, warum Du Dir einen Account erstellen willst. 
                    Wenn wir irgendwie Zweifel haben, werden wir nochmal mit Dir per E-mail in Kontakt treten. Aber im allgemeinen sollte das 
                    nicht das Problem sein und auch nicht lange dauern. Wenn du es in irgendeiner Form sehr eilig hast, schreib uns nach dem Account
                    anlegen direkt eine E-Mail. Ansonsten dauert die Freischaltung maximal einen Tag. 
                </p>
            </div>

            <button class="faq-item">Wie erstelle ich eine Umfrage? </button>
            <div class="panel">
                <p>
                    Nach dem Du Dich in Deinem Account eingeloggt hast, erscheint Rechts oben in der Header-Leister der Button: "Einstellung"
                    Wenn Du dort draufklickst, erscheint die Navigation. Um eine Umnfrage zu erstellen klickst Du auf Umfragen. So gelagst Du 
                    zu einer Übersicht über alle deine Umfragen. Wenn du noch keine Umfrag erstellt hast, ist dieses Dashboard allerdings noch leer. 
                    Über den Button "Neue Umfrage" gelangst Du nun zum Umfrageersteller. Dort kannst du mit einem Klick auf das "+" ein neues Element hinzufügen. 
                    Der Rest sollte selbsterklärend sein. Wenn du dann fertig bist. Klickst Du auf "Speichern". So gelangst du auch zurück zur Übersicht. 
                    Deine Umfrage ist nun bereit. Du kannst nun entweder den Link teilen oder die Umfragen-ID weitergeben.
                </p>
            </div> 
            <button class="faq-item">Wie können andere an der Umfrage teilnehmen? </button>
            <div class="panel">
                <p>
                    Wenn Du die ID von einer Umfrage bekommen hast, kannst du nun über die seite: "server.de/TOOL/index.php" Die Umfrage aufrufen.
                    Dafür einfach die ID eintippen und auf "los" klicken. 
                </p>
            </div>
        </div>
        <div class="faqSection">
            <h2>Probleme und Kontakt </h2>
            <button class="faq-item">Irgendwas funktioniert nicht. Was soll ich tun?</button>
            <div class="panel">
                <p>
                    Wie immer: Ruhe bewahren. Schreib uns bitte eine E-mail in der Du das Problem genau erläuterst und auch wann es aufgetreten ist,
                    oder auch wie man es reproduzieren kann. Danke. Wir werden uns dann so schnell wie möglich drum kümmern. 
                </p>
            </div>
            <button id="kontakt" class="faq-item">Du willst uns erreichen?</button>
            <div class="panel">
                <p>
                    <h3>bitte beachten! </h3>
                    Bevor Du uns eine E-Mail schreibst, nimm dir bitte die Zeit und beachte unsere Hinweise: <br>

                    <h4>Genau sein:</h4>
                    Beschreibe bitte genau, was Dein Anliegen ist, sodass wir ohne Nachfrage verstehen können, was Dein Anliegen ist.
                    <h4>Die Reaktion dauert:</h4>
                    Es kann sein, dass die Antwort etwas auf sich warten lässt. Da wir auch viel anderes zu tun haben,
                    kann es sein, dass wir es erst ein paar Tage später schaffen zu antworten. Aber keine Sorge, die Antwort wird kommen. 
                    <br><br>
                    Wenn Du dies beachtest, schreib uns gerne an:
                    <br><br> 
                    <h3>Kontakt </h3>
                    E-Mail: Adresse@provider.de
                    
                </p>
            </div>
        </div>
        <div class="faqSection">
            <h2>Sonstiges</h2>
            <button class="faq-item">Deine Frage war hier nicht dabei?</button>
            <div class="panel">
                <p>Wenn Du noch eine Frage hast, die nicht geklärt werden konnte, lass sie uns doch bitte per E-Mail zukommen
                    dann werden wir diese so schnell wie möglich beantworten. 
                </p>
            </div>
            <button class="faq-item">Sie wollen gesiehst werden?</button>
            <div class="panel">
                <p>
                    Verständlich, aber im Moment leider nicht möglich. Wir entschuldigen uns für die Unannehmlichkeiten.
                </p>
            </div>
        </div>
        <div class="faqSection">
            <h2>mithelfen</h2>
            <button class="faq-item">Du willst mithelfen?</button>
            <div class="panel">
                <p>
                    Immer gern. Wenn Du etwas Kenntnis von HTML, PHP, SQL und JAVASCRIPT hast, können wir Deine Hilfe bestimmt gebrauchen. 
                    Den Quelltext findest Du <a href="https://github.com/nucleus-ffm/Survey-Tool">HIER </a> schau es dir mal an und schau
                    vielleicht ob es ein issues gibt, welches Du lösen kannst. Ansosnten tritt gern mit uns in Kontakt. 
                </p>
            </div>
            <button class="faq-item">Wie kann man sonst noch helfen?</button>
            <div class="panel">
                <p>
                    Gern kannst Du dieses Tool auch nach Rechtschreib- oder Tippfehlern duchsuchen und uns per Mail mitteilen. 
                    Dank. ;)
                </p>
            </div>
        </div>
    <!-- end FAQ -->
    </div>
<!-- end content -->
<?php 
include("footer.php");
?>
<script src="js/faq.js"></script>
</div>