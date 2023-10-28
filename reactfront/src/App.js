import logo from './logo.svg';
import './App.css';

import { BrowserRouter, Routes, Route } from 'react-router-dom';

import ShowInmueble from './components/ShowInmueble';
import CreateInmueble from './components/CreateInmueble';
import EditInmueble from './components/EditInmueble';

function App() {
  return (
    <div className="App">
      <BrowserRouter>
        <Routes>
          <Route path="/" element={<ShowInmueble />} />
          <Route path="/inmuebles/create" element={<CreateInmueble />} />
          <Route path="/inmuebles/edit/:id" element={<EditInmueble />} />
        </Routes>
      </BrowserRouter>

    </div>
  );
}

export default App;
