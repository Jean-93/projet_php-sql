<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles.css">
        <title>Formulaire d'inscription Ecole</title>
    </head>


    <body>
        
        <form action="traitement.php" method="post">
            <p>
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom" required>
                <br>
                <label for="prenom">Prenom :</label>
                <input type="text" name="prenom" id="prenom" required>
                <br>
                <label for="date">Date de naissance :</label>
                <input type="date" name="date" id="date" required>
                <br>
                <label for="classe">Classe 2019/2020 :</label>
                <input type="text" name="classe" id="classe" required>
                <br>
                <br>
                <label for="resposable">Parents ou Responsable légal :</label>
                <input type="text" name="responsable" id="responsable" required>
                <br>
                <label for="tel">Tel :</label>
                <input type="tel" name="tel" id="tel" required>
                <br>
                <label for="email">E-mail :</label>
                <input type="email" name="email" id="email" required>
                <br>
                <ul>
                    <h2>Classe de 6éme</h2>
                    <input type="checkbox" name="culture_religieuse" id="culture_religieuse" /><label for="culture_religieuse">culture_religieuse</label>
                    <input type="checkbox" name="catéchèse" id="catéchèse" /><label for="catéchèse">catéchèse</label>
                    <p>Facultatif</p>
                    <input type="checkbox" name="classe_bilangue-anglais/allemand" id="classe_bilangue-anglais/allemand" /><label for="classe_bilangue-anglais/allemanduse">classe_bilangue-anglais/allemand</label>

                    <h2>Classe de 5éme</h2>
                    <h4>LV2 Obligatoire</h4>
                    <input type="checkbox" name="allemand" id="allemand" /><label for="allemand">allemand</label>
                    <input type="checkbox" name="espagnol" id="espagnol" /><label for="espagnol">espagnol</label>
                    <input type="checkbox" name="italien" id="italien" /><label for="italien">italien</label>
                    <h4>Facultatif</h4>
                    <input type="checkbox" name="latin" id="latin" /><label for="latin">latin</label>

                    <h2>Classe de 4éme</h2>
                    <h4>LV2 Obligatoire</h4>
                    <input type="checkbox" name="allemand" id="allemand" /><label for="allemand">allemand</label>
                    <input type="checkbox" name="espagnol" id="espagnol" /><label for="espagnol">espagnol</label>
                    <input type="checkbox" name="italien" id="italien" /><label for="italien">italien</label>
                    <h4>Facultatif</h4>
                    <input type="checkbox" name="latin" id="latin" /><label for="latin">latin</label>

                    <h2>Classe de 3éme</h2>
                    <h4>LV2 Obligatoire</h4>
                    <input type="checkbox" name="allemand" id="allemand" /><label for="allemand">allemand</label>
                    <input type="checkbox" name="espagnol" id="espagnol" /><label for="espagnol">espagnol</label>
                    <input type="checkbox" name="italien" id="italien" /><label for="italien">italien</label>
                    <h4>Facultatif</h4>
                    <input type="checkbox" name="latin" id="latin" /><label for="latin">latin</label>

                    <h2>Classe de 2nd</h2>
                    <input type="checkbox" name="allemand" id="allemand" /><label for="allemand">allemand</label>
                    <input type="checkbox" name="espagnol" id="espagnol" /><label for="espagnol">espagnol</label>
                    <input type="checkbox" name="italien" id="italien" /><label for="italien">italien</label>
                    <h4>Options</h4>
                    <input type="checkbox" name="latin" id="latin" /><label for="latin">latin</label>
                    <input type="checkbox" name="arts_plastiques" id="arts_plastiques" /><label for="arts_plastiques">arts_plastiques</label>
                    <h4>Options 1 au choix</h4>
                    <input type="checkbox" name="sante_et_social" id="sante_et_social" /><label for="sante_et_social">sante_et_social</label>
                    <input type="checkbox" name="management_et_gestion" id="management_et_gestion" /><label for="management_et_gestion">management_et_gestion</label>

                    <h2>Classe de 1ère</h2>
                    <input type="checkbox" name="allemand" id="allemand" /><label for="allemand">allemand</label>
                    <input type="checkbox" name="espagnol" id="espagnol" /><label for="espagnol">espagnol</label>
                    <input type="checkbox" name="italien" id="italien" /><label for="italien">italien</label>
                    <h4>Enseignement de spécialité (3 obligatoires)</h4>
                    <input type="checkbox" name="mathematiques" id="mathematiques" /><label for="mathematiques">mathematiques</label>
                    <input type="checkbox" name="S.V.T." id="S.V.T." /><label for="S.V.T.">S.V.T.</label>
                    <input type="checkbox" name="physique - chimie" id="physique - chimie" /><label for="physique - chimie">physique - chimie</label>
                    <input type="checkbox" name="SES" id="SES" /><label for="SES">SES</label>
                    <input type="checkbox" name="humanite litterature et philosophie" id="humanite litterature et philosophie" /><label for="humanite litterature et philosophie">humanite litterature et philosophie</label>
                    <input type="checkbox" name="arts_plastiques" id="arts_plastiques" /><label for="arts_plastiques">arts_plastiques</label>
                    <h4>Options</h4>
                    <input type="checkbox" name="latin" id="latin" /><label for="latin">latin</label>
                    <input type="checkbox" name="arts_plastiques" id="arts_plastiques" /><label for="arts_plastiques">arts_plastiques</label>

                    <h2>Classe de Terminale</h2>
                    <input type="checkbox" name="allemand" id="allemand" /><label for="allemand">allemand</label>
                    <input type="checkbox" name="espagnol" id="espagnol" /><label for="espagnol">espagnol</label>
                    <input type="checkbox" name="italien" id="italien" /><label for="italien">italien</label>
                    <h4>Enseignement de spécialité (2 obligatoires)</h4>
                    <input type="checkbox" name="mathematiques" id="mathematiques" /><label for="mathematiques">mathematiques</label>
                    <input type="checkbox" name="S.V.T." id="S.V.T." /><label for="S.V.T.">S.V.T.</label>
                    <input type="checkbox" name="physique - chimie" id="physique - chimie" /><label for="physique - chimie">physique - chimie</label>
                    <input type="checkbox" name="SES" id="SES" /><label for="SES">SES</label>
                    <input type="checkbox" name="humanite litterature et philosophie" id="humanite litterature et philosophie" /><label for="humanite litterature et philosophie">humanite litterature et philosophie</label>
                    <input type="checkbox" name="arts_plastiques" id="arts_plastiques" /><label for="arts_plastiques">arts_plastiques</label>
                    <h4>Options</h4>
                    <input type="checkbox" name="latin" id="latin" /><label for="latin">latin</label>
                    <input type="checkbox" name="arts_plastiques" id="arts_plastiques" /><label for="arts_plastiques">arts_plastiques</label>
                    <input type="checkbox" name="mathematiques complémentaires" id="mathematiques complémentaires" /><label for="mathematiques complémentaires">mathematiques complémentaires</label>
                    <input type="checkbox" name="mathematiques expertes" id="mathematiques expertes" /><label for="mathematiques expertes">mathematiques expertes</label>
                    <input type="checkbox" name="droit et enjeux du monde comtemporain" id="droit et enjeux du monde comtemporain" /><label for="droit et enjeux du monde comtemporain">droit et enjeux du monde comtemporain</label>

                </ul>


            </p>
            
            <input type="submit" value="Envoyer">


        </form>

    </body>
</html>
