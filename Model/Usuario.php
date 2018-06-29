<?php

Class Usuario{
	/**
	 * @var $us_ukey
	*/
	private $us_ukey;
	/**
	 * @var $us_nome
	*/
	private $us_nome;
        /**
	 * @var $us_email
	*/
	private $us_email;
	/**
	 * @var $us_sexo
	*/
	private $us_sexo;
	/**
	 * @var $us_data
	*/
	private $us_data;
	/**
	 * @var $us_time
	*/
	private $us_time;
	/**
	 * @var $ps_char
	*/
	private $ps_char;

	/* METÓDOS GETTERS AND SETTERS */        
        function getUkey() {
            return $this->us_ukey;
        }

        function getNome() {
            return $this->us_nome;
        }

        function getSexo() {
            return $this->us_sexo;
        }

        function getData() {
            return $this->us_data;
        }

        function getTime() {
            return $this->us_time;
        }

        function getChar() {
            return $this->ps_char;
        }

        function setUkey($ukey) {
            $this->us_ukey = $ukey;
        }

        function setNome($nome) {
            $this->us_nome = $nome;
        }

        function setSexo($sexo) {
            $this->us_sexo = $sexo;
        }

        function setData($data) {
            $this->us_data = $data;
        }

        function setTime($time) {
            $this->us_time = $time;
        }

        function setChar($char) {
            $this->ps_char = $char;
        }

        
        public function setEmail($email){
            $this->us_email = $email;
        }
	public function getEmail(){
            return $this->us_email;
        }
}