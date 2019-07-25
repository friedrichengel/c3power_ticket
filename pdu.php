<?php
if(!isset($_GET['pdu']))  
    $pdu_id = 0; 
else
    $pdu_id = trim(strip_tags($_GET['pdu'])); 

if (! preg_match("/^[0-9]{1,3}$/", $pdu_id)) {
    $pdu_id = 0;
}

if (($pdu_id >0)&&($pdu_id <500))
    $pdu_id_checked =  $pdu_id + 0;
else
    $pdu_id_checked = 0;

//echo "Debug: PDU_ID = $pdu_id, PDU_ID_Checked = $pdu_id_checked";

if ($pdu_id_checked == 0){
echo "
    <!DOCTYPE html>
    <html lang=\"de\">
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <title>PDU - Support</title>
    </head>
    <body>

    We are sorry - The distribution box bumber you have scanned doesn't exist!<br><br>
    Please try to read the QR-Code again.

    </body>
    </html>
    ";
} else {
echo "
    <!DOCTYPE html>
    <html lang=\"de\">
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <title>PDU - Support</title>
        <script src=\"https://code.jquery.com/jquery-2.1.4.min.js\"></script>
        <script id=\"zammad_form_script\" src=\"https://ticket.c3power.de/assets/form/form.js\"></script>
        <script>
            $(function() {
                $('#feedback-form').ZammadForm({
                messageTitle: 'PDU_".$pdu_id_checked." Support',
                messageSubmit: 'Übermitteln',
                messageThankYou: 'Vielen Dank für Ihre Anfrage (#%s). Wir melden uns umgehend!',
                showTitle: true
                });
            });
        </script>
    </head>
    <body>

    <div id=\"feedback-form\">form will be placed in here</div>

    </body>
    </html>
    ";
}
?>