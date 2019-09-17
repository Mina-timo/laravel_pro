import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios'
// import { connect } from 'react-redux';
import {BrowserRouter as Router,Link,Route} from 'react-router-dom'

export default class Page extends Component {
    constructor(){
        super();
        this.state ={
            datass : []
        }
    }
    componentWillMount(){
        axios.get('/api/Girls').then(response => {
            this.setState({
                datass : response.data
            })
            // .catche(errors =>{
            //     console.log(errors);
            // })
            //  catch(errors =>{
            //     // console.console.log('====================================');
            //     console.log(errors);
            //     // console.log('====================================');
            // })
        })
    }
    render() {
        return (
            <div className="container">
                <h1>welcome page!!</h1>
                <br/>    <br/>
                <h1>welcome page!!!!</h1>    <br/>
                {/* <Link to="/" >{this.state.datass.map(d =><li>{d.Fname}</li>)}</Link>  */}
                {this.state.datass.map(d =><li>{d.Fname}</li>)}
               
               {/* {this.state.datass.map(d =>
               <li><Link to={"/"+d.id}>{d.Fname}</Link></li>
               )} */}

                {/* <Route ></Route> */}
            </div>
        );              
    }
}

if(document.getElementById('page')){
    ReactDOM.render(<Page /> , document.getElementById('page'));
}