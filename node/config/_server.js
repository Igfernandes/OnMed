/**
 * @SERVER_CONFIG
 * 
 * As configurações abaixo são dependências de todo o projeto. Caso haja modificação, tenha 
 * certeza ou consulte adocumentação. Este projeto depende dos modulos abaixo.
 * 
 * @http    Armazena as configurações base do servidor
 * @app     Armazena as configurações atualizadas e atuais
 * @csg     Servirá como função para executar o consign que irá auto executar arquivos.
 * 
*/

const http = require('express');
const app = http();
const csg = require('consign');
const bodyParse = require('body-parser');


/**
 * Criando uma rota estática para expor informações.
 */
app.use(http.static('public'));

/**
 * Configurando uma forma mais prática de introdução de parâmetros
 */
app.use(bodyParse.urlencoded({extended: true}))


/**
 * Configurando para que o node busque as views pelo caminho padrão.
 * Além disso, configurando para que o formato das views seja "ejs".
 */
app.set('view engine', 'ejs')
app.set('views', './inc/views')


/**
 * Configurando os lementos que entraram no loop do autoload do consign.
 */
csg()
    .include('inc/routs')
    .then('data/_connect.js')
    .then('data/models')
    .into(app)


module.exports = app;