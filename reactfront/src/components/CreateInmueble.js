import React, {useState} from 'react'
import axios from 'axios'
import { json, useNavigate } from 'react-router-dom'

const endpoint = 'http://localhost:8000/api/inmuebles'

const CreateInmueble = () => {
    const [nombre, setNombre] = useState('')
    const [condicion, setCondicion] = useState('Venta')
    const [tipo, setTipo] = useState('')
    const [zonificacion, setZonificacion] = useState('')
    let [tiempoAlquiler, setTiempoAlquiler] = useState('')
    const [meses, setMeses] = useState(0)
    const [precio, setPrecio] = useState(0)
    const [mts2, setMts2] = useState(0)
    const [habitaciones, setHabitaciones] = useState(0)
    const [baños, setBaños] = useState(0)

    const navigate = useNavigate()

    const store = async (e) => {
        e.preventDefault()
        const data = {
            Nombre: nombre,
            Tipo: tipo,
            Zonificacion: zonificacion,
            Condicion: condicion,
            Tiempo_Alquiler: null,
            Meses: meses,
            Precio: precio,
            Mts2: mts2,
            Habitaciones: habitaciones,
            Baños: baños
        };
        
        if (condicion === 'Alquiler') {
            const currentDate = new Date();
            const expirationDate = new Date(currentDate.setMonth(currentDate.getMonth() + parseInt(meses)));
            tiempoAlquiler = expirationDate.toISOString().slice(0, 10);
        }
        console.log(JSON.stringify(data));

        await axios.post(endpoint, {
            Nombre: nombre,
            Tipo: tipo,
            Zonificacion: zonificacion,
            Condicion: condicion,
            Tiempo_Alquiler: tiempoAlquiler,
            Meses: meses,
            Precio: precio,
            Mts2: mts2,
            Habitaciones: habitaciones,
            Baños: baños
        })
        navigate('/')

    }

  return (
    <div className="container">
        <h1>Crear Inmueble</h1>
        <hr />
        <form onSubmit={store}>
            <div className="row g-3 align-items-center">
                <div className="col">
                    <label htmlFor="Nombre" className="form-label mt-2">Nombre</label>
                    <input value={nombre} type="text" className="form-control" id="Nombre" onChange={(e) => setNombre(e.target.value)} required />
                </div>
                <div className="col">
                    <label htmlFor="Tipo" className="form-label mt-2">Tipo</label>
                    <input value={tipo} type="text" className="form-control" id="Tipo" onChange={(e) => setTipo(e.target.value)} required/>
                </div>
            </div>
            <div className="row g-3 align-items-center">
                <div className="col">
                    <label htmlFor="Zonificacion" className="form-label mt-2">Zonificacion</label>
                    <input value={zonificacion} type="text" className="form-control" id="Zonificacion" onChange={(e) => setZonificacion(e.target.value)} required/>
                </div>
                <div className="col">
                    <label htmlFor="Condicion" className="form-label mt-2">Condicion</label>
                    <select value={condicion} className="form-select" aria-label="Venta" onChange={(e) => setCondicion(e.target.value)} required>
                        <option value="Venta">Venta</option>
                        <option value="Alquiler">Alquiler</option>
                    </select>
                </div>
            </div>
            <div className="row g-3 align-items-center">
                <div className="col">
                    <label htmlFor="Meses" className="form-label mt-2">Tiempo de Alquiler (Meses)</label>
                    <input value={meses} type="number" className="form-control" id="Meses" onChange={(e) => setMeses(e.target.value)} disabled={condicion === 'Venta'} required/>
                </div>
                <div className="col">
                    <label htmlFor="Baños" className="form-label mt-2 mt-2">Baños</label>
                    <input value={baños} type="number" className="form-control" id="Baños" onChange={(e) => setBaños(parseInt(e.target.value))} required/>
                </div>
            </div>
            <div className="row g-3 align-items-center">
                <div className="col">
                    <label htmlFor="Mts2" className="form-label mt-2">Metros2</label>
                    <input value={mts2} type="number" className="form-control" id="Mts2" onChange={(e) => setMts2(parseInt(e.target.value))} required/>
                </div>
                <div className="col">
                    <label htmlFor="Habitaciones" className="form-label mt-2">Habitaciones</label>
                    <input value={habitaciones} type="number" className="form-control" id="Habitaciones" onChange={(e) => setHabitaciones(parseInt(e.target.value))} required/>
                </div>
            </div>
                <div className="col">
                    <label htmlFor="Precio" className="form-label mt-2">Precio</label>
                    <input value={precio} type="number" className="form-control" id="Precio" onChange={(e) => setPrecio(parseInt(e.target.value))} required/>
                </div>

            <button type="submit" className="btn btn-primary mt-3">Guardar</button>
            
        </form>
    </div>
  )
}

export default CreateInmueble