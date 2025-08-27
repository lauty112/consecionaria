import psycopg2
from psycopg2 import Error

try:
    conexion = psycopg2.connect(
        host="localhost",
        database="concesionaria",
        user="postgres",
        password="46315468"
    )
    
    cursor = conexion.cursor()
    cursor.execute("SELECT * FROM usuarios ;")
    registros = cursor.fetchall()
    
    for fila in registros:
        print(fila)
        
except (Exception, Error) as error:
    print("Error al conectar a PostgreSQL:", error)
    
finally:
    if conexion:
        cursor.close()
        conexion.close()
        print("Conexión cerrada")
