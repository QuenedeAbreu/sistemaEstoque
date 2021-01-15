<?php
namespace src\controllers;



use \core\Controller;
use \src\models\Produto;

class ProdutosController extends Controller {
    
    public function add(){
        $this->render('add');
    }

    public function addAction(){
        $nome = filter_input(INPUT_POST, 'nome');
        $valor = filter_input(INPUT_POST, 'valor');
        $quantidade = filter_input(INPUT_POST, 'quantidade');

            if($nome && $valor && $quantidade){
                $data = Produto::select()->where('nome', $nome)->execute();

                if(count($data)===0){

                    Produto::insert([
                        'nome'=> $nome,
                        'valor'=> $valor,
                        'quantidade'=> $quantidade
                    ])->execute();
                        $_SESSION['msg_success'] = 'Produto cadastrado com sucesso!';
                    $this->redirect('/');
                    
                }else{
                    $_SESSION['msg_alert'] = 'Produto já cadastrado!';
                }
                
            }else{
                $_SESSION['msg_alert'] = 'Preencha todos os campos!';
            }
                $_SESSION['msg_error'] = 'Produto não cadastrado!';
                $this->redirect('/novo');
            
           
       
     }
       
    

    public function edit($args){
        $produto = Produto::select()->where('id', $args['id'])->one();


        $this->render('edit', [
            'produto' => $produto
        ]);
    }

    public function editAction($args){

        $nome = filter_input(INPUT_POST, 'nome');
        $valor = filter_input(INPUT_POST, 'valor');
        $quantidade = filter_input(INPUT_POST, 'quantidade');

        if($nome && $valor && $quantidade){

            Produto::update()
                ->set('nome', $nome)
                ->set('valor', $valor)
                ->set('quantidade', $quantidade)
                ->where('id', $args['id'])
            ->execute();

            $_SESSION['msg_info'] = 'Produto editado com sucesso!';
            $this->redirect('/');

        }
        $_SESSION['msg_alert'] = 'Preencha todos os campos!';
        $this->redirect('/produto/'.$args['id'].'/editar');

    }


    public function del($args){
        Produto::delete()
            ->where('id', $args['id'])
            ->execute();
            $_SESSION['msg_success'] = "Produto deletado com sucesso!";
        $this->redirect('/');
    }

}