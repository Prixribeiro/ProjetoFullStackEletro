import React from 'react';
import {Container, Row} from 'react-bootstrap';


class Form extends React.Component {
  render() {
    return (
      <Container fluid>
      <form method="post" className="form-group-sm">
        <Row><h2 className="row-center text-danger text-center">Dúvidas, Sugestões e Elogios</h2></Row>
        <br></br>
        <Row><p>Qual o seu nome:</p></Row>
        <input type="text" />
        <br></br>
        <Row><p>Qual o seu email:</p></Row>
        <input type="email" />
        <br></br>
        <Row><p>Qual o seu telefone:</p></Row>
        <input type="text" />
        <br></br>
        <Row><p className="row-sm-center">Digite sua Mensagem:</p></Row>
        <textarea class="form-control-center" placeholder="Digite sua mensagem aqui..."></textarea>
        <br></br>
        <Row><input class="btn-outline-dark bg-sucess btn-sm text-dark" type="submit" value="Enviar"/>
       <input class="btn-outline-dark bg-danger btn-sm text-white justify-content-end" type="submit" value="Reset" /></Row>
       <br></br>
       <br></br>
       <br></br>
      </form>
      </Container>
    );
  }
}
export default Form;
