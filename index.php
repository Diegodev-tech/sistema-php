<?php

class Produto {

private $nome;
private $preco;
private $quantidade;

public function __construct(string $nome, float $preco, int $quantidade) {
$this->nome = $nome;
$this->preco = $preco;
$this->quantidade = $quantidade;
}

public function setProduto(array $data): void {
$this->nome = $data['nome'];
$this->preco = $data['preco'];
$this->quantidade = $data['quantidade'];
}

public function getProduto(): array {
return [
'nome' => $this->nome,
'preco' => $this->preco,
'quantidade' => $this->quantidade,
];
}
}

class Venda extends Produto {

private $quantidade;
private $desconto;

public function __construct(string $nome, float $preco, int $quantidade, float $desconto) {
parent::__construct($nome, $preco, $quantidade);
$this->quantidade = $quantidade;
$this->desconto = $desconto;
}

public function setVenda(array $data): void {
$this->setProduto($data);
$this->quantidade = $data['quantidade'];
$this->desconto = $data['desconto'];
}

public function getVenda(): array {
return [
'nome' => $this->nome,
'preco' => $this->preco,
'quantidade' => $this->quantidade,
'desconto' => $this->desconto,
];
}

public function validarEstoque(): void {
if ($this->quantidade <= 0) { throw new Exception('O estoque do produto é insuficiente.'); } } public function registrarVenda(): array { $this->validarEstoque();

    $this->quantidade -= 1;

    return $this->getVenda();
    }
    }






