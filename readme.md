# Código 1
## Erros encontrados
### ; 
Na seguinte parte do código estava faltando um ";"
- $stmt->bind_param("ssi", $nome, $email, $id)

### ;
Na seguinte parte do código estava faltando um ";"
- $resultado = $conn->query($sql)

### {
Um "{" onde não deveria, não esta fechando com nada
- <?php while ($usuario = $resultado->fetch_assoc()) { ?>

# Código 2
