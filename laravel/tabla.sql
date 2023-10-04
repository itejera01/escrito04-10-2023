CREATE TABLE Tarea(
    Id serial PRIMARY KEY,
    Titulo varchar(255),
    Contenido varchar(255),
    Estado varchar(255),
    autor varchar(255),
    created_at timestamp,
    updated_at timestamp,
    deleted_at timestamp
)