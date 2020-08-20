import React,{Comment, Component} from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

class Home extends Component {
    constructor(props){
        super(props);
        this.state = {
            contacts: []
        }
    }

    componentDidMount(){
        axios.get('/api/contacts')
        .then(resposnse => {
            this.setState({
                contacts: resposnse.data
            })
        }).catch(err=> console.log(err));
    }


 

    render(){
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header"><h1>All Contacts</h1></div>

                        <div className="card-body">
                            <table className="table table-bordered">
                            <thead>
                            <tr>
                            <th>Phone</th>
                            <th>Name</th>
                            <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            { this.state.contacts !== null
        ? this.state.contacts.map(contact =>(
            <tr key={contact.id}>
                            <td>{contact.phone}</td>
                            <td>{contact.name}</td>
                            <td>
                            edit
                            delete
                            </td>
                            </tr>
                )) : null }
                            


                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}
}

export default Home;

if (document.getElementById('app')) {
    ReactDOM.render(<Home />, document.getElementById('app'));
}
