-- SQLite
SELECT ide, isbn, `bibliothèque`
FROM exemplaire;

SELECT *
FROM exemplaire INNER JOIN pret
ON exemplaire.ide = pret.exemplaire_id
