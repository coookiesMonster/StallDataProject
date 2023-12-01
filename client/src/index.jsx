import App from './App.jsx';
import {createRoot} from'react-dom/client';

const div = document.querySelector("#app");
const root = createRoot(div);
root.render(<App />);
