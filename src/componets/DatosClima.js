import React from 'react'
import './styles/DatosClima.css'

export default class DatosClima extends React.Component{
    constructor(props){
    super(props);
    this.state={}
    };

   render(){
     return( 
     <div>
         <table className='tablaClima'>
         <thead>
            <tr>
                <th>Datos</th>
                <th>
                    Valores
                </th>
            </tr>
         </thead>
         <tbody>
            <tr>
                <td>Ciudad</td>
                <td>
                    {this.props.datos.nombre}
                </td>
            </tr>
            <tr>
                <td>Temperatura</td>
                <td>
                    {this.props.datos.temperatura}
                </td>
            </tr>
            <tr>
                <td>Nubes</td>
                <td>
                    {this.props.datos.nubes}
                </td>
            </tr>
            <tr>
                <td>Humedad</td>
                <td>
                    {this.props.datos.humedad}
                </td>
            </tr>
            </tbody>
         </table>

     </div>)
   }
}


