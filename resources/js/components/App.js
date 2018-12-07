import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Carousel from './Carousel';

class App extends Component {
    render() {
        return (
            <div>
                <Carousel/>
            </div>
            
        )
    }
}

    ReactDOM.render(<App />, document.getElementById('example'));

export default App