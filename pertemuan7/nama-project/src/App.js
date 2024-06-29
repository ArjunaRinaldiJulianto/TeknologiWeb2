// import logo from './logo.svg';
// import './App.css';
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

// array untuk menyimpan data
// const phoneData = [
//   { name: "iPhone X", price: "10000000", discount: "50" },
//   { name: "Oppo Find x", price: "14000000", discount: "30" },
//   { name: "Redmi Note X", price: "5000000", discount: "42"},
//   { name: "Vivo XYZ", price: "10000000", discount: "0"},
// ]

// membuat komponen dengan props name, price, dan discount
// function Product({ name, price, discount = 0 }) {
//   return (
//     <div>
//       <h2>{ name }</h2>
//       {/* <p>
//         <s>Rp { price }</s> ({ discount }%)
//       </p> */}
//       { discount > 0 && <p><s>Rp { price }</s> ({ discount }%)</p> }
//       <p>
//         <b>Rp { parseInt(price) - parseInt(price) * (parseInt(discount) / 100) }</b>
//       </p>
//       <hr />
//     </div>
//   );
// }

// function Product({ name, price, discount = 0 }) {
//   return (
//     <div className="product">
//       <h2>{name}</h2>
//       {/* <p>
//         <s>Rp { price }</s> ({ discount }%)
//       </p> */}
//       { discount > 0 && <p><s>Rp { price }</s> ({ discount }%)</p> }
//       <p>
//         <b>Rp { parseInt(price) - parseInt(price) * (parseInt(discount) / 100) }</b>
//       </p>
//       <hr />
//       <style jsx>{`
//         .product {
//           background-color: #f4f4f4;
//           border-radius: 8px;
//           padding: 16px;
//           margin-bottom: 16px;
//           box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
//         }
//         h2 {
//           color: #333;
//           font-size: 20px;
//           margin-bottom: 8px;
//         }
//         p {
//           color: #666;
//           font-size: 16px;
//           margin: 8px 0;
//         }
//         b {
//           color: #00aaff;
//           font-size: 18px;
//         }
//       `}</style>
//     </div>
//   );
// }

// menggunakan component di dalam App()
// function App() {
//   return (
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
// <div>
//   <Product name="Indomie" price="3000" discount="10" />
//   <Product name="Kecap" price="7000" />
//   <Product name="Mie Sedap" price="3500" discount="5" />
// </div>
// <div>
//   { phoneData.map((phone, id) => (
//     <Product 
//       key = { id } 
//       name = { phone.name } 
//       price = { phone.price } 
//       discount = { phone.discount } 
//     />
//   )) }
// </div>
//   );
// }

// export default App;

// const people = [
//   'Creola Katherine Johnson: mathematician', 
//   'Mario José Molina-Pasquel Henríquez: chemist', 
//   'Mohammad Abdus Salam: physicist',
//   'Percy Lavon Julian: chemist',
//   'Subrahmanyan Chandrasekhar: astrophysicist'
// ];
// export default function List() {
//   const listItems = people.map(
//     person => <li>{person}</li>
//   );
//   return <ul>{listItems}</ul>;
// }

// import { people } from './data.js';
// import { getImageUrl } from './utils.js';

// export default function List() {
//   const chemists = people.filter(person =>
//     person.profession === 'chemist'
//   );
//   const listItems = chemists.map(person =>
//     <li>
//       <img
//         src={getImageUrl(person)}
//         alt={person.name}
//       />
//       <p>
//         <b>{person.name}:</b>
//         {' ' + person.profession + ' '}
//         known for {person.accomplishment}
//       </p>
//     </li>
//   );
//   return <ul>{listItems}</ul>;
// }

// export default function List() {
//   const listItems = people.map(person =>
//     <li key={person.id}>
//       <img
//         src={getImageUrl(person)}
//         alt={person.name}
//       />
//       <p>
//         <b>{person.name}:</b>
//         {' ' + person.profession + ' '}
//         known for {person.accomplishment}
//       </p>
//     </li>
//   );
//   return <ul>{listItems}</ul>;
// }

import { IF6B } from './T13P14.js';

// export default function List() {
//   const listItems = IF6B.map(person =>
//     <li key={person.id}>
//       <p>
//         <b>{person.name}:</b>
//         {' ' + person.city}
//       </p>
//     </li>
//   );
//   return <ul>{listItems}</ul>;
// }

export default function List() {
  const city = IF6B.filter(person =>
    person.city === 'Kota Cimahi'
  );
  const listItems = city.map(person =>
    <li key={person.id}>
      <p>
        <b>{person.name}:</b>
        {' ' + person.city}
      </p>
    </li>
  );
  return <ul>{listItems}</ul>;
}