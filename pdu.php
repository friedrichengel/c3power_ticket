<?php
$pdu = isset($_GET['pdu']) ? (int) $_GET['pdu'] : 0;

if (!($pdu > 0 && $pdu < 500)) {
?>
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
<?php
} else {
?>
    <!DOCTYPE html>
    <html lang=\"de\">
    <head>
        <meta charset=\"utf-8\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <title>PDU - Support</title>
        <script src=\"https://code.jquery.com/jquery-2.1.4.min.js\"></script>
        <script id=\"zammad_form_script\" src=\"https://ticket.c3power.de/assets/form/form.js\"></script>
        <script>
            $(function () {
                $('#feedback-form').ZammadForm({
                    messageTitle: 'PDU_<?=$pdu?> Support',
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
<?php
}
?>