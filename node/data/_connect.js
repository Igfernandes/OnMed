/**
 * @CONECT_DATABASE
 * 
 * @sql - Quarda os métodos necessários para fazer uma conexão com o banco de dados com o módulo "mysql"
 * @$cnt - Armazena todos os dados e métodos necessários para fazer uma requisição ao banco de dados.
 **/

const sql = require('mysql');

//Encapsulamento para impedir requisições desnecessárias

const $cnt = function(){
    console.log("A conexão com o Banco de Dados foi estabelecida!")
    return sql.createConnection({
        host: "localhost",
        user: "root",
        password: "",
        database: "portal_noticias"
    })
}

module.exports = function(){
    console.log("Modulo de conexão do DB: Carregador!")
    return $cnt
}