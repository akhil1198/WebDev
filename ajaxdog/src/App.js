import React from 'react';
import logo from './logo.svg';
import './App.css';
import DogImage from './DogImage'

class App extends React.Component {
  constructor(props){
    super(props)
    this.state = {
      dogImages: []
    };
  }

  componentDidMount(){
    fetch('https://dog.ceo/api/breed/germanshepherd/images/random/3')
    .then(res => res.json())
    .then((data) => {
      this.setState({
        dogImages: data.message
      })
    })
  }
  
  render(){
    const doglist = this.state.dogImages.map((url) => {
      return <DogImage url = {url} />
    })
    return(  
      <div className = "container">
        <h1 className="text">refresh for a surprise</h1>
        {doglist}
      </div>
    )
  }
}

export default App;
