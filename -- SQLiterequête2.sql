-- SQLite
SELECT isbn, titre, editeur_id, date_publication, description_id, langue
FROM livre;

SELECT *
FROM livre
WHERE titre like?
