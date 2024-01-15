// Cria um produto
$produto = new Produto('Arroz', 10, 100);

// Exibe o produto
echo $produto->getProduto();
// [
//   'nome' => 'Arroz',
//   'preco' => 10,
//   'quantidade' => 100,
// ]

// Cria uma venda
$venda = new Venda('Arroz', 10, 10, 10);

// Registra a venda
$venda = $venda->registrarVenda();

// Exibe a venda
echo $venda;
// [
//   'nome' => 'Arroz',
//   'preco' => 10,
//   'quantidade' => 90,
//   'desconto' => 10,
// ]
// Verificar se é possível fazer a venda