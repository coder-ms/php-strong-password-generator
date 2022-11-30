<?php

include __DIR__ . '/functions/functions.php';
include __DIR__ . '/partials/header.php'; 

?>

<?php
	// require_once "_connessione_db.php"; 
	// require_once "_connessione_dll.php";
?>


    <main>
        <div class="text-center">
            <h3>Password Generata: </h3>
            <div class="choosenPassword">
                <?php 
                    echo passwordGenerator(); 
                ?>
            </div>
            <a href="index.php" class="buttonToIndex"> Back to Password Generator</a>
        </div>
    </main>

    <?php include __DIR__ . '/partials/footer.php';?>

</body>

</html>