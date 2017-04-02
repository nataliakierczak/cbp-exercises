import hello from './functions.js';

import React from 'react';
import ReactDOM from 'react-dom';

hello();

var h1 = React.createElement('h1', { id: 'heading1' },
    React.createElement('span', {}, 'span within the heading'),
    React.createElement('div', { className: 'foo' }, 'div within the heading')
);

ReactDOM.render(h1, document.getElementById('react-app'));

