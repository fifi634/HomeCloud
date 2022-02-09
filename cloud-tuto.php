<?php
    $title = 'l\'installation';
    require 'header.php'; 
?>


<body>
    <div class="container">
        <h1>Home Cloud</h1>
        <h2>L'installation</h2>
        
        <h3>1) Télécharger Nextcloud Pi</h3>
        <p>Rendez-vous à cette adresse : <a href="https://ownyourbits.com/downloads/" target="_blank" alt="lien vers ownyourbits.com">ownyourbits.com</a>, et télécharger la version souhaité. Pour un Raspberry, choisissez "NextcloudPi_Rpi_JJ-MM-AA".
        </p>

        <h3>2) Télécharger Rufus</h3>
        <p>Ce logiciel va permettre de flasher l'image téléchargé précedemment sur la carte SD qui irra dans le Raspbery.
            <ul>
                <li>à partir de Windows, télécharger <a href="https://rufus.ie/downloads/" target="_blank" alt="lien vers rufus.ie">le logiciel "Rufus"</a> et choisissez la version Rufus-X.XXp.exe</li>
                <li>à partir d'un dérivé de Débian (Ubuntu...), ou d'un macOS, télécharger <a href="https://www.balena.io/etcher/" target="_blank" alt="lien vers balena.io">Etcher</a>. 
                    <p>Pour Débian et ses dérivé, vous avez téléchargé un dossier compressé .zip, faites un double-clique dessus puis décompressez-le dans un endroit où pouvez le retrouver pour l'étape d'après.</p>
                    <p>Pour macOS, désolé je ne connais pas cette OS pour vous expliquer la marche à suivre.</p>
                </li>
            </ul>
        </p>

        <h3>3) Flasher l'image .img sur la carte SD</h3>
        <p>Depuis un ordinateur avec un emplacement de carte SD ou avec un adaptateur USB/SD, lancer le logiciel et flasher l'image .img téléchargé à l'étape 1 sur la carte SD :
            <ul>
                <li>Sur Windows (Rufus) en lançant le logiciel téléchargé Rufus à l'étape 2 puis</li>
                <li>
                    <p>Sur Débian (et ses dérivé) : <p>lancez le logiciel Etcher téléchargé Rufus à l'étape 2</p>
                    <p>Dans le premièr bouton "Flash from files", insérer l'image NexcloudPi télécharger à l'étape 1 </p>
                    <p>Dans le second bouton "Select target", selectionner votre carte SD</p>
                    <p>Cliquez sur la troisième icone "Flash!" pour lancer le flash</p>
                </li>
            </ul>
        </p>

        <h3>Télécharger Putty (seulement pour Windows) et connectez vous au Raspberry</h3>
        <p>Pour Windows :
            <ul>
                <li>Télécharger <a href="https://www.chiark.greenend.org.uk/~sgtatham/putty/latest.html" target="_blank" alt="lien pour télécharger le logiciel Putty">Putty</a></li>
                <li>Dans "IP Adresse" mettre l'IP du Raspberry</li>
                <li>Dans Port, mettez "22" (port ssh par défaut</li>
                <li>Dans nom d'utilisateur, entrer le nom d'utilisateur du Raspberry ("raspberry" pour la première utilisation)</li>
                <li>Dans Mot de Passe entrez le mot de passe ("raspbi" pour la première utlisation)</li>
                <li>Puis cliquez sur "connecter"</li>
            </ul>
        </p>
        <p>
            Pour Linux (Débian et ses dérivé...), ouvre un terminal puis copiez/coller le code suivant : <figure><nom_utilisateur>@<address_ip_du_raspberry> -p <port_du_raspberry></figure> en remplaçant <...> par ce qui est demandé concernent votre Raspberry.
        </p>
    </div>
</body>

<?php require 'footer.php'; ?>
</html>