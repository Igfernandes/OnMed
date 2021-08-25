/**
 * @SERVER
 * 
 * @app A variável responsável por armazenar as configurações do servidor atual.
 */

const app = require('./config/_server');


/**
 * @START_SERVER
 * 
 * #Info - Declaração para iniciar o servidor.
 */

app.listen(3000, ()=>{
    console.log("SERVIDOR: ON")
})