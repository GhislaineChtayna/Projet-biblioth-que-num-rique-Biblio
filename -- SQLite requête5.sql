-- SQLite
SELECT id, email, nom, prenom, mdp, sel
FROM utilisateur;

SELECT *
FROM utilisateur INNER JOIN pret
ON utilisateur.id = pret.utilisateur_id
WHERE date_fin>= Date()
AND date_fin< Date()+10;
