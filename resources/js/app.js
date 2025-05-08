import './bootstrap';
import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import Login from '../views/components/Login';
import Home from '../views/components/Home';

// Create a root component that includes routing
const App = () => {
    return (
        <BrowserRouter>
            <Routes>
                <Route path="/" element={<Home />} />
                <Route path="/login" element={<Login />} />
            </Routes>
        </BrowserRouter>
    );
};

// Render the app
const root = document.getElementById('app');
if (root) {
    createRoot(root).render(<App />);
}
