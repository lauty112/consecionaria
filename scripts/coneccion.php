<?php
function conectarPostgreSQL() {
    $config = [
        'host' => 'localhost',
        'port' => '5432',
        'dbname' => 'concesionaria',
        'username' => 'postgres',
        'password' => '46315468'
    ];
    
    try {
        // Construir DSN sin charset
        $dsn = "pgsql:host={$config['host']};port={$config['port']};dbname={$config['dbname']}";
        
        $pdo = new PDO($dsn, $config['username'], $config['password']);
        
        // Configuraciones
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
        // Establecer codificación
        $pdo->exec("SET CLIENT_ENCODING TO 'UTF8'");
        
        return $pdo;
        
    } catch (PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
    }
}

// Uso
$conexion = conectarPostgreSQL();
echo "Conectado exitosamente";
?>