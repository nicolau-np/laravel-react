import React from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter,Route,Switch} from 'react-router-dom';
import Home from './components/Home';
import Add from './components/Add';
import Edit from './components/Edit';

function Index() {
    return (
<BrowserRouter>
<Switch>
    <Route path="/" exact component={Home}/>
    <Route path="/add" exact component={Add}/>
    <Route path="/:id/edit" exact component={Edit}/>
    <Route path="/" exact component={Home}/>
</Switch>
</BrowserRouter>
    );
}

export default Index;

