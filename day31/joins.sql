
SELECT * #select everything
FROM `imdb_movie_has_genre` #from table imdb_movie_has_genre
INNER JOIN 'imdb_genre' #and join the data from table imdb_genre so that column imdb_genre_id in the first table matched column id in the second table
    ON `imdb_movie_has_genre`.`imdb_genre_id` = `imdb_genre` .`id`
WHERE  `imdb_movie_has_genre`.`imdb_movie_id` = 71615
ORDER BY `imdb_movie_has_genre`.`priority` ASC;

SELECT * 
FROM `imdb_movie` 
INNER JOIN `imdb_movie_type` 
    ON `imdb_movie`.`imdb_movie_type_id` = `imdb_movie_type`.`id`
WHERE `imdb_movie`.`imdb_id` = 96697

SELECT *
FROM `imdb_movie_has_person`
INNER JOIN `imdb_person`
    ON `imdb_movie_has_person`.`imdb_person_id` = `imdb_person`. `imdb_id`
WHERE `imdb_movie_has_person`. `imdb_movie_id` = 34583

SELECT `imdb_movie_has_origin_country`.*
FROM `imdb_movie_has_origin_country`
LEFT JOIN `imdb_movie_origin_country`
    ON `imdb_movie_has_origin_country`.`imdb_movie_origin_country_id` = `imdb_movie_origin_country`. `id`
WHERE `imdb_movie_has_origin_country`. `imdb_movie_id` = 34583