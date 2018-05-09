<?php

    class Autor{
        public $autor_id;
        public $nome;
        public $email;
        public $dt_nasc;

        public function setAutor($id,$nome,$email,$data)
        {
                $this->autor_id = $id;
                $this->nome = $nome;
                $this->email = $email;
                $this->dt_nasc = strtotime($data);
        }

        function Autor($nome,$email,$data){
                $this->nome = $nome;
                $this->email = $email;
                $this->dt_nasc = strtotime(str_replace('/', '-', $data)) ;
        }

        public function getAutor_id(){
                return $this->autor_id;
        }

        public function setAutor_id($pId){
                return $this->autor_id = $pId;
        }

        public function getNome(){
                return $this->nome;
        }

        public function setNome($pNome){
                return $this->nome = $pNome;
        }

        public function getEmail(){
                return $this->email;
        }

        public function setEmail($pEmail){
                return $this->email = $pEmail;
        }

        public function getDataNascimento(){
                return $this->dt_nasc;
        }

        public function setDataNascimento($pData){
                return $this->dt_nasc = strtotime($pData);
        }
    }

	class Livro{
		public $isbn;
		public $titulo;
		public $edicao_num;
		public $ano_publicacao;
		public $descricao;
		public $preco;

		public function setLivro($isbn, $titulo, $edicao_num, $ano_publicacao, $descricao, $preco){
			$this->isbn = $isbn;
			$this->titulo = $titulo;
			$this->edicao_num = $edicao_num;
			$this->ano_publicacao = strtotime($ano_publicacao);
			$this->descricao = $descricao;
			$this->preco = $preco;
		}

		public function Livro($isbn, $titulo, $edicao_num, $ano_publicacao, $descricao, $preco){
			$this->isbn = $isbn;
			$this->titulo = $titulo;
			$this->edicao_num = $edicao_num;
			$this->ano_publicacao = $ano_publicacao;
			$this->descricao = $descricao;
			$this->preco = $preco;
		}

		public function getIsbn(){
			return $this->isbn;
		}

		public function setIsbn($pIsbn){
			return $this->isbn = $pIsbn;
		}

		public function getTitulo(){
			return $this->titulo;
		}

		public function setTitulo($pTitulo){
			return $this->titulo = $pTitulo;
		}

		public function getEdicao_num(){
			return $this->edicao_num;
		}

		public function setEdicao_num($pEdicao_num){
			return $this->edicao_num = $pEdicao_num;
		}

		public function getAno_publicacao(){
			return $this->ano_publicacao;
		}

		public function setAno_publicacao($pAno_publicacao){
			return $this->ano_publicacao = $pAno_publicacao;
		}

		public function getDescricao(){
			return $this->descricao;
		}

		public function setDescricao($pDescricao){
			return $this->descricao = $pDescricao;
		}

		public function getPreco(){
			return $this->preco;
		}

		public function setPreco($pPreco){
			return $this->preco = $pPreco;
		}

	}

?>