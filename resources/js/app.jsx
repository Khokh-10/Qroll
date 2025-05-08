import './bootstrap';
import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import Login from '../views/components/Login';
import Home from '../views/components/Home';

class ErrorBoundary extends React.Component {
    constructor(props) {
        super(props);
        this.state = { hasError: false };
    }

    static getDerivedStateFromError(error) {
        return { hasError: true };
    }

    componentDidCatch(error, errorInfo) {
        console.error('React Error:', error, errorInfo);
    }

    render() {
        if (this.state.hasError) {
            return (
                <div style={{ padding: '20px', color: 'red' }}>
                    <h1>Something went wrong.</h1>
                    <button onClick={() => this.setState({ hasError: false })}>Try again</button>
                </div>
            );
        }

        return this.props.children;
    }
}

const App = () => {
    console.log('App component rendering'); // Debug log
    return (
        <ErrorBoundary>
            <BrowserRouter>
                <div style={{ minHeight: '100vh' }}>
                    <Routes>
                        <Route path="/" element={<Home />} />
                        <Route path="/login" element={<Login />} />
                    </Routes>
                </div>
            </BrowserRouter>
        </ErrorBoundary>
    );
};

// Mount the application
const container = document.getElementById('app');
if (container) {
    console.log('Found root container, mounting app...'); // Debug log
    const root = createRoot(container);
    root.render(
        <React.StrictMode>
            <App />
        </React.StrictMode>
    );
} else {
    console.error('Root container not found!'); // Debug log
}
