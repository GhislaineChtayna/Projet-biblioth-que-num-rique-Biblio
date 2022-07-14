-- SQLite
SELECT id, date_debut, date_fin, renouvele, utilisateur_id, exemplaire_id
FROM pret;

SELECT *
FROM pret
WHERE renouvele = 'oui'
