SELECT 
    jour09.etudiants.prenom, 
    jour09.etudiants.nom, 
    jour09.etudiants.naissance 
FROM 
    jour09.etudiants 
WHERE 
    jour09.etudiants.sexe = "Femme" ;