# Código 1
## Erros encontrados
### 1° - ; 
Na seguinte parte do código estava faltando um ";" no final
- `$stmt->bind_param("ssi", $nome, $email, $id)`

### 2° - ;
Na seguinte parte do código estava faltando um ";" no final
- `$resultado = $conn->query($sql)`

### 3° - $conn
Onde deveria estar $conexao esta $conn, em todo código, um deles:
- `$conn = new mysqli($host, $user, $password, $database)`

### 4° - ;
Faltou um ";" no final
- `die ("Erro na conexão: " . $conexao->connect_error)`

### 5° - editar
Não mostrava nas ações a opção editar, apenas a excluir enão eu adicionei
- `<td>
   <a href="codigo1.php?excluir=<?= $usuario['id'] ?>">
   Excluir
  </a>   
  <a href="codigo1.php?editar=<?= $usuario['id'] ?>">
  Editar
  </a> </td>`

# Código 2
