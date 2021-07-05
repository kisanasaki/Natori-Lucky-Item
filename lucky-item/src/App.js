import React from 'react';
import './App.css';

function App() {
  let items = [
    {"name":"いちご","price":"100"},
    {"name":"りんご","price":"150"},
    {"name":"バナナ","price":"230"}
  ]
  return (
    <div className="App"></>
  )
}

class Clock extends React.Component{
  render(){
    return <p>コンポーネントだよ</p>
  }
}

export default App;
