import React from "react";

class SearchBar extends React.Component {

    handleFormSubmit = (event) => {
        event.preventDefault();
        //
    }
    render() {
        return (
            <form onSubmit={this.handleFormSubmit}>
                <div className="form-row mb-5 mt-5">
                    <div className="row">
                        <div className="col-lg-10">
                            <input onChange={this.props.searchMovieProp} type="text" className="form-control" placeholder="Ara" />
                        </div>
                        <div className="col-lg-2">
                            <button type="button" className="btn btn-danger" style={{ float: "right" }}>
                                Add Movie
                        </button>
                        </div>
                    </div>
                </div>
            </form>
        )
    }
}

export default SearchBar;