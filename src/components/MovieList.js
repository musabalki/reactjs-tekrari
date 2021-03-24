import React from "react"

const MovieList = (props)=>{
 
        return (
            <div className="container">
                <div className="row">
                    {
                      props.movies.map((movie) => {
                            return (
                                <div className="col-lg-4 col-md-6" key={movie.id}>
                                    <div className="card mb-4 shadow-sm">
                                        <img style={{height:"400px",objectFit:"cover"}} alt="" className="card-img-top" src={movie.imageURL} />
                                        <div style={{height:"100%"}} className="card-body">
                                            <h5 className="card-title">{movie.name}</h5>
                                            <p className="card-text">{movie.overview}</p>
                                            <div className="d-flex justify-content-between align-items-center">
                                                <button type="button" className="btn btn-md btn-outline-danger">Delete</button>
                                                <h2><span className="bg-dark text-white pe-2 ps-2">{movie.rating}</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            )
                        })
                    }
                </div>
            </div>
        )
    
}

export default MovieList;