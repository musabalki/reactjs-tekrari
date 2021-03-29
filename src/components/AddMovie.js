import React from "react";

class AddMovie extends React.Component {

    render() {
        return (
            <div className="row">
                <div>
                    Add Movie
                </div>
                <div className="col-lg-6 mb-2">
                    <input type="text" placeholder="Name" className="form-control" />
                </div>
                <div className="col-lg-6 mb-2">
                    <input type="text" placeholder="Rating" className="form-control" />
                </div>
                <div className="col-lg-6 mb-2">
                    <input type="text" placeholder="Image URL" className="form-control" />
                </div>
                <div className="col-lg-6 mb-2">
                    <input type="text" placeholder="Overview" className="form-control" />
                </div>
            </div>
        )
    }
}

export default AddMovie;