import React from "react";
import SearchBar from "./SearchBar";
import MovieList from "./MovieList";
import axios from "axios";
import AddMovie from "./AddMovie";
import { BrowserRouter as Router, Switch, Route, Link } from "react-router-dom"

class App extends React.Component {
  state = {
    movies: [],
    searchQuery: ""
  };


  deleteMovie = (movie) => {
    const baseURL = `http://localhost:3002/movies/${movie.id}`;
    axios.delete(baseURL);
    const newMovieList = this.state.movies.filter(m => m.id !== movie.id);
    this.setState(state => ({ movies: newMovieList }))
  }
  searchMovie = (event) => {
    this.setState({ searchQuery: event.target.value })
  }
  /*async componentDidMount(){
    const baseURL="http://localhost:3002/movies";
    const response= await fetch(baseURL);
    const data=await response.json();
    console.log(data);
    this.setState({movies:data})
  }*/
  componentDidMount() {
    const baseURL = "http://localhost:3002/movies";
    const response = axios.get(baseURL).then((res) => this.setState({ movies: res.data }));


    //this.setState({movies:data})
  }
  render() {
    let filteredMovies = this.state.movies.filter((movie) => { return movie.name.toLowerCase().indexOf(this.state.searchQuery.toLowerCase()) !== -1 });
    // 2.yol movie.name.toLowerCase().includes(this.state.searchQuery.toLowerCase())  
    return (
      <Router>
        <div className="container">

          <Switch>
            <Route path="/add" component={AddMovie} />
            <Route path="/" render={() => (
              <React.Fragment>
                <div className="row">
                  <div className="col-lg-12">
                    <SearchBar searchMovieProp={this.searchMovie} />
                  </div>
                </div>
                {
                  (filteredMovies.length > 0) ? <MovieList movies={filteredMovies} deleteMovieProps={this.deleteMovie} /> : <h3 className="alert alert-danger">Bulunamadı</h3>
                }
              </React.Fragment>
            )}>

            </Route>

          </Switch>

        </div>
      </Router>
    )
  }
}

export default App;