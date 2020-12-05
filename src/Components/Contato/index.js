import React from 'react';
import { Button, Form, FormGroup, Label, Input} from 'react-inputs-validation/lib/react-inputs-validation.min.css';

class Contato extends React.Component {
            constructor(props) {
                super(props);
                this.state = {value: ''};
            
                this.handleChange = this.handleChange.bind(this);
                this.handleSubmit = this.handleSubmit.bind(this);
            }
            
            handleChange(event) {
                this.setState({value: event.target.value});
            }
            
            handleSubmit(event) {
                alert('Um nome foi enviado: ' + this.state.value);
                event.preventDefault();
            }

            render() {
                return (
            <Form onSubmit={this.handleSubmit}>
                <h1>Fale Conosco</h1>
                <hr></hr>
                <FormGroup>
                    <Label for="nome">Nome</Label>
                    <Input type="text" name="nome" id="nome" placeholder="Digite seu nome aqui"  value={this.state.value} onChange={this.handleChange}/>
                </FormGroup>

            <FormGroup>
                <Label for="exampleEmail">Email</Label>
                <Input type="email" name="email" id="Email" placeholder="exemplo@seuemail.com" value={this.state.value} onChange={this.handleChange}/>
            </FormGroup>

            <FormGroup>
                    <Label for="fone">Telefone</Label>
                    <Input type="text" name="fone" id="nomefone" placeholder="Digite sem traços ou pontos" value={this.state.value} onChange={this.handleChange}/>
                </FormGroup>
            
            <FormGroup>
                <Label for="texto">O Que você nos conta de bom hoje?</Label>
                <Input type="textarea" name="text" id="exampleText" value={this.state.value} onChange={this.handleChange} />
            </FormGroup>
        
            <FormGroup check>
                <Label check>
                <Input type="checkbox" value={this.state.value} onChange={this.handleChange}/>{' '}
                Desejo me cadastrar para receber Newsletters e Promoções
                </Label>
            </FormGroup>
            <Button>Enviar</Button>
            </Form>
        );
    }
}
export default Contato;