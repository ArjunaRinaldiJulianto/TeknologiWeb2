// import logo from './logo.svg';
// import './App.css';
import AppHeader from './appHeader/appHeader';
import AppMenu from './appMenu/appMenu';
import AppFooter from './appFooter/appFooter';
import AppSetting from './appSetting/appSetting';
import AppDashboard from './appDashboard/appDashboard';


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
    //   </header>
    // </div>
    <div className="wrapper">
      <AppHeader />
      <AppMenu />
      <AppFooter />
      <AppSetting />
      <AppDashboard />
    </div>
  );
}

export default App;
