# Código 1
## Erros encontrados
### 1° - ; 
Na seguinte parte do código estava faltando um ";"
- $stmt->bind_param("ssi", $nome, $email, $id)

### 2° - ;
Na seguinte parte do código estava faltando um ";"
- $resultado = $conn->query($sql)

### 3° - {
Um "{" onde não deveria, não esta fechando com nada
- <? php while ($usuario = $resultado->fetch_assoc()) { ?>

# Código 2
