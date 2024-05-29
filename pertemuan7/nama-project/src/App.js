// import logo from './logo.svg';
import './App.css';
// import Title from './Title';

// function MyComponent() {
//   const imgPlaceholder = 'https://via.placeholder.com/150';
//   return (
//     <div>
//       <button>{ 1 + 2 }</button>
//       <button>{ Date.now() }</button>
//       <img src={imgPlaceholder}/>
//     </div>
//   );
// }

// membuat komponen dengan props name, price, dan discount
// function Product({ name, price, discount = 0 }) {
//   return (
//     <div>
//       <h2>{ name }</h2>
//       <p>
//         <s>Rp { price }</s> ({ discount }%)
//       </p>
//       <p>
//         <b>Rp { parseInt(price) - parseInt(price) * (parseInt(discount)) / 100 }</b>
//       </p>
//       <hr />
//     </div>
//   );
// }

function Product({ name, price, discount = 0 }) {
  return (
    <div className="product">
      <h2>{name}</h2>
      <p>
        <s>Rp {price}</s> ({discount}%)
      </p>
      <p>
        <b>Rp {parseInt(price) - parseInt(price) * parseInt(discount) / 100}</b>
      </p>
      <hr />
      <style jsx>{`
        .product {
          background-color: #f4f4f4;
          border-radius: 8px;
          padding: 16px;
          margin-bottom: 16px;
          box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h2 {
          color: #333;
          font-size: 20px;
          margin-bottom: 8px;
        }
        p {
          color: #666;
          font-size: 16px;
          margin: 8px 0;
        }
        b {
          color: #00aaff;
          font-size: 18px;
        }
      `}</style>
    </div>
  );
}

// menggunakan component di dalam App()
function App() {
  return (
    // <div className="App">
    //   <header className="App-header">
    //     <img src={logo} className="App-logo" alt="logo" />
    //     <p>
    //       Edit <code>src/App.js</code> and save to reload.
    //     </p>
    //     <a
    //       className="App-link"
    //       href="https://reactjs.org"
    //       target="_blank"
    //       rel="noopener noreferrer"
    //     >
    //       Learn React
    //     </a>
    //     <Title />
    //   </header>
    //   <MyComponent />
    // </div>
    <div>
      <Product name="Indomie" price="3000" discount="10" />
      <Product name="Kecap" price="7000" />
      <Product name="Mie Sedap" price="3500" discount="5" />
    </div>
  );
}

export default App;
