/**
Criamos um banco de DADOS

em PostgreSQL
 - acessou com psql livro -Upostgres
 - dt\ 
 - \d famosos
 - select * from famosos 

CREATE TABLE famosos (codigo integer, nome varchar(40))


*/
<?php
// criamos uma conexao com método antigo
$conn = pg_connect('host=localhost, port="5432" dbname=livro user=postgres password=');
pg_query ($conn, "INSERT INTO famosos (codigo, nome) VALUES (1, 'Erico Veríssimo')" );
pg_query ($conn, "INSERT INTO famosos (codigo, nome) VALUES (2, 'Eduardo Sphor')" );
pg_query ($conn, "INSERT INTO famosos (codigo, nome) VALUES (3, 'J. K. Rownling')" );
pg_query ($conn, "INSERT INTO famosos (codigo, nome) VALUES (4, 'Rodrigo Bibo')" );

 
pg_close ($conn);


?>
