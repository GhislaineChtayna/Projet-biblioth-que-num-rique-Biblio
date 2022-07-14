-- SQLite
SELECT ide, isbn, `bibliothèque`
FROM exemplaire;

SELECT *
FROM livre INNER JOIN exemplaire
ON livre.isbn = exemplaire.isbn
