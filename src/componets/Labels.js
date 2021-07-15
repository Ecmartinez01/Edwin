import React from 'react'
import './styles/Labels.css'

export default class Labels extends React.Component{
    constructor(props){
    super(props);
    this.state={}
    };
   render(){
     return( 
     <div>
         <h3 className='titulo'>{this.props.titulo}</h3>
         <input onChange={this.props.onChange} className='formulario-control' type={this.props.type}  name={this.props.valueName}></input>
        <button onClick={this.props.onClick}>buscar</button>
    </div>
     )
   }
}