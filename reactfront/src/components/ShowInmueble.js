import React, {useEffect, useState} from 'react'
import axios from 'axios'

import {Link} from 'react-router-dom'

const endpoint = 'http://localhost:8000/api'
const ShowInmueble = () => {
    const [inmueble, setInmueble] = useState([])

    useEffect(() => {
        getAllInmuebles()
    }, [])

    const getAllInmuebles = async () => {
        const response = await axios.get(`${endpoint}/inmuebles`)
        setInmueble(response.data)

    }

    const deleteInmueble = async (id) => {
           await axios.delete(`${endpoint}/inmuebles/${id}`) 
           getAllInmuebles()
        }

  return (
    <div className='container'>

            <Link to="/inmuebles/create" className="btn btn-success mt-2">Crear Inmueble</Link>
            <br/>
            <br/>
        <table className="table table-light">
            <thead className="bg-primary text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Condicion</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Precio Total</th>
                    <th scope="col">Fecha de Expiracion</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                {
                    inmueble.map((inmueble, index) => (
                        <tr key={index}>
                            <th scope="row">{inmueble.id}</th>
                            <td>{inmueble.Nombre}</td>
                            <td>{inmueble.Condicion}</td>
                            <td>{inmueble.Precio}</td>
                            <td>{inmueble.Condicion === 'Venta' ? inmueble.Precio * inmueble.Mts2:inmueble.Precio * inmueble.Meses}</td>
                            <td>{inmueble.Tiempo_Alquiler}</td>
                            <td>
                                <Link to={`/inmuebles/edit/${inmueble.id}`} className="btn btn-warning btn-sm m-1">Editar</Link>
                                <button onClick={() => {
                                    if (window.confirm('¿Está seguro de que desea eliminar este inmueble?')) {
                                        deleteInmueble(inmueble.id);
                                    } 
                                }}className="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                    ))
                }
            </tbody>
        </table>
    </div>
  )
}

export default ShowInmueble