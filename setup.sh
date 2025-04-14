#!/bin/bash

echo "Inicializando base de datos local con SQLite..."

# Verifica si el archivo local.db ya existe y lo elimina para iniciar limpio
if [ -f "local.db" ]; then
    echo "Eliminando base de datos existente..."
        rm local.db
        fi

        # Crea nueva base de datos desde el schema.sql
        echo "Creando nueva base de datos desde config/schema.sql..."
        sqlite3 local.db < config/schema.sql

        echo "¡Base de datos lista y cargada con éxito!"