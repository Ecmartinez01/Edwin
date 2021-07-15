import React from 'react'
import DatosClima from './DatosClima';
import Labels from './Labels';
import './styles/Formulario.css'


export default class Formulario extends React.Component{
    constructor(props){
    super(props);
    this.state={
        ciudad: 'Bogota',
        clima:{
            temperatura:null,
            humedad: null,
            nombre: null,
            nubes: null,
            descripcion: null,
        },
    }
    };

    
 postData = async() => {
      let response =''
     try {
          response = await fetch(process.env.REACT_APP_API+this.state.ciudad+process.env.REACT_APP_KEY, {
      method: 'GET', 
    });
     } catch (error) {
         response = error.menssage
     }
    
    return response.json(); // parses JSON response into native JavaScript objects
  }

  print=async()=>{
      const clima = await this.postData()
        this.setState((state, props)=>({
            clima:{
                temperatura:parseInt(clima.main.temp, 10) -273.15 + '°C',
                humedad: clima.main.humidity+ '%',
                nombre: clima.name,
                nubes: clima.weather[0].main,
                descripcion:clima.weather[0].description
            },
        }))
    //   console.log(parseInt(clima.main.temp, 10) -273.15 + '°C');
    //   console.log(clima.main.humidity+ '%');
    //   console.log( clima.name);
    //   console.log( clima.weather[0].description);
    //   console.log( clima.weather[0].main);
    }
    
    onChange=(event)=>{
        // console.log({
        //     name: event.target.name,
        //     value: event.target.value,
        // });
        this.setState((state, props)=>({
            ciudad: event.target.value
        }))
    }
   render(){
     return( 
     <div className='formulario'>
         <Labels className='input' onChange={this.onChange} onClick={this.print} type='text' name='ciudad' titulo={this.state.clima.nombre}/>
         <DatosClima datos={this.state.clima} className='tablaD' />
     </div>)
   }
}