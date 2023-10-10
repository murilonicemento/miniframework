<?php

namespace App\Controllers;

use MF\Controller\Action;
use App\Models\Info;
use App\Models\Produto;
use MF\Model\Container;

class IndexController extends Action {
  public function index() {
    $produto = Container::getModel("Produto");
    $produtos = $produto->getProduto();
    $this->view->dados = $produtos;
    $this->render("index", "layout1");
  }

  public function sobreNos() {
    $info = Container::getModel("Info");
    $infos = $info->getInfo();
    $this->view->dados = $infos;
    $this->render("sobreNos", "layout1");
  }
}
