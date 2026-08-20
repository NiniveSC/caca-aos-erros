# Código 1
## Erros encontrados
### 1° - ; 
Na seguinte parte do código estava faltando um ";"
- `$stmt->bind_param("ssi", $nome, $email, $id)`

### 2° - ;
Na seguinte parte do código estava faltando um ";"
- `$resultado = $conn->query($sql)`

### 3° - $conn
Onde deveria estar $conexao esta $conn, em todod código, um deles:
- `$conn = new mysqli($host, $user, $password, $database)`

### 4° - ;
Faltou um ";" no final
- `die ("Erro na conexão: " . $conexao->connect_error)`

# Código 2
