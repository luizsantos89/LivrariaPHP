<?php
    require_once('../dao/conexao.inc');
    require_once('../classes/modeloLivraria.inc');

    class LivroDAO{
        private $con;

        function LivroDAO(){
            $c = new Conexao();
            $this->con = $c->getConexao();
        }

        public function incluirLivro(Livro $livro){
            $sql = $this->con->prepare("insert into livros (isbn, titulo, edicao_num, ano_publicacao, descricao, preco) values (:isbn, :tit, :edic, :ano, :desc, :prec)");

            $sql->bindValue(':isbn', $livro->getIsbn());
            $sql->bindValue(':tit', $livro->getTitulo());
            $sql->bindValue(':edic', $livro->getEdicao_num());
            $sql->bindValue(':ano', $livro->getAno_publicacao());
            $sql->bindValue(':desc', $livro->getDescricao());
            $sql->bindValue(':prec', $livro->getPreco());
            $sql->execute();
        }


        public function getLivros(){
            $rs = $this->con->query("SELECT * FROM livros");

            $lista = array();
            while($livro=$rs->fetch(PDO::FETCH_OBJ)){
                    $lista[] = $livro;
            }

            return $lista;
        }

        public function excluirLivro($isbn){

            $sql=$this->con->prepare("delete from livros where isbn= :isbn");

            $sql->bindValue(':isbn', $isbn);
            $sql->execute();
        }

        public function getLivro($isbn){
            $sql = $this->con->prepare("SELECT * FROM livros where isbn = :isbn");
            $sql->bindValue(':isbn', $isbn);
            $sql->execute();

            return $sql->fetch(PDO::FETCH_OBJ); // retorna o registro da tabela no formato do objeto Autor capturado

        }

        public function atualizarLivro(Livro $livro){
            $sql = $this->con->prepare("update livro set isbn=:isbn, titulo= :titulo, edicao_numero= :edicao_num, ano_publicacao: ano_publicacao, descricao = :descricao, preco = :preco where livro_id=:id");

            $sql->bindValue(':isbn', $livro->getIsbn());
            $sql->bindValue(':titulo', $livro->getTitulo());
            $sql->bindValue(':edicao_numero', $livro->getEdicao_num());
            $sql->bindValue(':ano_publicacao', $livro->getAno_publicacao());
            $sql->bindValue(':descricao', $livro->getDescricao());
            $sql->bindValue(':preco', $livro->getPreco());

            $sql->execute();          
        }
    }

?>