
SELECT * //select everything
FROM `imdb_movie_has_genre` //from table imdb_movie_has_genre
INNER JOIN 'imdb_genre' //and join the data from table imdb_genre so that column imdb_genre_id in the first table matched column id in the second table
    ON `imdb_movie_has_genre`.`imdb_genre_id` = `imdb_genre` .`id`
WHERE  `imdb_movie_has_genre`.`imdb_movie_id` = 71615
ORDER BY `imdb_movie_has_genre`.`priority` ASC;

