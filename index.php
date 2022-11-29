<?php

if (isset($POST['email'])) {
    $result = false;
    $email = trim($POST['email']);
    if (str_contains($email, '@') && str_contains($email, '.')) {
        $result = true;
    }
}
?>

<!--
Esercizio di oggi: PHP Strong Password Generator
nome repo: php-strong-password-generator

Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

Milestone 3
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.

Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.  
-->


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Password Generator</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php

        if (isset($result)) {
        ?>
        <div class="alert alert-success">
            Iscrizione alla newsletter con successo! <br>
            Riceverai aggiornamenti sulla sta email!
        </div>
        <?php
        } else {
        ?>
        <div class="alert alert-danger">
            Errore durante la procedura d'iscrizione alla newsletter. <br>
            Formato email non corretto!
        </div>
        <?php
        }
        ?>
    </div>
</body>

</html>