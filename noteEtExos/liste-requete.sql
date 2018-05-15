-- + All games with more than 2 '-' in slug 
SELECT slug FROM games WHERE slug LIKE '%-%-%' 

-- All games with name like "Something: Something else"
SELECT name FROM games WHERE name LIKE '%:%' 

--All games with rating superior to average rating
SELECT name, popularity FROM games WHERE popularity>(SELECT AVG(popularity) FROM games)

-- + All games developed by developer with ID inferior to 10000 and rating > 1
SELECT name, developer, popularity FROM games WHERE developer<10000 AND popularity>1 

-- All games with id superior to its developer
SELECT name, developer, id FROM games WHERE id>developer

-- All Naruto games ordered by rating
SELECT name, popularity FROM games WHERE name LIKE '%Naruto%' ORDER BY popularity

--Average rating of all Naruto games
SELECT AVG(popularity) FROM games WHERE name LIKE '%Naruto%' 